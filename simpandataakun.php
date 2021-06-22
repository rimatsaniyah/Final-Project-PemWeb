<?php
include 'koneksi.php';
// menyimpan data ke dalam variabel

$namauser   		 =    $_POST['nama_pengguna'];
$username            =    $_POST['username'];
$password      		 =    $_POST['password'];
$email				 =    $_POST['email'];

$query="INSERT INTO tbl_admin SET namauser='$username',username='$username', password='$password',email='$email'";



mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>