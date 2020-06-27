<?php
$nama = $ttl = $Jeniskelamin = $alamat = $nomor = $agama = $Kesehatan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = test_input($_POST["nama"]);
  $ttl = test_input($_POST["ttl"]);
  $Jeniskelamin = test_input($_POST["Jeniskelamin"]);
  $alamat = test_input($_POST["alamat"]);
  $nomor = test_input($_POST["nomor"]);
  $agama = test_input($_POST["agama"]);
  $Kesehatan = test_input($_POST["Kesehatan"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
   echo "Nama : ".$nama;
   echo "<br />";
   echo "Tempat Tanggal Lahir : ".$ttl;
   echo "<br />";
   echo "Jenis Kelamin : ".$Jeniskelamin;
   echo "<br />";
   echo "Alamat : ".$alamat;
   echo "<br />";
   echo "Nomor telepon : ".$nomor;
   echo "<br />";
   echo "Agama : ".$agama;
   echo "<br />";
   echo "Riwayat Penyakit : ".$Kesehatan;
?>