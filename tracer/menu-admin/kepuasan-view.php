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
                            <a href="kepuasan.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM kepuasan WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $student = mysqli_fetch_array($query_run);
                        ?>
                                <div class="mb-3">
                                    <label>Etika</label>
                                    <p class="form-control">
                                        <?= $student['pertanyaan1']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Keahlian pada bidang ilmu (kompetensi utama)</label>
                                    <p class="form-control">
                                        <?= $student['pertanyaan2']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Kemampuan berbahasa asing</label>
                                    <p class="form-control">
                                        <?= $student['pertanyaan3']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Pengguna teknologi informasi</label>
                                    <p class="form-control">
                                        <?= $student['pertanyaan4']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Kemampuan berkomunikasi</label>
                                    <p class="form-control">
                                        <?= $student['pertanyaan5']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Kerjasama tim</label>
                                    <p class="form-control">
                                        <?= $student['pertanyaan6']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Pengembangan diri</label>
                                    <p class="form-control">
                                        <?= $student['pertanyaan7']; ?>
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