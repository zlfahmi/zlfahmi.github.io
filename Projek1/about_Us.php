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
    <title>About Us</title>
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
    
    <table border="1" width="70%">
        <tr>
            <th>Misi Kami</th>
            <th>Objektif Kami</th>
        </tr>
        <tr>
            <td>Menjuarai pembangunan bumiputera profesional yang tangkas menerusi kurikulum terkehadapan dan penyelidikan berimpak.</td>
            <td><ol>
                <li>Memperluas akses pendidikan tinggi</li>
                <li>Menyediakan Pendidikan bertaraf dunia</li>
                <li>Menawarkan program akademik yang memenuhi keperluan pasaran, memacu pembangunan negaradan kemakmuran global</li>
            </ol></td>
        </tr>
        <tr>
            <th>Janji Kami</th>
            <th>Motivasi Kami</th>
        </tr>
        <tr>
            <td>Menjadikan UiTM sebuah universiti terkemuka dunia dalam bidang Sains, Teknologi, Kemanusiaan dan Keusahawanan.</td>
            <td>Setiap individu mampu mencapai kecemerlangan melalui pemindahan ilmu serta penerapan nilai-nilai murni agar menjadi graduan profesional yang berupaya mengembangkan ilmu dan membangunkan diri, masyarakat dan negara.</td>
        </tr>
    </table>
</body>
</html>