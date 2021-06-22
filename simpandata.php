<?php
include 'koneksi.php';



// menyimpan data ke dalam variabel
$no_surat            =    $_POST['no_surat'];
$tanggal_surat       =    $_POST['tanggal_surat'];
$tanggal_diterima    =    $_POST['tanggal_diterima'];
$id_departemen       =    $_POST['id_departemen'];
$nama_pengirim       =    $_POST['nama_pengirim'];
$file       		 =    $_POST['gambar'];
$jenis_surat         =    $_POST['jenis_surat'];

$query="INSERT INTO tbl_arsip SET no_surat='$no_surat', tanggal_surat='$tanggal_surat',tanggal_diterima='$tanggal_diterima', jenis_surat='$jenis_surat', id_departemen='$id_departemen', nama_pengirim='$nama_pengirim',file='$file'";



mysqli_query($koneksi, $query);
//echo $query;
// mengalihkan ke halaman index.php
header("location:halamanutama.php");
?>