<?php
session_start();
// Check if the user is logged in, if not then redirect him to login page
if ( !isset( $_SESSION["loggedin"] ) || $_SESSION["loggedin"] !== true ) {
    header( "location: login.php" );
    exit;
}
$usrlevel = $_SESSION["userlevel"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Comment</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <?php
    switch($usrlevel){
        case 1:
            include('menuAdmin.php');
            break;
        case 2:
            include('menuUser1.php');
            break;
    }
    ?>
    
    <h3>Borang Komen</h3>
    
    <form action="comment.html">
        <input type="text" name="Nama" value="Nama Anda"><br>
        <input type="radio" name="gender" value="lelaki" checked>Lelaki<br>
        <input type="radio" name="gender" value="perempuan" checked>Perempuan<br>
        <input type="text" name="Emel" value="Emel Anda"><br>
        <textarea name="Komen" id="" cols="30" rows="10">Masukkan komen anda disini</textarea><br>
        <input type="submit" value="Hantar">
    </form>
</body>
</html>