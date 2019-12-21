<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$db = "haicup";
$konek = new mysqli($host, $user, $pass, $db);

$nama = $_POST['nama'];
$nomor = $_POST['nomor'];

$masuk ="insert into daftar values ('$nama', '$nomor')";
mysqli_query($konek, $masuk);
?>