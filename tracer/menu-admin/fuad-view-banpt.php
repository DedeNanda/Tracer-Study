<?php
require '../koneksi/dbcon.php';
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>CEK DATA</title>
</head>

<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detail Data
                            <a href="fuad-banpt.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM fuad_banpt WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $student = mysqli_fetch_array($query_run);
                        ?>

                                <div class="mb-3">
                                    <label>Nim</label>
                                    <p class="form-control">
                                        <?= $student['nim']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Nama</label>
                                    <p class="form-control">
                                        <?= $student['nama']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Gender</label>
                                    <p class="form-control">
                                        <?= $student['gender']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <p class="form-control">
                                        <?= $student['email']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Fakultas</label>
                                    <p class="form-control">
                                        <?= $student['fakultas']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Prodi</label>
                                    <p class="form-control">
                                        <?= $student['prodi']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Tanggal</label>
                                    <p class="form-control">
                                        <?= $student['tanggal']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Apakah saudara/i bangga menjadi alumni kampus ini ?</label>
                                    <p class="form-control">
                                        <?= $student['pertanyaan1']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Apakah saudara/i akan merekomendasikan kepada orang lain untuk kuliah di kampus ini ?</label>
                                    <p class="form-control">
                                        <?= $student['pertanyaan2']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Bila ada kesempatan melanjutkan studi lagi, apakah saudara/i akan memilih kampus ini ?</label>
                                    <p class="form-control">
                                        <?= $student['pertanyaan3']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Apakah saudara/i sudah bekerja sebelum mendaftar ke kampus ini ?</label>
                                    <p class="form-control">
                                        <?= $student['pertanyaan4']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Jelaskan saudara/i saat ini</label>
                                    <p class="form-control">
                                        <?= $student['pertanyaan5']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Apakah telah mendapatkan pekerjaan sekarang ?</label>
                                    <p class="form-control">
                                        <?= $student['pertanyaan6']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Berapa lama saudara/i mendapatkan pekerjaan setelah wisuda ?</label>
                                    <p class="form-control">
                                        <?= $student['pertanyaan7']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Apa tingkatan tempat saudara/i bekerja ?</label>
                                    <p class="form-control">
                                        <?= $student['pertanyaan8']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Berapa pendapatan/ penghasilan rata-rata perbulan pada tahun pertama bekerja ?</label>
                                    <p class="form-control">
                                        <?= $student['pertanyaan9']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Seberapa Besar persentase kesesuaian pengetahuan dan keterampilan yang sudah saudara/i peroleh dari program studi dengan tuntutan pekerjaan saudara/i</label>
                                    <p class="form-control">
                                        <?= $student['pertanyaan10']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Apakah pekerjaan saudara relevan dengan bidang keilmuan</label>
                                    <p class="form-control">
                                        <?= $student['pertanyaan11']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Tingkatan pendidikan apa yang paling sesuai/tepat untuk pekerjaan sudara/i ?</label>
                                    <p class="form-control">
                                        <?= $student['pertanyaan12']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Berapa banyak pekerjaan yang sudah saudara/i lamar ?</label>
                                    <p class="form-control">
                                        <?= $student['pertanyaan13']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Berapa banyak pekerjaan yang merespon lamaran saudara/i ?</label>
                                    <p class="form-control">
                                        <?= $student['pertanyaan14']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Berapa banyak pekerjaan yang mengundang saudara/i untuk wawancara ?</label>
                                    <p class="form-control">
                                        <?= $student['pertanyaan15']; ?>
                                    </p>
                                </div>
                        <?php
                            } else {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>