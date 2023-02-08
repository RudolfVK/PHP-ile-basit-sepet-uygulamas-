<?php 
include "connection.php";

$id = $_POST["id"];

$guncelle = $db -> query("UPDATE urunler SET sepet='FALSE' WHERE id='$id'");

?>