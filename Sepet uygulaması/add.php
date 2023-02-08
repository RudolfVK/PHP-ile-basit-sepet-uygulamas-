<?php 
include "connection.php";

$id = $_POST["id"];

$guncelle = $db -> query("UPDATE urunler SET sepet='TRUE' WHERE id='$id'");

?>