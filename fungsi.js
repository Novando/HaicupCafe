function hitungSub(counter) {
	var harga = document.getElementById("harga-"+counter).value;
	var jumlah = document.getElementById("jumlah-"+counter).value;
	var sub = harga * jumlah;
	document.getElementById("sub-"+counter).value = sub;
}

function total() {
	var bayar = 0;
	for (var i = 1; i <= 31; i++) {
		bayar = bayar + parseInt(document.getElementById("sub-"+i).value);
	}
	document.getElementById("pertama").style.display = "none";
	document.getElementById("kedua").style.display = "block";
	document.getElementById("total").innerHTML = "IDR " + bayar;
}

function selesai() {
	window.location.href = "https://localhost/haicupcafe";
}