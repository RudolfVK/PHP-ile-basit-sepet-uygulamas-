<?php 

$dbhost = "localhost";

$dbuser = "root"; 
$dbpass = "";
$dbdata = "sepet_uygulamasi";


 try {  $db = new PDO("mysql:host=$dbhost;dbname=$dbdata", "$dbuser", "$dbpass");
        $db->exec("SET NAMES utf8");
    } 
	catch (PDOException $e) {  die($e->getMessage());    } 

?>