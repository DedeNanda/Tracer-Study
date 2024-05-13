<?php
session_start();
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

    <title>Edit Data</title>
</head>
<body>

    <div class="container mt-5">

        <?php include('../koneksi/message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Data Febi
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM febi_banpt WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                <form action="../kusioner/code-febi-banpt.php" method="POST">
                                    <input type="hidden" name="student_id" value="<?= $student['id']; ?>">

                                    <div class="mb-3">
                                        <label>Nim</label>
                                        <input type="text" name="nim" value="<?=$student['nim'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Nama</label>
                                        <input type="text" name="nama" value="<?=$student['nama'];?>" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Gender</label> <br>
                                        <i?><font color="red">Isikan Pria / Wanita</font></i>
                                        <input type="text" name="gender" value="<?=$student['gender'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Nomor Telepon</label>
                                        <input type="text" name="notelepon" value="<?=$student['notelepon'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" name="email" value="<?=$student['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Fakultas</label>
                                            <select name="fakultas" class="form-control">
                                                <option value="FEBI">FEBI</option>
                                            </select>    
                                    </div>
                                    <div class="mb-3">
                                        <label>Prodi</label>
                                            <select name="prodi" class="form-control">
                                                <option value="MANEJEMEN HAJI DAN UMRAH">MANEJEMEN HAJI DAN UMRAH</option>
                                                <option value="PARIWISATA SYARIAH">PARIWISATA SYARIAH</option>
                                            </select>    
                                    </div>
                                    <div class="mb-3">
                                        <label>Tanggal</label>
                                        <input type="date" name="tanggal" value="<?=$student['tanggal'];?>" class="form-control">
                                    </div>                                   
                                    <div class="form-group mb-3">
                                        <label for="">Apakah saudara/i bangga menjadi alumni kampus ini ?</label> <br>
                                        <i?><font color="red">Isikan YA / TIDAK</font></i>
                                        <input type="text" name="pertanyaan1" value="<?=$student['pertanyaan1'];?>" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Apakah saudara/i akan merekomendasikan kepada orang lain untuk kuliah di kampus ini ?</label> <br>
                                        <i?><font color="red">Isikan YA / TIDAK</font></i>
                                        <input type="text" name="pertanyaan2" value="<?=$student['pertanyaan2'];?>" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Bila ada kesempatan melanjutkan studi lagi, apakah saudara/i akan memilih kampus ini ?</label> <br>
                                        <i?><font color="red">Isikan YA / TIDAK</font></i>
                                        <input type="text" name="pertanyaan3" value="<?=$student['pertanyaan3'];?>" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Apakah saudara/i sudah bekerja sebelum mendaftar ke kampus ini ?</label> <br>
                                        <i?><font color="red">Isikan Sudah/ Belum</font></i>
                                        <input type="text" name="pertanyaan4" value="<?=$student['pertanyaan4'];?>" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Jelaskan saudara/i saat ini</label> <br>
                                        <i?><font color="red">Isikan Bekerja, Wiraswasta, Melanjutkan Pendidikan, Tidak kerja tetapi sedang mencari kerja, Belum memungkinkan bekerja, Menikah/ wajib militer/ mengurus keluarga</font></i>
                                        <input type="text" name="pertanyaan5" value="<?=$student['pertanyaan5'];?>" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Apakah telah mendapatkan pekerjaan sekarang ?</label> <br>
                                        <i?><font color="red">Isikan Sudah/ Belum</font></i>
                                        <input type="text" name="pertanyaan6" value="<?=$student['pertanyaan6'];?>" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Berapa lama saudara/i mendapatkan pekerjaan setelah wisuda ?</label> <br>
                                        <i?><font color="red">Isikan Kurang 3 Bulan, 3 s/d 6 Bulan, 6 s/d 1 Tahun, 1 s/d 2 Tahun, Lebih Dari 2 Tahun, Belum bekerja</font></i>
                                        <input type="text" name="pertanyaan7" value="<?=$student['pertanyaan7'];?>" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Apa tingkatan tempat saudara/i bekerja ?</label> <br>
                                        <i?><font color="red">Isikan Lokal, Nasional, Internasional, Belum bekerja</font></i>
                                        <input type="text" name="pertanyaan8" value="<?=$student['pertanyaan8'];?>" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Berapa pendapatan/ penghasilan rata-rata perbulan pada tahun pertama bekerja ?</label> <br>
                                        <i?><font color="red">Isikan 1 JT s/d 2,5 JT, 2,5 s/d 4,5 JT, lebih 5 JT</font></i>
                                        <input type="text" name="pertanyaan9" value="<?=$student['pertanyaan9'];?>" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Seberapa Besar persentase kesesuaian pengetahuan dan keterampilan yang sudah saudara/i peroleh dari program studi dengan tuntutan pekerjaan saudara/i?</label> <br>
                                        <i?><font color="red">Isikan Lebih 86 %, 76 % s/d 85 %, 61 % s/d 75 %, 51 % s/d 59 %, kurang 50 %, Belum bekerja</font></i>
                                        <input type="text" name="pertanyaan10" value="<?=$student['pertanyaan10'];?>" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Apakah pekerjaan saudara relevan dengan bidang keilmuan ?</label> <br>
                                        <i?><font color="red">Isikan Relevan, Kurang Relevan, Tidak Relevan</font></i>
                                        <input type="text" name="pertanyaan11" value="<?=$student['pertanyaan11'];?>" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Tingkatan pendidikan apa yang paling sesuai/tepat untuk pekerjaan sudara/i ?</label> <br>
                                        <i?><font color="red">Isikan Setingkat lebih tinggi, Tingkat yang sama, Setingkat lebih rendah, Tidak perlu pendidikan tinggi</font></i>
                                        <input type="text" name="pertanyaan12" value="<?=$student['pertanyaan12'];?>" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Berapa banyak pekerjaan yang sudah saudara/i lamar ?</label> <br>
                                        <i?><font color="red">Isikan Kurang 5, 6 s/d 20, 6 s/d 40, Lebih dari 40 </font></i>
                                        <input type="text" name="pertanyaan13" value="<?=$student['pertanyaan13'];?>" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Berapa banyak pekerjaan yang merespon lamaran saudara/i ?</label> <br>
                                        <i?><font color="red">Isikan Kurang 5, 6 s/d 20, 6 s/d 40, Lebih dari 40 </font></i>
                                        <input type="text" name="pertanyaan14" value="<?=$student['pertanyaan14'];?>" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Berapa banyak pekerjaan yang mengundang saudara/i untuk wawancara ?</label> <br>
                                        <i?><font color="red">Isikan Kurang 5, 6 s/d 20, 6 s/d 40, Lebih dari 40 </font></i>
                                        <input type="text" name="pertanyaan15" value="<?=$student['pertanyaan15'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-success">
                                            Update Student
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
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