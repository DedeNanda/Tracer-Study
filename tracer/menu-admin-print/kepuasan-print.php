<style>
    s {
        font-size: 7pt;
    }

    p {
        text-align: justify;
        text-justify: inter-word;
        font-size: 7pt;
    }

    table {
        border-collapse: collapse;
        text-align: center;
    }
</style>

<?php
session_start();
require '../koneksi/dbcon.php';

$pertanyaan1 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan1='Sangat Baik '");
$jumlah1 = mysqli_num_rows($pertanyaan1);

$pertanyaan1 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan1='Baik '");
$jumlah2 = mysqli_num_rows($pertanyaan1);

$pertanyaan1 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan1='Cukup'");
$jumlah3 = mysqli_num_rows($pertanyaan1);

$pertanyaan1 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan1='kurang '");
$jumlah4 = mysqli_num_rows($pertanyaan1);


$pertanyaan2 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan2='Sangat Baik '");
$jumlah5 = mysqli_num_rows($pertanyaan2);

$pertanyaan2 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan2='Baik '");
$jumlah6 = mysqli_num_rows($pertanyaan2);

$pertanyaan2 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan2='Cukup'");
$jumlah7 = mysqli_num_rows($pertanyaan2);

$pertanyaan2 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan2='kurang '");
$jumlah8 = mysqli_num_rows($pertanyaan2);


$pertanyaan3 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan3='Sangat Baik '");
$jumlah9 = mysqli_num_rows($pertanyaan3);

$pertanyaan3 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan3='Baik '");
$jumlah10 = mysqli_num_rows($pertanyaan3);

$pertanyaan3 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan3='Cukup'");
$jumlah11 = mysqli_num_rows($pertanyaan3);

$pertanyaan3 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan3='kurang '");
$jumlah12 = mysqli_num_rows($pertanyaan3);


$pertanyaan4 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan4='Sangat Baik '");
$jumlah13 = mysqli_num_rows($pertanyaan4);

$pertanyaan4 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan4='Baik '");
$jumlah14 = mysqli_num_rows($pertanyaan4);

$pertanyaan4 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan4='Cukup'");
$jumlah15 = mysqli_num_rows($pertanyaan4);

$pertanyaan4 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan4='kurang '");
$jumlah16 = mysqli_num_rows($pertanyaan4);


$pertanyaan5 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan5='Sangat Baik '");
$jumlah17 = mysqli_num_rows($pertanyaan5);

$pertanyaan5 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan5='Baik '");
$jumlah18 = mysqli_num_rows($pertanyaan5);

$pertanyaan5 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan5='Cukup'");
$jumlah19 = mysqli_num_rows($pertanyaan5);

$pertanyaan5 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan5='kurang '");
$jumlah20 = mysqli_num_rows($pertanyaan5);


$pertanyaan6 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan6='Sangat Baik '");
$jumlah21 = mysqli_num_rows($pertanyaan6);

$pertanyaan6 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan6='Baik '");
$jumlah22 = mysqli_num_rows($pertanyaan6);

$pertanyaan6 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan6='Cukup'");
$jumlah23 = mysqli_num_rows($pertanyaan6);

$pertanyaan6 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan6='kurang '");
$jumlah24 = mysqli_num_rows($pertanyaan6);


$pertanyaan7 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan7='Sangat Baik '");
$jumlah25 = mysqli_num_rows($pertanyaan7);

$pertanyaan7 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan7='Baik '");
$jumlah26 = mysqli_num_rows($pertanyaan7);

$pertanyaan7 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan7='Cukup'");
$jumlah27 = mysqli_num_rows($pertanyaan7);

$pertanyaan7 = mysqli_query($con, "SELECT * FROM kepuasan where pertanyaan7='kurang '");
$jumlah28 = mysqli_num_rows($pertanyaan7);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <!-- css link here -->
    <link rel="stylesheet" href="../style.css">

    <title>Data Kepuasan Pengguna</title>
</head>

