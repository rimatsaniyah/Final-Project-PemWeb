<?php
session_start();

if(!isset($_SESSION['status_admin'])){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tampilan Arsip Surat</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="halamanutama.php">E-ARSIP</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="index.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="halamanutama.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Menu Utama
                            </a>
                            <a class="nav-link" href="Inputsurat.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tambah Data Surat
                            </a>
                         
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php
                            echo $_SESSION['username'];
                        ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tampilan Rekap Surat </h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tampilan Surat
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>no</th>
                                            <th>No. Surat</th>
                                            <th>Tanggal Surat di Input</th>
                                            <th>Tanggal Surat Diterima</th>
                                            <th>Perihal</th>
                                            <th>Nama Departemen</th>
                                            <th>Nama Pengirim</th>
                                            <th>File</th>
                                            <th>Hapus Data</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include 'koneksi.php';
                                            $arsip=mysqli_query($koneksi, "SELECT * FROM tbl_arsip");
                                            $no=1;
                                            foreach ($arsip as $row) {
                                                echo "<tr>  
                                                <td>".$row['id_arsip']."</td>
                                                <td>".$row['no_surat']."</td>
                                                <td>".$row['tanggal_surat']."</td>
                                                <td>".$row['tanggal_diterima']."</td>
                                                <td>".$row['jenis_surat']."</td>
                                                <td>".$row['id_departemen']."</td>
                                                <td>".$row['nama_pengirim']."</td>
                                                <td>".$row['file']."</td>
                                                <td> <a href='hapus.php?kode=$row[id_arsip]'>hapus</a></td>
                                                 ";                                               
                                                
                                           }
                                        ?>
                                            
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Button Cetak Excel -->
                    <button onclick="location.href = 'reportspreadsheet.php';" id="cetak" class="btn btn-warning" style="margin-left:2%;">Cetak File Excel</button>
                    <!-- Button Cetak PDF -->
                    <button onclick="location.href = 'reportpdf.php';" id="cetakpdf" class="btn btn-success" >Cetak File PDF</button>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; By NOER ALAM  & RIMA TSANIYAH 2021 </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>