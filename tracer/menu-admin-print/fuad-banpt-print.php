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

$gender = mysqli_query($con, "SELECT * FROM fuad_banpt where gender='Pria'");
$jumlah1 = mysqli_num_rows($gender);

$gender = mysqli_query($con, "SELECT * FROM fuad_banpt where gender='Wanita'");
$jumlah2 = mysqli_num_rows($gender);

$pertanyaan1 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan1='YA'");
$jumlah3 = mysqli_num_rows($pertanyaan1);

$pertanyaan1 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan1='TIDAK'");
$jumlah4 = mysqli_num_rows($pertanyaan1);

$pertanyaan2 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan2='YA'");
$jumlah5 = mysqli_num_rows($pertanyaan2);

$pertanyaan2 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan2='TIDAK'");
$jumlah6 = mysqli_num_rows($pertanyaan2);

$pertanyaan3 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan3='YA'");
$jumlah7 = mysqli_num_rows($pertanyaan3);

$pertanyaan3 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan3='TIDAK'");
$jumlah8 = mysqli_num_rows($pertanyaan3);

$pertanyaan4 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan4='SUDAH'");
$jumlah9 = mysqli_num_rows($pertanyaan4);

$pertanyaan4 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan4='BELUM'");
$jumlah10 = mysqli_num_rows($pertanyaan4);

$pertanyaan5 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan5='Bekerja'");
$jumlah11 = mysqli_num_rows($pertanyaan5);

$pertanyaan5 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan5='Wiraswasta'");
$jumlah12 = mysqli_num_rows($pertanyaan5);

$pertanyaan5 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan5='Melanjutkan Pendidikan'");
$jumlah13 = mysqli_num_rows($pertanyaan5);

$pertanyaan5 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan5='Tidak kerja tetapi sedang mencari kerja'");
$jumlah14 = mysqli_num_rows($pertanyaan5);

$pertanyaan5 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan5='Belum memungkinkan bekerja'");
$jumlah15 = mysqli_num_rows($pertanyaan5);

$pertanyaan5 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan5='Menikah/ wajib militer/ mengurus keluarga'");
$jumlah16 = mysqli_num_rows($pertanyaan5);

$pertanyaan6 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan6='SUDAH'");
$jumlah17 = mysqli_num_rows($pertanyaan6);

$pertanyaan6 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan6='BELUM'");
$jumlah18 = mysqli_num_rows($pertanyaan6);

$pertanyaan7 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan7='Kurang 3 Bulan'");
$jumlah19 = mysqli_num_rows($pertanyaan7);

$pertanyaan7 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan7='3 s/d 6 Bulan'");
$jumlah20 = mysqli_num_rows($pertanyaan7);

$pertanyaan7 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan7='6 s/d 1 Tahun'");
$jumlah21 = mysqli_num_rows($pertanyaan7);

$pertanyaan7 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan7='1 s/d 2 Tahun'");
$jumlah22 = mysqli_num_rows($pertanyaan7);

$pertanyaan7 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan7='Lebih Dari 2 Tahun'");
$jumlah23 = mysqli_num_rows($pertanyaan7);

$pertanyaan7 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan7='Belum bekerja'");
$jumlah24 = mysqli_num_rows($pertanyaan7);

$pertanyaan8 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan8='Lokal'");
$jumlah25 = mysqli_num_rows($pertanyaan8);

$pertanyaan8 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan8='Nasional'");
$jumlah26 = mysqli_num_rows($pertanyaan8);

$pertanyaan8 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan8='Internasional'");
$jumlah27 = mysqli_num_rows($pertanyaan8);

$pertanyaan8 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan8='Belum bekerja'");
$jumlah28 = mysqli_num_rows($pertanyaan8);

$pertanyaan9 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan9='1 s/d 2,5 JT'");
$jumlah29 = mysqli_num_rows($pertanyaan9);

$pertanyaan9 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan9='2,5 s/d 4,5 JT'");
$jumlah30 = mysqli_num_rows($pertanyaan9);

$pertanyaan9 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan9='lebih 5 JT'");
$jumlah31 = mysqli_num_rows($pertanyaan9);

