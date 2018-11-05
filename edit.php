<?php
	include("connect.php");
	
	$kode = $_POST["kode"];
	$nama = $_POST["nama"];
	$deskripsi = $_POST["deskripsi"];
	$stok = $_POST["stok"];
	$harga = $_POST["harga"];
	$berat = $_POST["berat"];
	
	if (trim($kode)=="") {
		echo "Kode masih kosong, isi dengan benar";
	}
	elseif (trim($nama)=="") {
		echo "Nama masih kosong, isi dengan benar";
	}
	elseif (trim($deskripsi)=="") {
		echo "Deskripsi masih kosong, isi dengan benar";
	}
	elseif (trim($stok)=="") {
		echo "Stok masih kosong, isi dengan benar";
	}
	elseif (trim($harga)=="") {
		echo "Harga masih kosong, isi dengan benar";
	}
	elseif (trim($berat)=="") {
		echo "Berat masih kosong, isi dengan benar";
	}
	else {
	$data=mysql_query("update barang SET kode='$kode', nama='$nama', deskripsi='$deskripsi', stok='$stok', harga='$harga', berat='$berat' where kode='$kode'");
	header("location:Tabel.php");
	}
?>