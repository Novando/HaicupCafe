<?php
require "kamu.php";

$nama = $_POST["nama"];
$nomor = $_POST["nomor"];

$masuk = "INSERT INTO member VALUES ('$nomor', '$nama', '')";
mysqli_query($konek, $masuk);
?>