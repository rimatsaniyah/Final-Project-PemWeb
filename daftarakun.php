<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>DAFTAR AKUN</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
        <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-5 rounded-lg mt-5">
                                    <center><div class="card-header"><h3 class="text-center font-weight-light my-4">Daftar Akun Baru</h3></div></center>
                                    <div class="card-body">
                                        <form method="post" action="simpandataakun.php">
                                           <div class="form-floating mb-3">
                                                <input class="form-control" id="inputno_surat" type="text" placeholder="nama_pengguna" name="nama_pengguna" required />
                                                <label for="inputnama_pengguna">Nama Pengguna</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputusername" type="text" placeholder="username" name="username" required />
                                                <label for="inputTanggalsurat"> Masukkan Username </label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputpassword" type="text" placeholder="password" name="password" required />
                                                <label for="inputTelp">Masukkan Password</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputemail" type="text" placeholder="email" name="email" required />
                                                <label for="inputidpengirim">Email Anda </label>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><input type="submit" class= "btn btn-primary" name="btnRegister" value="Daftar"></div>
                                            
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="index.php"></a></div>
                                        <a href="index.php">Kembali Ke Halaman Utama</a>  
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