$pertanyaan10 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan10='Lebih 86 %'");
$jumlah32 = mysqli_num_rows($pertanyaan10);

$pertanyaan10 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan10='76 % s/d 85 %'");
$jumlah33 = mysqli_num_rows($pertanyaan10);

$pertanyaan10 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan10='61 % s/d 75 %'");
$jumlah34 = mysqli_num_rows($pertanyaan10);

$pertanyaan10 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan10='51 % s/d 59 %'");
$jumlah35 = mysqli_num_rows($pertanyaan10);

$pertanyaan10 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan10='kurang 50 %'");
$jumlah36 = mysqli_num_rows($pertanyaan10);

$pertanyaan10 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan10='Belum bekerja'");
$jumlah37 = mysqli_num_rows($pertanyaan10);

$pertanyaan11 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan11='Relevan'");
$jumlah38 = mysqli_num_rows($pertanyaan11);

$pertanyaan11 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan11='Kurang Relevan'");
$jumlah39 = mysqli_num_rows($pertanyaan11);

$pertanyaan11 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan11='Tidak Relevan'");
$jumlah40 = mysqli_num_rows($pertanyaan11);

$pertanyaan12 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan12='Setingkat lebih tinggi'");
$jumlah41 = mysqli_num_rows($pertanyaan12);

$pertanyaan12 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan12='Tingkat yang sama'");
$jumlah42 = mysqli_num_rows($pertanyaan12);

$pertanyaan12 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan12='Setingkat lebih rendah'");
$jumlah43 = mysqli_num_rows($pertanyaan12);

$pertanyaan12 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan12='Tidak perlu pendidikan tinggi'");
$jumlah44 = mysqli_num_rows($pertanyaan12);

$pertanyaan13 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan13='Kurang 5'");
$jumlah45 = mysqli_num_rows($pertanyaan13);

$pertanyaan13 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan13='6 s/d 20'");
$jumlah46 = mysqli_num_rows($pertanyaan13);

$pertanyaan13 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan13='20 s/d 40'");
$jumlah47 = mysqli_num_rows($pertanyaan13);

$pertanyaan13 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan13='Lebih dari 40 '");
$jumlah48 = mysqli_num_rows($pertanyaan13);

$pertanyaan14 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan14='Kurang 5'");
$jumlah49 = mysqli_num_rows($pertanyaan14);

$pertanyaan14 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan14='6 s/d 20'");
$jumlah50 = mysqli_num_rows($pertanyaan14);

$pertanyaan14 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan14='20 s/d 40'");
$jumlah51 = mysqli_num_rows($pertanyaan14);

$pertanyaan14 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan14='Lebih dari 40 '");
$jumlah52 = mysqli_num_rows($pertanyaan14);

$pertanyaan15 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan15='Kurang 5'");
$jumlah53 = mysqli_num_rows($pertanyaan15);

$pertanyaan15 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan15='6 s/d 20'");
$jumlah54 = mysqli_num_rows($pertanyaan15);

$pertanyaan15 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan15='20 s/d 40'");
$jumlah55 = mysqli_num_rows($pertanyaan15);

$pertanyaan15 = mysqli_query($con, "SELECT * FROM fuad_banpt where pertanyaan15='Lebih dari 40 '");
$jumlah56 = mysqli_num_rows($pertanyaan15);
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

    <title>Data FUAD Banpt</title>
</head>

