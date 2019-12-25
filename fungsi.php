<?php
$konek = mysqli_connect("localhost", "root", "", "haicup");

function tarik($tarik) {
	global $konek;
	$hasil = mysqli_query($konek, $tarik);
	$baris = [];
	while ($baru = mysqli_fetch_assoc($hasil)) {
		$baris[] = $baru;
	}
	return $baris;
}
?>