<?php
require "fungsi.php";

$harga = tarik("SELECT * FROM daftarmenu");
$counter = 0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>#SAYHAICUP</title>
	<link rel="stylesheet" type="text/css" href="cinta.css">
	<script type="text/javascript" src="fungsi.js"></script>
</head>
<body style="background-image: none;">
	<div class="navigasi" style="position: static; display: inline-block; background-color: black;">
		<a href="/haicupcafe" style="float:left;"><font face="apa">HAICUP</font></a>
		<a href="/haicupcafe/#Daftar">Daftar</a>
		<a href="/haicupcafe/#news">News</a>
		<a href="/haicupcafe/#location">Location</a>
		<a href="/haicupcafe/#review">Review</a>
		<a href="/haicupcafe/beli.php">Beli</a>
		<a href="/haicupcafe/#menu">Menu</a>
	</div>
	<div id="pertama" class="pertama">
		<center>
			<table>
				<tr>
					<th>ID</th>
					<th>Nama</th>
					<th>Harga</th>
					<th>Jumlah</th>
					<th>Sub-Total</th>
				</tr>
				<?php foreach ($harga as $hrg) { 
					$counter = $counter + 1;?>
					<tr>
						<td><?php echo $hrg["id"]; ?></td>
						<td><?php echo $hrg["nama"]; ?></td>
						<td><input class="kosong" id="harga-<?= $counter ?>" type="number" name="harga-<?= $counter ?>" value="<?php echo $hrg['harga']; ?>" disabled=""></td>
						<td><input maxlength="3" class="masukan-jumlah" id="jumlah-<?= $counter ?>" type="number" name="jumlah-<?= $counter ?>" onkeyup="hitungSub(<?= $counter ?>)"></td>
						<td><input class="kosong" id="sub-<?= $counter ?>" type="number" name="sub-total-<?= $counter ?>" value="0" disabled=""></td>
					</tr>
				<?php } ?>
				<tr>
					<td colspan="5">
						<center>
						<input class="bayar" type="button" value="BAYAR" onclick="total()">
						</center>
					</td>
				</tr>
			</table>
		</center>
	</div>
	<div id="kedua" class="kedua">
		<center>
			Total yang harus dibayar:<br>
			<p id="total">TEST</p><br>
			<input class="selesai" type="button" name="selesai" value="SELESAI" onclick="selesai()">
		</center>
	</div>
</body>
</html>