<body>

    <!--table-->
    <br></br>
    <br></br>
    <?php include('../koneksi/message.php'); ?>

    <div class="container" <div class="row">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header">
                    <h4> Data FUAD Banpt</h4>
                </div>
                <div class="card-header">
                    <h4>
                        <a href="../filter/filter_fuad_banpt.php" class="btn btn-warning float-end">Cari Data</a></td>
                        <a href="../menu-admin/fuad-banpt.php" class="btn btn-primary ">Back</a></td>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container">
        <br>
        <h4>Table data pengisi</h4></br>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th><s>ID</th>
                    <th><s>Nim</th>
                    <th><s>Nama</th>
                    <th><s>Gender</th>
                    <th><s>Nomor Telepon</th>
                    <th><s>Email</th>
                    <th><s>Fakultas</th>
                    <th><s>Prodi</th>
                    <th><s>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM fuad_banpt";
                $query_run = mysqli_query($con, $query);

                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $student) {
                ?>
                        <tr>
                            <td><s><?= $student['id']; ?></td>
                            <td><s><?= $student['nim']; ?></td>
                            <td><s><?= $student['nama']; ?></td>
                            <td><s><?= $student['gender']; ?></td>
                            <td><s><?= $student['notelepon']; ?></td>
                            <td><s><?= $student['email']; ?></td>
                            <td><s><?= $student['fakultas']; ?></td>
                            <td><s><?= $student['prodi']; ?></td>
                            <td><s><?= $student['tanggal']; ?></td>

                        </tr>
                <?php
                    }
                } else {
                    echo "<h5> No Record Found </h5>";
                }
                ?>
                <!--baris 1-->
                <tr>
                    <td colspan="3"><s>Total Pria</td>
                    <td><s><?php echo $jumlah1; ?>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <!--baris 2-->
                <tr>
                    <td colspan="3"><s>Total Wanita</td>
                    <td><s><?php echo $jumlah2; ?>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container">
        <br>
        <h4>Table data jawaban</h4></br>
    </div>

    <div class="row">
        <div class="col-md-20">

            <table class="table table-bordered table-striped" style="margin-left:5px;;margin-right:5px;">
                <thead>
                    <tr>
                        <th><s>Tanggal</th>
                        <th><s>Nama</th>
                        <th><s>Pertanyaan1</th>
                        <th><s>Pertanyaan2</th>
                        <th><s>Pertanyaan3</th>
                        <th colspan="2"><s>Pertanyaan4</th>
                        <th colspan="2"><s>Pertanyaan5</th>
                        <th colspan="2"><s>Pertanyaan6</th>
                        <th colspan="2"><s>Pertanyaan7</th>
                        <th colspan="2"><s>Pertanyaan8</th>
                        <th colspan="2"><s>Pertanyaan9</th>
                        <th colspan="2"><s>Pertanyaan10</th>
                        <th colspan="2"><s>Pertanyaan11</th>
                        <th colspan="2"><s>Pertanyaan12</th>
                        <th colspan="2"><s>Pertanyaan13</th>
                        <th colspan="2"><s>Pertanyaan14</th>
                        <th colspan="2"><s>Pertanyaan15</th>
                        <th><s>Action</th>
                    </tr>
                    <tr>
                        <th colspan="2"></th>
                        <td>
                            <p>Apakah saudara/i bangga menjadi alumni kampus ini </th>
                        <td>
                            <p>Apakah saudara/i akan merekomendasikan kepada orang lain untuk kuliah di kampus ini </th>
                        <td>
                            <p>Apakah saudara/i akan memilih kampus ini </th>
                        <td colspan="2">
                            <p>Apakah saudara/i sudah bekerja sebelum mendaftar ke kampus ini </th>
                        </td>
                        <td colspan="2">
                            <p>Jelaskan status saudara/i saat ini</th>
                        <td colspan="2">
                            <p>Apakah telah mendapatkan pekerjaan sekarang </th>
                        <td colspan="2">
                            <p>Berapa lama saudara/i mendapatkan pekerjaan setelah wisuda </th>
                        <td colspan="2">
                            <p>Apa tingkatan tempat saudara/i bekerja </th>
                        <td colspan="2">
                            <p>Berapa pendapatan/ penghasilan rata-rata perbulan pada tahun pertama bekerja </th>
                        <td colspan="2">
                            <p>Persentase kesesuaian pengetahuan dan keterampilan dengan tuntutan pekerjaan saudara/i </th>
                        <td colspan="2">
                            <p>Apakah pekerjaan saudara relevan dengan bidang keilmuan </th>
                        <td colspan="2">
                            <p>Tingkatan pendidikan apa yang paling sesuai/tepat untuk pekerjaan sudara/i </th>
                        <td colspan="2">
                            <p>Berapa banyak pekerjaan yang sudah saudara/i lamar </th>
                        <td colspan="2">
                            <p>Berapa banyak pekerjaan yang merespon lamaran saudara/i </th>
                        <td colspan="2">
                            <p>Berapa banyak pekerjaan yang mengundang saudara/i untuk wawancara </th>
                    </tr>
                    <tr>
                        <td><s><?= $student['tanggal']; ?></td>
                        <td><s><?= $student['nama']; ?></td>
                        <td><s><?= $student['pertanyaan1']; ?></td>
                        <td><s><?= $student['pertanyaan2']; ?></td>
                        <td><s><?= $student['pertanyaan3']; ?></td>
                        <td><s></td>
                        <td><s><?= $student['pertanyaan4']; ?></td>
                        <td><s></td>
                        <td><s><?= $student['pertanyaan5']; ?></td>
                        <td><s></td>
                        <td><s><?= $student['pertanyaan6']; ?></td>
                        <td><s></td>
                        <td><s><?= $student['pertanyaan7']; ?></td>
                        <td><s></td>
                        <td><s><?= $student['pertanyaan8']; ?></td>
                        <td><s></td>
                        <td><s><?= $student['pertanyaan9']; ?></td>
                        <td><s></td>
                        <td><s><?= $student['pertanyaan10']; ?></td>
                        <td><s></td>
                        <td><s><?= $student['pertanyaan11']; ?></td>
                        <td><s></td>
                        <td><s><?= $student['pertanyaan12']; ?></td>
                        <td><s></td>
                        <td><s><?= $student['pertanyaan13']; ?></td>
                        <td><s></td>
                        <td><s><?= $student['pertanyaan14']; ?></td>
                        <td><s></td>
                        <td><s><?= $student['pertanyaan15']; ?></td>
                        <td>
                            <p><a href="febi-view-banpt.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a>
                            <p><a href="febi-edit-banpt.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                            <form action="../kusioner/code-febi-banpt.php" method="POST" class="d-inline">
                                <p><button type="submit" name="delete_student" value="<?= $student['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><s>Total Menjawab Ya</td>
                        <td><s><?php echo $jumlah3; ?>
                        <td><s><?php echo $jumlah5; ?>
                        <td><s><?php echo $jumlah7; ?>
                        <td><s>Sudah</td>
                        <td><s><?php echo $jumlah9; ?>
                        <td><s>Bekerja</td>
                        <td><s><?php echo $jumlah11; ?>
                        <td><s>Sudah</td>
                        <td><s><?php echo $jumlah17; ?>
                        <td><s>Kurang 3 BLN</td>
                        <td><s><?php echo $jumlah19; ?>
                        <td><s>Lokal</td>
                        <td><s><?php echo $jumlah25; ?>
                        <td><s>1 JT s/d 2,5 JT</td>
                        <td><s><?php echo $jumlah29; ?>
                        <td><s>Lebih 86 %</td>
                        <td><s><?php echo $jumlah32; ?>
                        <td><s>relevan</td>
                        <td><s><?php echo $jumlah38; ?>
                        <td><s>Setingkat lebih tinggi</td>
                        <td><s><?php echo $jumlah41; ?>
                        <td><s>kurang 5</td>
                        <td><s><?php echo $jumlah45; ?>
                        <td><s>kurang 5 2</td>
                        <td><s><?php echo $jumlah49; ?>
                        <td><s>kurang 5 3</td>
                        <td><s><?php echo $jumlah53; ?>
                    </tr>
                    <!--baris 2-->
                    <tr>
                        <td colspan="2"><s>Total Menjawab Tidak</td>
                        <td><s><?php echo $jumlah4; ?>
                        <td><s><?php echo $jumlah6; ?>
                        <td><s><?php echo $jumlah8; ?>
                        <td><s>Belum</td>
                        <td><s><?php echo $jumlah10; ?>
                        <td><s>Wiraswasta</td>
                        <td><s><?php echo $jumlah12; ?>
                        <td><s>Belum</td>
                        <td><s><?php echo $jumlah18; ?>
                        <td><s>3 s/d 6 Bulan</td>
                        <td><s><?php echo $jumlah20; ?>
                        <td><s>Nasional</td>
                        <td><s><?php echo $jumlah26; ?>
                        <td><s>2,5 s/d 4,5 JT</td>
                        <td><s><?php echo $jumlah30; ?>
                        <td><s>76 % s/d 85 %</td>
                        <td><s><?php echo $jumlah33; ?>
                        <td><s>Kurang Relevan</td>
                        <td><s><?php echo $jumlah39; ?>
                        <td><s>Tingkat yang sama</td>
                        <td><s><?php echo $jumlah42; ?>
                        <td><s>6 s/d 20</td>
                        <td><s><?php echo $jumlah46; ?>
                        <td><s>6 s/d 20</td>
                        <td><s><?php echo $jumlah50; ?>
                        <td><s>6 s/d 20</td>
                        <td><s><?php echo $jumlah54; ?>
                    </tr>
                    <!--baris 3-->
                    <tr>
                        <td colspan="7"></td>
                        <td><s>Melanjutkan Pendidikan</td>
                        <td><s><?php echo $jumlah13; ?>
                        <td colspan="2"></td>
                        <td><s>6 s/d 1 Tahun</td>
                        <td><s><?php echo $jumlah21; ?>
                        <td><s>Internasional</td>
                        <td><s><?php echo $jumlah27; ?>
                        <td><s>lebih 5 JT</td>
                        <td><s><?php echo $jumlah31; ?>
                        <td><s>61 % s/d 75 %</td>
                        <td><s><?php echo $jumlah34; ?>
                        <td><s>Tidak Relevan</td>
                        <td><s><?php echo $jumlah40; ?>
                        <td><s>Setingkat lebih rendah</td>
                        <td><s><?php echo $jumlah43; ?>
                        <td><s>20 s/d 40</td>
                        <td><s><?php echo $jumlah47; ?>
                        <td><s>20 s/d 40</td>
                        <td><s><?php echo $jumlah51; ?>
                        <td><s>20 s/d 40</td>
                        <td><s><?php echo $jumlah55; ?>
                    </tr>
                    <!--baris 4-->
                    <tr>
                        <td colspan="7"></td>
                        <td><s>Tidak bekerja</td>
                        <td><s><?php echo $jumlah14; ?>
                        <td colspan="2"></td>
                        <td><s>1 s/d 2 Tahun</td>
                        <td><s><?php echo $jumlah22; ?>
                        <td><s>Belum bekerja</td>
                        <td><s><?php echo $jumlah28; ?>
                        <td colspan="2"></td>
                        <td><s>51 % s/d 59 %</td>
                        <td><s><?php echo $jumlah35; ?>
                        <td colspan="2"></td>
                        <td><s>Tidak perlu pendidikan tinggi</td>
                        <td><s><?php echo $jumlah44; ?>
                        <td><s>Lebih dari 40 </td>
                        <td><s><?php echo $jumlah48; ?>
                        <td><s>Lebih dari 40 </td>
                        <td><s><?php echo $jumlah52; ?>
                        <td><s>Lebih dari 40 </td>
                        <td><s><?php echo $jumlah56; ?>
                    </tr>
                    <!--baris 5-->
                    <tr>
                        <td colspan="7"></td>
                        <td><s>Belum memungkinkan bekerja</td>
                        <td><s><?php echo $jumlah15; ?>
                        <td colspan="2"></td>
                        <td><s>Lebih Dari 2 Tahun</td>
                        <td><s><?php echo $jumlah23; ?>
                        <td colspan="4"></td>
                        <td><s>kurang 50 %</td>
                        <td><s><?php echo $jumlah36; ?>
                        <td colspan="10"></td>
                    </tr>
                    <!--baris 6-->
                    <tr>
                        <td colspan="7"></td>
                        <td><s>Menikah/wajib militer/mengurus keluarga</td>
                        <td><s><?php echo $jumlah16; ?>
                        <td colspan="2"></td>
                        <td><s>Belum bekerja</td>
                        <td><s><?php echo $jumlah24; ?>
                        <td colspan="4"></td>
                        <td><s>Belum bekerja</td>
                        <td><s><?php echo $jumlah37; ?>
                        <td colspan="10"></td>

                    </tr>
                    </tbody>
            </table>

        </div>

        <script>
            window.print()
        </script>

</body>

</html>