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
    <title>My Homepage - Hobby</title>
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
    <p><img height="200" width="200" src="image/banner.jpg" alt=""></p>

    <h1>Selamat Datang ke Homepage Saya</h1>

    <p>Ini adalah laman web saya yang pertama</p>

    <h3>Hobi Saya</h3>

    <p>Hobi saya adalah melayari Internet untuk membaca artikel-artikel berkaitan minat saya dan bermain permainan video bersama kawan-kawan saya sambil berborak di dalam aplikasi Discord</p>

</body>

</html>
