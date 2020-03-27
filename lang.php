<?php
session_start();
$lang=strip_tags($_GET["lang"]);

if($lang=="tr" || $lang=="en"){
    $_SESSION["lang"]=$lang;
    header("Location:index.php");
}else{
    header("Location:index.php");
}