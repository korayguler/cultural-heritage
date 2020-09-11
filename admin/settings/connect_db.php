<?php
ini_set('session.gc_maxlifetime', 2);
session_set_cookie_params(600);
session_start();
ob_start();

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$username=$url["user"];;
$pass=$url["pass"];;
$host=$url["host"];;
$database=substr($url["path"], 1);;

$conn = new mysqli($host, $username, $pass, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query("SET NAMES UTF8");


function kimOnline($sesid){
    global $conn;
   
    $sql = "INSERT INTO sessions (`id`, `time`) VALUES('".$sesid."', '".time()."') 
            ON DUPLICATE KEY UPDATE id='".$sesid."',`time`='".time()."'";
    $conn->query($sql);
    KullanicilariKaldir();
}

function KullanicilariKaldir(){
    global $conn;
    $zaman = time() - 600;
    $conn->query("DELETE FROM sessions WHERE time < ".$zaman); // 
}

error_reporting(false);
$adminName=$_SESSION["admin_logged"];
$sqlS="select * from admins where admin_username='$adminName'";
$reS=$conn->query($sqlS);
$rowS=$reS->fetch_assoc();
$adminRank=$rowS["admin_rank"];
?>
