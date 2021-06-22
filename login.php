<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login E-ARSIP </h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="ceklogin.php">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputUsername" name="username" type="text" placeholder="Username" />
                                                <label for="inputUsername">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <input type="submit" class= "btn btn-primary" name="btnLogin" value="Login">
                                                 <a href="index.php">Kembali Ke Halaman Utama</a>   
                                            </div>
                                            <?php 
                                               if(isset($_GET['pesan'])){
                                                 if($_GET['pesan'] == "gagal"){
                                                   echo "<center><br>Login gagal! username atau password salah!</center>";
                                                 }
                                                 else if($_GET['pesan'] == "logout"){
                                                   echo "<center>Anda Telah Logout</center>";
                                                 }
                                                 else if($_GET['pesan'] == "daftar"){
                                                   echo "<center><br>Berhasil Daftar Akun</center>";
                                                 }
                                               }
                                              ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; By NOER ALAM  & RIMA TSANIYAH 2021 </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>