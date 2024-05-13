<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- fontawesoeme link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- css link here -->
        <link rel="stylesheet" href="../style.css">

        <!-- javascript link here -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


        <title>Selamat Datang <?= $_SESSION['fname'] ?></title>

        <style>
            div {
                text-align: justify;
                text-justify: inter-word;
            }
        </style>
    </head>

    <body>

        <!--nav-->
        <header class="header">

            <div class="logo">
                <h1><i>UPT Pengembangan Karir</i></h1>
            </div>

            <nav class="navbar">
                <a href="logout.php">Log out</a>
            </nav>

        </header>
        <br></br>
        <br></br>
        <br></br>
        <br></br>

            <div class="home">
            <div class="main-home">
                <div class="inner-home">
                    <div class="left-content-home">
                        <h2>Silahkan Pilih Data Jurusan Anda</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed nam cum eligendi libero? Perspiciatis alias minima quasi nesciunt explicabo omnis iste accusantium quos, error aperiam quibusdam.</p>
                    </div>
                </div>
                <div class="inner-home">
                    <div class="right-content-home">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <h2>Fakultas Ekonomi dan Bisnis Islam</h2>
                            <h3><font color="#b8860b" ><center>Lamemba</center></font></h3>
                                <a href="../menu-admin/febi-lamemba.php" class="btn btn-success" type="button"><h3>Lamemba</h3></a></button>
                            <h3><font color="#b8860b" ><center>Banpt</center></font></h3>
                                <a href="../menu-admin/febi-banpt.php" class="btn btn-success" type="button"><h3>Banpt</h3></a></button>
                                <br></br>
                                <br></br>
                            <h2>Fakultas Tarbiyah dan Ilmu Keguruan</h2>
                            <h3><font color="#b8860b" ><center>Lamdik</center></font></h3>
                                <a href="../menu-admin/ftik-lamdik.php" class="btn btn-success" type="button"><h3>Lamdik</h3></a></button>
                            <h3><font color="#b8860b" ><center>Lamsama</center></font></h3>
                                <a href="../menu-admin/ftik-lamsama.php" class="btn btn-success" type="button"><h3>Lamsama</h3></a></button>
                            <h3><font color="#b8860b" ><center>Laminfokom</center></font></h3>
                                <a href="../menu-admin/ftik-laminfokom.php" class="btn btn-success" type="button"><h3>Laminfokom</h3></a></button>
                                <br></br>
                                <br></br>
                            <h2>Fakultas Ushuludin Adab dan Dakwah</h2>
                            <h3><font color="#b8860b" ><center>Banpt</center></font></h3>
                                <a href="../menu-admin/fuad-banpt.php" class="btn btn-success" type="button"><h3>FUAD</h3></a></button>
                                <br></br>
                                <br></br>
                            <h2>PASCASARJANA</h2>
                                <a href="../menu-admin/pascasarjana.php" class="btn btn-success" type="button"><h3>PASCASARJANA</h3></a></button>
                                <br></br>
                                <br></br>
                            <h2>Syariah</h2>
                            <h3><font color="#b8860b" ><center>Banpt</center></font></h3>
                                <a href="../menu-admin/syariah-banpt.php" class="btn btn-success" type="button"><h3>SYARIAH</h3></a></button>
                                <br></br>
                                <br></br>
                            <h2>Kepuasan Pengguna</h2>
                            <h3><font color="#b8860b" ><center>Data</center></font></h3>
                                <a href="../menu-admin/kepuasan.php" class="btn btn-success" type="button"><h3>Kepuasan</h3></a></button>
                        </div>     
                    </div>
                </div>
            </div>
            </div>

        <footer>
            <div class="main-footer">
                <div class="inner-footer">
                    <a>Logo</a>
                    <img src="../images/logo_upt.png" width="150" height="150"></img>
                </div>
                <div class="inner-footer">
                    <a href="https://goo.gl/maps/yLEd4LZGLjVLAKKLA">Alamat</a>
                    <br><i>Jl. Gurun Aua, Kubang Putiah, Kec. Banuhampu, Kota Bukittinggi, Sumatera Barat 26181</i></br>
                    <br><i>M9HX+64 Kubang Putiah, Kabupaten Agam, Sumatera Barat</i></br>
                </div>
                <div class="inner-footer">
                    <a href="https://goo.gl/maps/yLEd4LZGLjVLAKKLA">Kontak</a>
                    <br><i>075233136</i> </br>
                    <br><i>http://pmb.uinbukittinggi.ac.id/</i> </br>
                    <br><i>http://pmb.uinbukittinggi.ac.id/</i> </br>
                </div>
            </div>
        </footer>

        <script src="../script.js"></script>
    </body>

    </html>

<?php } else {
    header("Location: login.php");
    exit;
} ?>