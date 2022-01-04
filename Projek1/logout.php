<?php
session_start();
unset($_SESSION["loggedin"]);
unset($_SESSION["userlevel"]);
header("Location:login.php");
?>