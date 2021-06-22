<?php
	include('koneksi.php');
	require 'vendor/autoload.php';

	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

	$spreadsheet = new Spreadsheet();
	$sheet=$spreadsheet->getActiveSheet();
	$sheet->setCellValue('A1', 'No');
	$sheet->setCellValue('B1', 'No.surat');
	$sheet->setCellValue('C1', 'Tanggal Surat di Input');
	$sheet->setCellValue('D1', 'Tanggal Surat Diterima');
	$sheet->setCellValue('E1', 'jenis_surat');
	$sheet->setCellValue('F1', 'Departemen');
	$sheet->setCellValue('G1', 'Pengirim');
	$sheet->setCellValue('H1', 'File');

	$query=mysqli_query($koneksi, "SELECT * FROM tbl_arsip");
	$i=2;
	$no=1;
	while ($row=mysqli_fetch_array($query)) {
		$sheet->setCellValue('A'.$i, $no++);
		$sheet->setCellValue('B'.$i, $row['no_surat']);
		$sheet->setCellValue('C'.$i, $row['tanggal_surat']);
		$sheet->setCellValue('D'.$i, $row['tanggal_diterima']);
		$sheet->setCellValue('E'.$i, $row['jenis_surat']);
		$sheet->setCellValue('F'.$i, $row['id_departemen']);
		$sheet->setCellValue('G'.$i, $row['nama_pengirim']);
		$sheet->setCellValue('H'.$i, $row['file']);
		$i++;
	}

	$styleArray = [
		'borders' => [
			'allBorders' => [
				'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
			],
		],
	];
	$i=$i-1;
	$sheet->getStyle('A1:J'.$i)->applyFromArray($styleArray);

	$writer = new Xlsx($spreadsheet);
	$writer->save('Report Kearsipan.xlsx');	
?>
<!DOCTYPE html>
	<html>
		<head>
			<meta HTTP-EQUIV="REFRESH" content="2; url=Report Kearsipan.xlsx">
			<title>Berhasil Cetak Excel</title>
		</head>
		<body>
			<br><br><br><center><h1>Berhasil Simpan Data</h1></center>
		</body>
	</html>