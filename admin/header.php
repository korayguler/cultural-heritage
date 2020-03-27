<?php

$aylar_TR = array("Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık");
$aylar_EN = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");

if (!isset($_SESSION['admin_logged'])) {
    header('Location:login.php');
  }
  
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Yönetim Paneli</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">

                <a class="navbar-brand" href="index.php">Yönetim Paneli</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: left;
font-size: 17px;"><i> <?php echo str_replace($aylar_EN, $aylar_TR, date("d M Y")); ?> &nbsp; &nbsp;</i> </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
                <?php echo $_SESSION["admin_logged"] ?>&nbsp;&nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Çıkış Yap</a> </div>
        </nav>