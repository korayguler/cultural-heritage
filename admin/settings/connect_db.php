<?php
ini_set('session.gc_maxlifetime', 10);
session_set_cookie_params(600);
session_start();
ob_start();


$username="root";
$pass="";
$host="localhost";
$database="antakya";

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



?>