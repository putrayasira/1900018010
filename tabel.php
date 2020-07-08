<!DOCTYPE html>
<html>
<head>
	<title>tabel.html</title>
	<style type="text/css">
	body{
	font-family: sans-serif;
		background: #2db350;
	}

	table {
	width: 800px;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
	margin: 80px auto;
	padding: 30px 20px;
	border-radius: 20px;
	}

	td {
		padding: 15px;
		background-color: rgba(255,255,255,0.2);
		color: #fff;
	}
	</style>
</head>
<body>
		<?php 
		$nama = $ttl =$jk =$alamat = $nomor= $agama =$kes =" ";
		if($_SERVER['REQUEST_METHOD'] == "POST" ){
			$nama = $_POST['nama']; 
			$ttl = $_POST['ttl'];
			$jk = $_POST['Jeniskelamin'];
			$alamat = $_POST['alamat'];
			$nomor = $_POST['nomor'];
			$agama = $_POST['agama'];
			$kes = $_POST['Kesehatan'];
		
			$file = fopen("datakesehatanptpengangguran.txt", "a+");

			fputs($file, "$nama | $ttl | $jk | $alamat | $nomor | $agama | $kes \n");
			fclose($file);

		}
		
	?>

<h1 align="center" style="color: white">Data Kesehatan Karyawan PT Pengangguran Sukses</h1>
	<table border="1" width="1000px" align="center">
		<?php
			$file = fopen("datakesehatanptpengangguran.txt", "a+");
			while ($content = fgets($file,500)){
			$pisah = explode("|", $content);
				
				echo "<tr><td>Nama  </td><td> $pisah[0]</td></tr>";
				echo "<tr><td>Tempat, tanggal Lahir  </td><td> $pisah[1]</td></tr>";
				echo "<tr><td>Jenis Kelamin  </td><td> $pisah[2]</td></tr>";
				echo "<tr><td>Alamat</td><td> $pisah[3]</td></tr>";
				echo "<tr><td>nomor Telepon</td><td> $pisah[4]</td></tr>";
				echo "<tr><td>Agama  </td><td> $pisah[5]</td></tr>";
		 		echo "<tr><td>Riwayat Kesehatan  </td><td> $pisah[6]</td></tr>";
		 		echo "<tr><td colspan=2></td></tr>";
		}
			fclose($file);

		?>
		
	</table>
</body>
</html>
