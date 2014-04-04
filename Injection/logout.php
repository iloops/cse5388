<?php
session_start();
unset($_SESSION['usr_username']);

session_destroy();
//echo 'destroy';
 header("Location: index.php?msg=Session_DESTROY");

?>
