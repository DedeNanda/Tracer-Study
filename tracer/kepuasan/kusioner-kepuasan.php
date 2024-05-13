<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Kusioner kepuasan</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('../koneksi/message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Kusioner kepuasan lamemba
                            <a href="../home.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code-kepuasan.php" method="POST">
                            <p>
                            <div class="form-group mb-3">
                                <label for="">Etika</label> <br>
                                <p><input type="checkbox" id="pertanyaan1" name="pertanyaan1" value="Sangat Baik" /> Sangat Baik
                                <p><input type="checkbox" id="pertanyaan1" name="pertanyaan1" value="Baik" /> Baik
                                <p><input type="checkbox" id="pertanyaan1" name="pertanyaan1" value="Cukup" /> Cukup
                                <p><input type="checkbox" id="pertanyaan1" name="pertanyaan1" value="Kurang" /> Kurang
                            </div>
                            <p>
                                <hr />
                            <div class="form-group mb-3">
                                <label for="">Keahlian dalam bidang ilmu (dalam kompetensi utama)</label> <br>
                                <p><input type="checkbox" id="pertanyaan2" name="pertanyaan2" value="Sangat Baik" /> Sangat Baik
                                <p><input type="checkbox" id="pertanyaan2" name="pertanyaan2" value="Baik" /> Baik
                                <p><input type="checkbox" id="pertanyaan2" name="pertanyaan2" value="Cukup" /> Cukup
                                <p><input type="checkbox" id="pertanyaan2" name="pertanyaan2" value="Kurang" /> Kurang

                            </div>
                            <p>
                                <hr />
                            <div class="form-group mb-3">
                                <label for="">Kemampuan berbahasa asing</label> <br>
                                <p><input type="checkbox" id="pertanyaan3" name="pertanyaan3" value="Sangat Baik" /> Sangat Baik
                                <p><input type="checkbox" id="pertanyaan3" name="pertanyaan3" value="Baik" /> Baik
                                <p><input type="checkbox" id="pertanyaan3" name="pertanyaan3" value="Cukup" /> Cukup
                                <p><input type="checkbox" id="pertanyaan3" name="pertanyaan3" value="Kurang" /> Kurang
                            </div>
                            <p>
                                <hr />
                            <div class="form-group mb-3">
                                <label for="">Penggunaan teknologi informasi</label> <br>
                                <p><input type="checkbox" id="pertanyaan4" name="pertanyaan4" value="Sangat Baik" /> Sangat Baik
                                <p><input type="checkbox" id="pertanyaan4" name="pertanyaan4" value="Baik" /> Baik
                                <p><input type="checkbox" id="pertanyaan4" name="pertanyaan4" value="Cukup" /> Cukup
                                <p><input type="checkbox" id="pertanyaan4" name="pertanyaan4" value="Kurang" /> Kurang
                            </div>
                            <p>
                                <hr />
                            <div class="form-group mb-3">
                                <label for="">Kemampuan berkomunikasi</label> <br>
                                <p><input type="checkbox" id="pertanyaan5" name="pertanyaan5" value="Sangat Baik" /> Sangat Baik
                                <p><input type="checkbox" id="pertanyaan5" name="pertanyaan5" value="Baik" /> Baik
                                <p><input type="checkbox" id="pertanyaan5" name="pertanyaan5" value="Cukup" /> Cukup
                                <p><input type="checkbox" id="pertanyaan5" name="pertanyaan5" value="Kurang" /> Kurang
                            </div>
                            <p>
                                <hr />
                            <div class="form-group mb-3">
                                <label for="">Kerja sama tim</label> <br>
                                <p><input type="checkbox" id="pertanyaan6" name="pertanyaan6" value="Sangat Baik" /> Sangat Baik
                                <p><input type="checkbox" id="pertanyaan6" name="pertanyaan6" value="Baik" /> Baik
                                <p><input type="checkbox" id="pertanyaan6" name="pertanyaan6" value="Cukup" /> Cukup
                                <p><input type="checkbox" id="pertanyaan6" name="pertanyaan6" value="Kurang" /> Kurang
                            </div>
                            <p>
                                <hr />
                            <div class="form-group mb-3">
                                <label for="">Pengembangan diri</label> <br>
                                <p><input type="checkbox" id="pertanyaan7" name="pertanyaan7" value="Sangat Baik" /> Sangat Baik
                                <p><input type="checkbox" id="pertanyaan7" name="pertanyaan7" value="Baik" /> Baik
                                <p><input type="checkbox" id="pertanyaan7" name="pertanyaan7" value="Cukup" /> Cukup
                                <p><input type="checkbox" id="pertanyaan7" name="pertanyaan7" value="Kurang" /> Kurang
                            </div>
                            <p>
                                <hr />
                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-success">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>