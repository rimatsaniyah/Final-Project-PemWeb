    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>INPUT SURAT</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
        <body class="bg-success">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-5 rounded-lg mt-5">
                                    <center><div class="card-header"><h3 class="text-center font-weight-light my-4">Form Input Data Surat</h3></div></center>
                                    <div class="card-body">
                                        
                                        <form method="post" action="simpandata.php">
                                           <div class="form-floating mb-3">
                                                <input class="form-control" id="inputno_surat" type="text" placeholder="no_surat" name="no_surat" required />
                                                <label for="inputNik">No.Surat</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputTanggalsurat" type="date" placeholder="Tanggalsurat" name="tanggal_surat" min="<?= date('Y-m-d'); ?>" required />
                                                <label for="inputTanggalsurat">Input Tanggal Surat</label>
                                            </div>
                                           <div class="form-floating mb-3">
                                                <input class="form-control" id="inputTanggalditerima" type="date" placeholder="tanggal_diterima" name="tanggal_diterima"/>
                                                <label for="inputTanggalsurat">Tanggal Surat diterima </label>
                                            </div>                                            
                                            <div>
                                                <p>Jenis Surat</p>
                                                
                                                    <input type="radio" id="jenis_surat" name="jenis_surat" value="resmi"> Resmi
                                                    <br>
                                                    <input type="radio" id="jenis_surat" name="jenis_surat" value="tidak resmi"> Tidak Resmi
                                            </div><br>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputiddepartemen" type="text" placeholder="id_departemen" name="id_departemen" required />
                                                <label for="inputTelp">Nama Departemen </label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputidpengirim" type="text" placeholder="id_pengirim" name="nama_pengirim" required />
                                                <label for="inputidpengirim">Nama Pengirim</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="file" class="form-control" name="gambar">
                                                    <p class="text-danger">FORMAT JPEG/PNG UKURAN MAKSIMAL 2MB</p>
                                                </div>
                                                <button class="btn btn-primary" name="kirim">KIRIM</button>                                 
                                            </div>
                                        </form>	
                                    </div> 
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="arsipdata.php">Kembali</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
                    </div>
                </footer>
            </div>
        </div>
        <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; By NOER ALAM  & RIMA TSANIYAH 2021 </div>
                        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