<body>

    </header>
    <br></br>
    <br></br>

    <!--table-->
    <br></br>
    <br></br>
    <?php include('../koneksi/message.php'); ?>

    <div class="container" <div class="row">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header">
                    <h4> Data Febi Banpt</h4>
                </div>
                <div class="card-header">
                    <h4>
                        <a href="../menu-admin/kepuasan.php" class="btn btn-primary ">Back</a></td>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    </div>

    <br></br>

    <div class="container">
        <br>
        <h4>Table data pengisi</h4></br>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                        <th><s>ID</th>
                        <th colspan="2"><s>Pertanyaan1</th>
                        <th colspan="2"><s>Pertanyaan2</th>
                        <th colspan="2"><s>Pertanyaan3</th>
                        <th colspan="2"><s>Pertanyaan4</th>
                        <th colspan="2"><s>Pertanyaan5</th>
                        <th colspan="2"><s>Pertanyaan6</th>
                        <th colspan="2"><s>Pertanyaan7</th>
                </tr>
                <tr>
                    <th></th>
                    <th colspan="2"><s>Etika</th>
                    <th colspan="2"><s>Keahlian pada bidang ilmu (kompetensi utama)</th>
                    <th colspan="2"><s>Kemampuan berbahasa asing</th>
                    <th colspan="2"><s>Penggunaan berbahasa teknologi</th>
                    <th colspan="2"><s>Kemampuan berkomunikasi</th>
                    <th colspan="2"><s>Kejasama tim</th>
                    <th colspan="2"><s>Pengembangan diri</th>   
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM kepuasan";
                $query_run = mysqli_query($con, $query);

                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $student) {
                ?>
                    <tr>
                        <td><s><?= $student['id']; ?></td>
                        <td colspan="2"><s><?= $student['pertanyaan1']; ?></td>
                        <td colspan="2"><s><?= $student['pertanyaan2']; ?></td>
                        <td colspan="2"><s><?= $student['pertanyaan3']; ?></td>
                        <td colspan="2"><s><?= $student['pertanyaan4']; ?></td>
                        <td colspan="2"><s><?= $student['pertanyaan5']; ?></td>
                        <td colspan="2"><s><?= $student['pertanyaan6']; ?></td>
                        <td colspan="2"><s><?= $student['pertanyaan7']; ?></td>
                    </tr>
                <?php
                    }
                } else {
                    echo "<h5> No Record Found </h5>";
                }
                ?>
                <!--baris 1-->
                <tr>
                    <td><s>Total Menjawab Sangat Baik</td>
                    <td colspan="2"><s><?php echo $jumlah1; ?>
                    <td colspan="2"><s><?php echo $jumlah5; ?>
                    <td colspan="2"><s><?php echo $jumlah9; ?>
                    <td colspan="2"><s><?php echo $jumlah13; ?>
                    <td colspan="2"><s><?php echo $jumlah17; ?>
                    <td colspan="2"><s><?php echo $jumlah21; ?>
                    <td colspan="2"><s><?php echo $jumlah25; ?>

                </tr>
                <!--baris 2-->
                <tr>
                    <td><s>Total Menjawab Baik</td>
                    <td colspan="2"><s><?php echo $jumlah2; ?>
                    <td colspan="2"><s><?php echo $jumlah6; ?>
                    <td colspan="2"><s><?php echo $jumlah10; ?>
                    <td colspan="2"><s><?php echo $jumlah14; ?>
                    <td colspan="2"><s><?php echo $jumlah18; ?>
                    <td colspan="2"><s><?php echo $jumlah22; ?>
                    <td colspan="2"><s><?php echo $jumlah26; ?>

                </tr>
                <!--baris 3-->
                <tr>
                    <td><s>Total Menjawab Cukup</td>
                    <td colspan="2"><s><?php echo $jumlah3; ?>
                    <td colspan="2"><s><?php echo $jumlah7; ?>
                    <td colspan="2"><s><?php echo $jumlah11; ?>
                    <td colspan="2"><s><?php echo $jumlah15; ?>
                    <td colspan="2"><s><?php echo $jumlah19; ?>
                    <td colspan="2"><s><?php echo $jumlah23; ?>
                    <td colspan="2"><s><?php echo $jumlah27; ?>

                </tr>
                <!--baris 4-->
                <tr>
                    <td><s>Total Menjawab Kurang</td>
                    <td colspan="2"><s><?php echo $jumlah4; ?>
                    <td colspan="2"><s><?php echo $jumlah8; ?>
                    <td colspan="2"><s><?php echo $jumlah12; ?>
                    <td colspan="2"><s><?php echo $jumlah16; ?>
                    <td colspan="2"><s><?php echo $jumlah20; ?>
                    <td colspan="2"><s><?php echo $jumlah24; ?>
                    <td colspan="2"><s><?php echo $jumlah28; ?>

                </tr>
            </tbody>
        </table>
    </div>

    </div>

        <script>
            window.print()
        </script>
        
        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>



</html>