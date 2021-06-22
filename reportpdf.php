<?php

include('koneksi.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM tbl_arsip");
$html = '<center><h3>Daftar File Arsip</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
            <tr>
            <th>No</th>
            <th>No.surat</th>
            <th>Tanggal Surat di Input</th>
            <th>Tanggal Surat Diterima</th>
            <th>jenis_surat</th>
            <th>Nama Departemen</th>
            <th>Nama Pengirim</th>
            <th>File</th>
            </tr>';
$no=1;
while ($row = mysqli_fetch_array($query)) {
    $html   .= "<tr>
    <td>".$no."</td
    <td>".$row['no_surat']."</td>
    <td>".$row['tanggal_surat']."</td>
    <td>".$row['tanggal_diterima']."</td>
    <td>".$row['jenis_surat']."</td>
    <td>".$row['id_departemen']."</td>
    <td>".$row['nama_pengirim']."</td>
    <td>".$row['file']."</td>
    </tr>";
	$no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'portrait');
// Rendering dari HTML ke PDF
$dompdf->render();
// Melakukan output file PDF
$dompdf->stream('Laporan Kearsipan.pdf');
?>