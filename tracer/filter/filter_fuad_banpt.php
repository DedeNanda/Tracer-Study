<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Data</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>


<body>
    <style type="text/css" media="print">
        @page {
            size: letter landscape
        }
    </style>
    <style>
        td {
            font-size: small;
        }
    </style>
    <div class="container">
        <h2 align="center" style="margin: 30px;">Data FUAD BANPT UIN SMDD Bukittinggi</h2>
        <?php
        $s_jurusan = "";
        $tanggal = "";
        if (isset($_POST['search'])) {
            $s_jurusan = $_POST['s_jurusan'];
            $tanggal = $_POST['tanggal'];
        }
        ?>
        <form method="POST" action="">
            <div class="row mb-3">
                <div class="col-sm-12">
                    <h4>Cari Prodi</h4>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <select name="s_jurusan" id="s_jurusan" class="form-control ">
                            <option value="">Cari Semua Prodi</option>
                            <option value="ILMU ALQURAN DAN TAFSIR" <?php if ($s_jurusan == "ILMU ALQURAN DAN TAFSIR") {
                                                                        echo "selected";
                                                                    } ?>>ILMU ALQURAN DAN TAFSIR</option>
                            <option value="ILMU HADIS" <?php if ($s_jurusan == "ILMU HADIS") {
                                                            echo "selected";
                                                        } ?>>ILMU HADIS</option>
                            <option value="KOMUNIKASI DAN PENYIARAN ISLAM" <?php if ($s_jurusan == "KOMUNIKASI DAN PENYIARAN ISLAM") {
                                                                                echo "selected";
                                                                            } ?>>KOMUNIKASI DAN PENYIARAN ISLAM</option>
                            <option value="SEJARAH PERADABAN ISLAM" <?php if ($s_jurusan == "SEJARAH PERADABAN ISLAM") {
                                                                        echo "selected";
                                                                    } ?>>SEJARAH PERADABAN ISLAM</option>
                            <option value="AQIDAH DAN FILSAFAT ISLAM" <?php if ($s_jurusan == "AQIDAH DAN FILSAFAT ISLAM") {
                                                                            echo "selected";
                                                                        } ?>>AQIDAH DAN FILSAFAT ISLAM</option>
                            <option value="SOSIOLOGI AGAMA" <?php if ($s_jurusan == "SOSIOLOGI AGAMA") {
                                                                echo "selected";
                                                            } ?>>SOSIOLOGI AGAMA</option>
                        </select>
                    </div>
                </div>

                <!-- tahun -->
                <div class="col-sm-3">
                    <div class="form-group">
                        <input type="search" placeholder="Tulis Tahun" name="tanggal" id="tanggal" class="form-control" value="<?php echo $tanggal; ?>">
                    </div>
                </div>

                <div class="col-sm-4">
                    <button id="search" name="search" class="btn btn-info">Cari</button>
                    <button class="btn btn-success" onclick="window.print()">Print</button>
                    <a href="../menu-admin/fuad-banpt.php" class="btn btn-warning" type="button">
                        <h7>Kembali</h7>
                    </a>
                </div>
            </div>
        </form>

        <table class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nim</td>
                    <td>Nama Mahasiswa</td>
                    <td>Gender</td>
                    <td>NO Telepon</td>
                    <td>Email</td>
                    <td>Fakultas</td>
                    <td>Prodi</td>
                    <td>Tanggal</td>
                    <td>Pertanyaan 1</td>
                    <td>Pertanyaan 2</td>
                    <td>Pertanyaan 3</td>
                    <td>Pertanyaan 4</td>
                    <td>Pertanyaan 5</td>
                    <td>Pertanyaan 6</td>
                    <td>Pertanyaan 7</td>
                    <td>Pertanyaan 8</td>
                    <td>Pertanyaan 9</td>
                    <td>Pertanyaan 10</td>
                    <td>Pertanyaan 11</td>
                    <td>Pertanyaan 12</td>
                    <td>Pertanyaan 13</td>
                    <td>Pertanyaan 14</td>
                    <td>Pertanyaan 15</td>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $search_jurusan = '%' . $s_jurusan . '%';
                $search_tanggal = '%' . $tanggal . '%';
                $no = 1;
                $query = "SELECT * FROM fuad_banpt WHERE prodi LIKE ? AND (nim LIKE ? OR nama LIKE ? OR gender LIKE ? OR notelepon LIKE ?  OR email LIKE ? OR tanggal LIKE ?) ORDER BY id DESC";
                $dewan1 = $db1->prepare($query);
                $dewan1->bind_param('sssssss', $search_jurusan, $search_tanggal, $search_tanggal, $search_tanggal, $search_tanggal, $search_tanggal, $search_tanggal);
                $dewan1->execute();
                $res1 = $dewan1->get_result();

                if ($res1->num_rows > 0) {
                    while ($row = $res1->fetch_assoc()) {
                        $id = $row['id'];
                        $nim = $row['nim'];
                        $nama = $row['nama'];
                        $gender = $row['gender'];
                        $notelepon = $row['notelepon'];
                        $email = $row['email'];
                        $fakultas = $row['fakultas'];
                        $prodi = $row['prodi'];
                        $tanggal = $row['tanggal'];
                        $pertanyaan1 = $row['pertanyaan1'];
                        $pertanyaan2 = $row['pertanyaan2'];
                        $pertanyaan3 = $row['pertanyaan3'];
                        $pertanyaan4 = $row['pertanyaan4'];
                        $pertanyaan5 = $row['pertanyaan5'];
                        $pertanyaan6 = $row['pertanyaan6'];
                        $pertanyaan7 = $row['pertanyaan7'];
                        $pertanyaan8 = $row['pertanyaan8'];
                        $pertanyaan9 = $row['pertanyaan9'];
                        $pertanyaan10 = $row['pertanyaan10'];
                        $pertanyaan11 = $row['pertanyaan11'];
                        $pertanyaan12 = $row['pertanyaan12'];
                        $pertanyaan13 = $row['pertanyaan13'];
                        $pertanyaan14 = $row['pertanyaan14'];
                        $pertanyaan15 = $row['pertanyaan15'];
                ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $nim; ?></td>
                            <td><?php echo $nama; ?></td>
                            <td><?php echo $gender; ?></td>
                            <td><?php echo $notelepon; ?></td>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $fakultas; ?></td>
                            <td><?php echo $prodi; ?></td>
                            <td><?php echo $tanggal; ?></td>
                            <td><?php echo $pertanyaan1; ?></td>
                            <td><?php echo $pertanyaan2; ?></td>
                            <td><?php echo $pertanyaan3; ?></td>
                            <td><?php echo $pertanyaan4; ?></td>
                            <td><?php echo $pertanyaan5; ?></td>
                            <td><?php echo $pertanyaan6; ?></td>
                            <td><?php echo $pertanyaan7; ?></td>
                            <td><?php echo $pertanyaan8; ?></td>
                            <td><?php echo $pertanyaan9; ?></td>
                            <td><?php echo $pertanyaan10; ?></td>
                            <td><?php echo $pertanyaan11; ?></td>
                            <td><?php echo $pertanyaan12; ?></td>
                            <td><?php echo $pertanyaan13; ?></td>
                            <td><?php echo $pertanyaan14; ?></td>
                            <td><?php echo $pertanyaan15; ?></td>
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td colspan='11'>Tidak ada data ditemukan</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    </table>
    </div>
</body>

</html>