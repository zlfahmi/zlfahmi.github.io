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
    <title>Photo Gallery</title>
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
    
    <h1>Galeri Gambar Makanan</h1>
    
    <img height="50" width="50" src="image/makanan1.webp" alt="Nasi lemak">
    <p>Nasi Lemak merupakan hidangan makanan Melayu. Ia diperbuat dari beras yang dimasak dengan santan kelapa, bawang merah, halia dan juga daun pandan. Nasi Lemak juga dikenali sebagai juadah kebangsaan Malaysia dan boleh di setiap pelosok Malaysia.</p>
    
    <img height="50" width="50" src="image/makanan2.webp" alt="Asam laksa">
    <p>Asam Laksa merupakan hidangan tradisi masyarakat Baba dan Nyonya. Hidangan ini merupakan mee beras yang disajikan bersama kuah ikan pedas. Keturunan Baba dan Nyonya ini pada asalnya merupakan immigrant Cina yang datang ke Tanah Melayu. Mereka ini telah menggabungkan budaya Melayu yang diterapkan dalam kehidupan seharian.</p>
    
    <img height="50" width="50" src="image/makanan3.webp" alt="Roti canai">
    <p>Roti Canai merupakan roti leper yang diperkenalkan oleh masyarakat India. Ia boleh didapati di kebanyakan restoran mamak dan restoran Melayu di Malaysia.</p>
    
    <img height="50" width="50" src="image/makanan4.webp" alt="Cendol">
    <p>Cendol adalah pencuci mulut yang berasal dari Indonesia, namun begitu popular di Malaysia. Ia diperbuat dari santan kelapa, jeli hijau yang diperbuat daripada tepung beras serta berwarna hijau, ais batu yang dikisar dan gula melaka.</p>
    
    <p>Gambar-gambar diatas merupakan makanan tradisonal yang mnejadi kegemaran setiap kaum di Malaysia. Klik gambar bagi melihat dengan lebih jelas</p>
    
</body>
</html>