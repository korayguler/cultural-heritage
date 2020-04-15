<?php
include 'admin/settings/connect_db.php';

if (!isset($_SESSION["lang"])) {
    require("lang/tr.php"); $_SESSION["lang"]="tr";
} else {
    require("lang/" . $_SESSION['lang'] . ".php");
}

$sql = "select * from control";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $row["c_description"] ?>">
    <meta name="keywords" content="<?php echo $row["c_keywords"] ?>">
    <meta name="author" content="korayguler.com">
    <!--CSS -->
    <link rel="icon" href="<?php echo $lang["ico"]; ?>" />
    <link rel="stylesheet" href="assets/css/mobile.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/card-slider.css >
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">




    <title><?php echo $row['c_title']; ?></title>
</head>
<style>
.bg{
   background: url(<?php echo $lang["c_bg"]?>);
   width: 100%;
   height: auto;
   position: relative;
   background-repeat: no-repeat;
   background-position: center center;
   background-size: cover;
   background-attachment: fixed;
}
 

</style> 


<body onload="document.body.style.opacity='1'">

    <nav class="navbar navbar-expand-lg fixed-top" id="menu-sc">
        <div class="container  menu-x">
            <a class="navbar-brand" href="index.php"><?php echo  '<img src="' . $lang["logo"] . '">' ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">M</span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                        <a class="nav-link" href="hakkimizda.php"><?php echo $lang["hakkimizda"]; ?></a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="etkinlikler.php"><?php echo $lang["etkinlikler"]; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeri.php"><?php echo $lang["galeri"]; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="envanter.php"><?php echo $lang["envanter"]; ?></a>
                    </li>
                  
                  
                    <li class="nav-item active">
                        <a class="nav-link" href="biz.php">
                            <?php echo $lang["medyada_biz"]; ?>
                        
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="iletisim.php"><?php echo $lang["iletisim"]; ?></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto text-center">

                    <?php if ($_SESSION["lang"] == "tr") {

                        echo "<li class='lang-select'><a class='list-group-item-light lang-select-a'href='lang.php?lang=en'>" . $lang["dil"] . "</a></li>";
                    } else if ($_SESSION["lang"] == "en") {
                        echo "<li class='lang-select'><a class='list-group-item-light lang-select-a' href='lang.php?lang=tr'>" . $lang["dil"] . "</a></li>";
                    }
                    ?>
                </ul>
            </div>
    </nav>
    </div>