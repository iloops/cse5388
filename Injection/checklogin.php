<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 1/22/14
 * Time: 10:49 PM
 */
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="root"; // Mysql password
$db_name="cse5388"; // Database name
$tbl_name="cse5388.users"; // Table name

// Connect to server and select databse.
$db = new PDO("mysql:host=localhost;dbname=cse5388", "root", "root");

// username and password sent from form
$usr_username=$_POST['myusername'];
$usr_password=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
//$usr_username = stripslashes($usr_username);
//$usr_password = stripslashes($usr_password);
//$usr_username = mysql_real_escape_string($usr_username);
//$usr_password = mysql_real_escape_string($usr_password);

$sql="SELECT * FROM $tbl_name WHERE usr_username='$usr_username' and usr_password='$usr_password'";
$result = $db->query($sql);

// If result matched $usr_username and $usr_password, table row must be 1 row
$rows = $result->fetchAll();
var_dump($rows);
if(count($rows) > 0){
    //register username and password and redirect to file "login_success.php";
    $_SESSION['usr_username'] = $usr_username;
    $_SESSION['usr_password'] = $usr_password;
    header("location:login_success.php?name=$usr_username & msg=login_success & assg5612=success");



}
else {
    echo "Wrong Username or Password";
}

?>