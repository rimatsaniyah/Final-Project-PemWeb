<?php


$host       = "localhost";
$user       = "root";
$password   = "";
$db         = "dbarsip";

// Create connection
$koneksi = new mysqli($host, $user, $password, $db);
// Check connection
if ($koneksi->connect_error) {
die("Connection failed: " . $koneksi->connect_error);
}
$id = $_GET["kode"];
//echo("ini id nya".$_GET["kode"]);
// sql to delete a record
$sql = "DELETE FROM `tbl_arsip` WHERE id_arsip= $id";

if ($koneksi->query($sql) === TRUE) {
echo "Data telah terhapus";
header("location:arsipdata.php");
} else {
echo "Data gagal terhapus: " . $koneksi->error;
}

$koneksi->close();
?>