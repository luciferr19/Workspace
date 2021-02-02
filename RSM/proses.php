<?php
//Include file koneksi ke database
include "konek.php";

//menerima nilai dari kiriman form pendaftaran

$nama=$_POST["nama"];
$alamat=$_POST["alamat"];
$kota=$_POST["kota"];
$jenis_kelamin=$_POST["jenis_kelamin"];
$pendidikan=$_POST["pendidikan"];
$skill=$_POST["skill"];
$pengalaman=$_POST["pengalaman"];
$status=$_POST["status"];
$hobi=$_POST["hobi"];
$jabatan=$_POST["jabatan"];



//Query input menginput data kedalam tabel anggota
  $sql="insert into anggota (username,nama,alamat,email,no_hp,password) values
		('$nama','$alamat','$kota','$jenis_kelamin','$pendidikan','$skill', 'pengalaman', '$status', '$hobi', '$jabatan')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($kon,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil simpan data pegawai";
	exit;
  }
else {
	echo "Gagal simpan data pegawai";
	exit;
}  

?>