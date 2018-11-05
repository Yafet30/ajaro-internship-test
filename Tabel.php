<html>
<head>
	<title>Kelola Data Barang</title>
	<link rel="stylesheet" href="Css.css" type="text/css">
</head>
<body>
	<h3><div class = "Jdl">KELOLA DATA BARANG</div></h3>
	<br>
	<br>
	<table width= 80% height= 5%  align = "center">
		<tr>
			<td><b>Data Barang</b></td>
			<td><p align= "right"><a href=Input.php><Button class = "btn">Tambah</Button></a></p></td>
		</tr>
	</table>
	<br>
	<table width= 80% height= 40% align = "center" border = 1 cellpadding= 0 cellspacing= 0>
		<tr align = "center">
			<td>Kode</td>
			<td>Nama</td>
			<td>Harga</td>
			<td>Aksi</td>
		</tr>
		
		<?php
			//koneksi ke database
			include("connect.php");
			//mengambil data dari tabel barang
			$tampil = mysql_query("select * from barang");
			while ($data = mysql_fetch_array($tampil)){
		?>

		<tr align = "center">
			<td><?php echo $data['kode']; ?> </td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['harga']; ?></td>
			<td class = "eh"><a href = "Update.php?no=<?php echo $data['id']; ?>">Edit</a> | <a href = hapus.php?id=<?php echo $data ['id'];?>">Hapus</a></td>
		</tr>
		
		<?php
			}
		?>
		

		

	</table>

</body>
</html>