<?php
session_start();

if(!isset($_SESSION['tbl_arsip'])){
    header("location: chart.php");
    exit;
}

include('koneksi.php');

//Mengambil Data 
$chart = mysqli_query($koneksi,"select * from tbl_arsip");
while($row = mysqli_fetch_array($chart)){
    $perihal[] = $row['perihal']; 
}

//Chart Surat
$perihal = mysqli_query($koneksi,"select * from tbl_arsip where perihal='surat resmi'");
$jml_suratresmi = mysqli_num_rows($perihal);
$perihal = mysqli_query($koneksi,"select * from tbl_arsip where perihal='Surat tidak resmi'");
$jml_surattidakresmi = mysqli_num_rows($perihal);

?>

