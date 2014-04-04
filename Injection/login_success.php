<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 1/22/14
 * Time: 10:59 PM
 */


session_start();
//if(!$_SESSION['name'] /*= 'usr_username' */){
//    header("location:index.php");
//}
?>

<html>

<body bgcolor="#dcdcdc">
Login Successful
<?php
$name = $_GET["name"];
echo "Welcome: $name";
//echo $_SESSION['usr_username'];
 echo $_SESSION['usr_username'];
?>





<section class="loginContainer">

        <form action="logout.php" method="post">
            <input type="submit" class="logoutButton" value="LOGOUT" />
        </form>




</section>
</body>
</html>