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

    <title>Kusioner syariah</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('../koneksi/message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Kusioner syariah Banpt
                            <a href="../kusioner/kusioner-index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code-syariah-banpt.php" method="POST">
                            <div class="mb-3">
                                <label>Nim (tidak wajib diisi)</label>
                                <input type="text" name="nim" class="form-control">
                            </div>
                            <p>
                            <div class="mb-3">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                            <p>
                            <div class="form-group mb-3">
                                <label for="">Gender</label> <br>
                                <input type="radio" name="gender" value="Pria" /> Pria
                                <input type="radio" name="gender" value="Wanita" /> Wanita
                            </div>
                            <p>
                            <div class="mb-3">
                                <label>Nomor Telepon</label>
                                <input type="text" name="notelepon" class="form-control" required>
                            </div>
                            <p>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <p>
                            <div class="mb-3">
                                <label>Fakultas</label>
                                <select name="fakultas" class="form-control">
                                    <option value="syariah">syariah</option>
                                </select>
                            </div>
                            <p>
                            <div class="mb-3">
                                <label>Prodi</label>
                                <select name="prodi" class="form-control">
                                    <option value="HUKUM KELUARGA ISLAM">HUKUM KELUARGA ISLAM</option>
                                    <option value="HUKUM EKONOMI SYARIAH">HUKUM EKONOMI SYARIAH</option>
                                    <option value="HUKUM TATANEGARA">HUKUM TATANEGARA</option>
                                    <option value="HUKUM PIDANA ISLAM">HUKUM PIDANA ISLAM</option>
                                </select>
                                          
                            </div>
                            <p>
                            <div class="mb-3">
                                <label>Tanggal</label>
                                <input type="date" name="tanggal" class="form-control">
                            </div>
                            <p>
                            <div class="form-group mb-3">
                                <label for="">Apakah saudara/i bangga menjadi alumni kampus ini ?</label> <br>
                                <p><input type="checkbox" id="pertanyaan1" name="pertanyaan1" value="YA" /> Ya
                                <p><input type="checkbox" id="pertanyaan1" name="pertanyaan1" value="TIDAK" /> Tidak
                            </div>
                            <p>
                                <hr />
                            <div class="form-group mb-3">
                                <label for="">Apakah saudara/i akan merekomendasikan kepada orang lain untuk kuliah di kampus ini ?</label> <br>
                                <p><input type="checkbox" id="pertanyaan2" name="pertanyaan2" value="YA" /> Ya
                                <p><input type="checkbox" id="pertanyaan2" name="pertanyaan2" value="TIDAK" /> Tidak
                            </div>
                            <p>
                                <hr />
                            <div class="form-group mb-3">
                                <label for="">Bila ada kesempatan melanjutkan studi lagi, apakah saudara/i akan memilih kampus ini ?</label> <br>
                                <p><input type="checkbox" id="pertanyaan3" name="pertanyaan3" value="YA" /> Ya
                                <p><input type="checkbox" id="pertanyaan3" name="pertanyaan3" value="TIDAK" /> Tidak
                            </div>
                            <p>
                                <hr />
                            <div class="form-group mb-3">
                                <label for="">Apakah saudara/i sudah bekerja sebelum mendaftar ke kampus ini ?</label> <br>
                                <p><input type="checkbox" id="pertanyaan4" name="pertanyaan4" value="SUDAH" /> Sudah
                                <p><input type="checkbox" id="pertanyaan4" name="pertanyaan4" value="BELUM" /> Belum
                            </div>
                            <p>
                                <hr />
                            <div class="form-group mb-3">
                                <label for="">Jelaskan saudara/i saat ini</label> <br>
                                <p><input type="checkbox" id="pertanyaan5" name="pertanyaan5" value="Bekerja" /> Bekerja
                                <p><input type="checkbox" id="pertanyaan5" name="pertanyaan5" value="Wiraswasta" /> Wiraswasta
                                <p><input type="checkbox" id="pertanyaan5" name="pertanyaan5" value="Melanjutkan Pendidikan" /> Melanjutkan Pendidikan
                                <p><input type="checkbox" id="pertanyaan5" name="pertanyaan5" value="Tidak kerja tetapi sedang mencari kerja" /> Tidak kerja tetapi sedang mencari kerja
                                <p><input type="checkbox" id="pertanyaan5" name="pertanyaan5" value="Belum memungkinkan bekerja" /> Belum memungkinkan bekerja
                                <p><input type="checkbox" id="pertanyaan5" name="pertanyaan5" value="Menikah/ wajib militer/ mengurus keluarga" /> Menikah/ wajib militer/ mengurus keluarga
                            </div>
                            <p>
                                <hr />
                            <div class="form-group mb-3">
                                <label for="">Apakah telah mendapatkan pekerjaan sekarang ?</label> <br>
                                <p><input type="checkbox" id="pertanyaan6" name="pertanyaan6" value="SUDAH" /> Sudah
                                <p><input type="checkbox" id="pertanyaan6" name="pertanyaan6" value="BELUM" /> Belum
                            </div>
                            <p>
                                <hr />
                            <div class="form-group mb-3">
                                <label for="">Berapa lama saudara/i mendapatkan pekerjaan setelah wisuda ?</label> <br>
                                <p><input type="checkbox" id="pertanyaan7" name="pertanyaan7" value="Kurang 3 Bulan" /> Kurang 3 Bulan
                                <p><input type="checkbox" id="pertanyaan7" name="pertanyaan7" value="3 s/d 6 Bulan" /> 3 s/d 6 Bulan
                                <p><input type="checkbox" id="pertanyaan7" name="pertanyaan7" value="6 s/d 1 Tahun" /> 6 s/d 1 Tahun
                                <p><input type="checkbox" id="pertanyaan7" name="pertanyaan7" value="1 s/d 2 Tahun" /> 1 s/d 2 Tahun
                                <p><input type="checkbox" id="pertanyaan7" name="pertanyaan7" value="Lebih Dari 2 Tahun" /> Lebih Dari 2 Tahun
                                <p><input type="checkbox" id="pertanyaan7" name="pertanyaan7" value="Belum bekerja" /> Belum bekerja
                            </div>
                            <p>
                                <hr />
                            <div class="form-group mb-3">
                                <label for="">Apa tingkatan tempat saudara/i bekerja ?</label> <br>
                                <p><input type="checkbox" id="pertanyaan8" name="pertanyaan8" value="Lokal" /> Lokal
                                <p><input type="checkbox" id="pertanyaan8" name="pertanyaan8" value="Nasional" /> Nasional
                                <p><input type="checkbox" id="pertanyaan8" name="pertanyaan8" value="Internasional" /> Internasional
                                <p><input type="checkbox" id="pertanyaan8" name="pertanyaan8" value="Belum bekerja" /> Belum bekerja
                            </div>
                            <p>
                                <hr />
                            <div class="form-group mb-3">
                                <label for="">Berapa pendapatan/ penghasilan rata-rata perbulan pada tahun pertama bekerja ?</label> <br>
                                <p><input type="checkbox" id="pertanyaan9" name="pertanyaan9" value="1 JT s/d 2,5 JT" /> 1 JT s/d 2,5 JT
                                <p><input type="checkbox" id="pertanyaan9" name="pertanyaan9" value="2,5 s/d 4,5 JT" /> 2,5 s/d 4,5 JT
                                <p><input type="checkbox" id="pertanyaan9" name="pertanyaan9" value="lebih 5 JT" /> lebih 5 JT
                                <p><input type="checkbox" id="pertanyaan9" name="pertanyaan9" value="Belum bekerja" /> Belum bekerja

                            </div>
                            <p>
                                <hr />
                            <div class="form-group mb-3">
                                <label for="">Seberapa Besar persentase kesesuaian pengetahuan dan keterampilan yang sudah saudara/i peroleh dari program studi dengan tuntutan pekerjaan saudara/i</label> <br>
                                <p><input type="checkbox" id="pertanyaan10" name="pertanyaan10" value="Lebih 86 %" /> Lebih 86 %
                                <p><input type="checkbox" id="pertanyaan10" name="pertanyaan10" value="76 % s/d 85 %" /> 76 % s/d 85 %
                                <p><input type="checkbox" id="pertanyaan10" name="pertanyaan10" value="61 % s/d 75 %" /> 61 % s/d 75 %
                                <p><input type="checkbox" id="pertanyaan10" name="pertanyaan10" value="51 % s/d 59 %" /> 51 % s/d 59 %
                                <p><input type="checkbox" id="pertanyaan10" name="pertanyaan10" value="kurang 50 %" /> kurang 50 %
                                <p><input type="checkbox" id="pertanyaan10" name="pertanyaan10" value="Belum bekerja" /> Belum bekerja
                            </div>
                            <p>
                                <hr />
                            <div class="form-group mb-3">
                                <label for="">Apakah pekerjaan saudara relevan dengan bidang keilmuan</label> <br>
                                <p><input type="checkbox" id="pertanyaan11" name="pertanyaan11" value="Relevan" /> Relevan
                                <p><input type="checkbox" id="pertanyaan11" name="pertanyaan11" value="Kurang relevan" /> Kurang Relevan
                                <p><input type="checkbox" id="pertanyaan11" name="pertanyaan11" value="Tidak relevan" /> Tidak Relevan
                                <p><input type="checkbox" id="pertanyaan11" name="pertanyaan11" value="Belum bekerja" /> Belum bekerja
                            </div>
                            <p>
                                <hr />
                            <div class="form-group mb-3">
                                <label for="">Tingkatan pendidikan apa yang paling sesuai/tepat untuk pekerjaan sudara/i ?</label> <br>
                                <p><input type="checkbox" id="pertanyaan12" name="pertanyaan12" value="Setingkat lebih tinggi" /> Setingkat lebih tinggi
                                <p><input type="checkbox" id="pertanyaan12" name="pertanyaan12" value="Tingkat yang sama" /> Tingkat yang sama
                                <p><input type="checkbox" id="pertanyaan12" name="pertanyaan12" value="Setingkat lebih rendah" /> Setingkat lebih rendah
                                <p><input type="checkbox" id="pertanyaan12" name="pertanyaan12" value="Tidak perlu pendidikan tinggi" /> Tidak perlu pendidikan tinggi
                                <p><input type="checkbox" id="pertanyaan12" name="pertanyaan12" value="Belum bekerja" /> Belum bekerja
                            </div>
                            <p>
                                <hr />
                            <div class="form-group mb-3">
                                <label for="">Berapa banyak pekerjaan yang sudah saudara/i lamar ?</label> <br>
                                <p><input type="checkbox" id="pertanyaan13" name="pertanyaan13" value="Kurang 5" /> Kurang 5
                                <p><input type="checkbox" id="pertanyaan13" name="pertanyaan13" value="6 s/d 20" /> 6 s/d 20
                                <p><input type="checkbox" id="pertanyaan13" name="pertanyaan13" value="6 s/d 40" /> 6 s/d 40
                                <p><input type="checkbox" id="pertanyaan13" name="pertanyaan13" value="Lebih dari 40" /> Lebih dari 40
                                <p><input type="checkbox" id="pertanyaan13" name="pertanyaan13" value="Belum bekerja" /> Belum bekerja
                            </div>
                            <p>
                                <hr />
                            <div class="form-group mb-3">
                                <label for="">Berapa banyak pekerjaan yang merespon lamaran saudara/i ?</label> <br>
                                <p><input type="checkbox" id="pertanyaan14" name="pertanyaan14" value="Kurang 5" /> Kurang 5
                                <p><input type="checkbox" id="pertanyaan14" name="pertanyaan14" value="6 s/d 20" /> 6 s/d 20
                                <p><input type="checkbox" id="pertanyaan14" name="pertanyaan14" value="6 s/d 40" /> 6 s/d 40
                                <p><input type="checkbox" id="pertanyaan14" name="pertanyaan14" value="Lebih dari 40" /> Lebih dari 40
                                <p><input type="checkbox" id="pertanyaan14" name="pertanyaan14" value="Belum bekerja" /> Belum bekerja
                            </div>
                            <p>
                                <hr />
                            <div class="form-group mb-3">
                                <label for="">Berapa banyak pekerjaan yang mengundang saudara/i untuk wawancara ?</label> <br>
                                <p><input type="checkbox" id="pertanyaan15" name="pertanyaan15" value="Kurang 5" /> Kurang 5
                                <p><input type="checkbox" id="pertanyaan15" name="pertanyaan15" value="6 s/d 20" /> 6 s/d 20
                                <p><input type="checkbox" id="pertanyaan15" name="pertanyaan15" value="6 s/d 40" /> 6 s/d 40
                                <p><input type="checkbox" id="pertanyaan15" name="pertanyaan15" value="Lebih dari 40" /> Lebih dari 40
                                <p><input type="checkbox" id="pertanyaan15" name="pertanyaan15" value="Belum bekerja" /> Belum bekerja
                            </div>
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