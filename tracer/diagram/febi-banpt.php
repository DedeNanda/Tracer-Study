
<!DOCTYPE html>
<html>
<head>
	<title>Diagram</title>
	<script type="text/javascript" src="chartjs/Chart.js"></script>
</head>
<body>
	<style type="text/css">
	body{
		font-family: roboto;
	}

	table{
		margin: 0px auto;
	}
	</style>
	<center>
		<br></br>
	<button onclick="window.print()">Print</button>
	<button><a href="../menu-admin/febi-banpt.php" class="btn btn-success"><h7>BACK</h7></a></button>
	</center>

	<center><P>Diagram Data febi banpt</p></center>

	<?php 
	include 'koneksi.php';
	?>
	
	<br></br>
	<center><P>Pertanyaan 1</p>Apakah saudara/i bangga menjadi alumni kampus ini ?</center>
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>

	<br></br>
	<center><P>Pertanyaan 2</p>Apakah saudara/i akan merekomendasikan kepada orang lain untuk kuliah di kampus ini ?</center>
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart2"></canvas>
	</div>
	
	<br></br>
	<center><P>Pertanyaan 3</p>Bila ada kesempatan melanjutkan studi lagi, apakah saudara/i akan memilih kampus ini ?</center>
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart3"></canvas>
	</div>

	<br></br>
	<center><P>Pertanyaan 4</p>Apakah saudara/i sudah bekerja sebelum mendaftar ke kampus ini ?</center>
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart4"></canvas>
	</div>

	<br></br>
	<center><P>Pertanyaan 5</p>Jelaskan saudara/i saat ini</center>
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart5"></canvas>
	</div>

	<br></br>
	<center><P>Pertanyaan 6</p>Apakah telah mendapatkan pekerjaan sekarang ?</center>
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart6"></canvas>
	</div>

	<br></br>
	<center><P>Pertanyaan 7</p>Berapa lama saudara/i mendapatkan pekerjaan setelah wisuda ?</center>
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart7"></canvas>
	</div>

	<br></br>
	<center><P>Pertanyaan 8</p>Apa tingkatan tempat saudara/i bekerja ?</center>
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart8"></canvas>
	</div>

	<br></br>
	<center><P>Pertanyaan 9</p>Berapa pendapatan/ penghasilan rata-rata perbulan pada tahun pertama bekerja ?</center>
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart9"></canvas>
	</div>

	<br></br>
	<center><P>Pertanyaan 10</p>Seberapa Besar persentase kesesuaian pengetahuan dan keterampilan yang sudah saudara/i peroleh dari program studi dengan tuntutan pekerjaan saudara/i ?</center>
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart10"></canvas>
	</div>

	<br></br>
	<center><P>Pertanyaan 11</p>Apakah pekerjaan saudara relevan dengan bidang keilmuan ?</center>
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart11"></canvas>
	</div>

	<br></br>
	<center><P>Pertanyaan 12</p>Tingkatan pendidikan apa yang paling sesuai/tepat untuk pekerjaan sudara/i ?</center>
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart12"></canvas>
	</div>

	<br></br>
	<center><P>Pertanyaan 13</p>Berapa banyak pekerjaan yang sudah saudara/i lamar ?</center>
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart13"></canvas>
	</div>

	<br></br>
	<center><P>Pertanyaan 14</p>Berapa banyak pekerjaan yang merespon lamaran saudara/i ?</center>
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart14"></canvas>
	</div>

	<br></br>
	<center><P>Pertanyaan 15</p>Berapa banyak pekerjaan yang mengundang saudara/i untuk wawancara ?</center>
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart15"></canvas>
	</div>















	<br/>
	<br/>

	<?php
	$gender = mysqli_query($koneksi, "SELECT * FROM febi_banpt where gender='Pria'");
	$jumlah1 = mysqli_num_rows($gender);

	$gender = mysqli_query($koneksi, "SELECT * FROM febi_banpt where gender='Wanita'");
	$jumlah2 = mysqli_num_rows($gender);

	$pertanyaan1 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan1='YA'");
	$jumlah3 = mysqli_num_rows($pertanyaan1);

	$pertanyaan1 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan1='TIDAK'");
	$jumlah4 = mysqli_num_rows($pertanyaan1);

	$pertanyaan2 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan2='YA'");
	$jumlah5 = mysqli_num_rows($pertanyaan2);

	$pertanyaan2 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan2='TIDAK'");
	$jumlah6 = mysqli_num_rows($pertanyaan2);

	$pertanyaan3 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan3='YA'");
	$jumlah7 = mysqli_num_rows($pertanyaan3);

	$pertanyaan3 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan3='TIDAK'");
	$jumlah8 = mysqli_num_rows($pertanyaan3);

	$pertanyaan4 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan4='SUDAH'");
	$jumlah9 = mysqli_num_rows($pertanyaan4);

	$pertanyaan4 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan4='BELUM'");
	$jumlah10 = mysqli_num_rows($pertanyaan4);

	$pertanyaan5 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan5='Bekerja'");
	$jumlah11 = mysqli_num_rows($pertanyaan5);

	$pertanyaan5 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan5='Wiraswasta'");
	$jumlah12 = mysqli_num_rows($pertanyaan5);

	$pertanyaan5 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan5='Melanjutkan Pendidikan'");
	$jumlah13 = mysqli_num_rows($pertanyaan5);

	$pertanyaan5 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan5='Tidak kerja tetapi sedang mencari kerja'");
	$jumlah14 = mysqli_num_rows($pertanyaan5);

	$pertanyaan5 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan5='Belum memungkinkan bekerja'");
	$jumlah15 = mysqli_num_rows($pertanyaan5);

	$pertanyaan5 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan5='Menikah/ wajib militer/ mengurus keluarga'");
	$jumlah16 = mysqli_num_rows($pertanyaan5);

	$pertanyaan6 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan6='SUDAH'");
	$jumlah17 = mysqli_num_rows($pertanyaan6);

	$pertanyaan6 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan6='BELUM'");
	$jumlah18 = mysqli_num_rows($pertanyaan6);

	$pertanyaan7 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan7='Kurang 3 Bulan'");
	$jumlah19 = mysqli_num_rows($pertanyaan7);

	$pertanyaan7 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan7='3 s/d 6 Bulan'");
	$jumlah20 = mysqli_num_rows($pertanyaan7);

	$pertanyaan7 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan7='6 s/d 1 Tahun'");
	$jumlah21 = mysqli_num_rows($pertanyaan7);

	$pertanyaan7 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan7='1 s/d 2 Tahun'");
	$jumlah22 = mysqli_num_rows($pertanyaan7);

	$pertanyaan7 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan7='Lebih Dari 2 Tahun'");
	$jumlah23 = mysqli_num_rows($pertanyaan7);

	$pertanyaan7 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan7='Belum bekerja'");
	$jumlah24 = mysqli_num_rows($pertanyaan7);

	$pertanyaan8 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan8='Lokal'");
	$jumlah25 = mysqli_num_rows($pertanyaan8);

	$pertanyaan8 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan8='Nasional'");
	$jumlah26 = mysqli_num_rows($pertanyaan8);

	$pertanyaan8 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan8='Internasional'");
	$jumlah27 = mysqli_num_rows($pertanyaan8);

	$pertanyaan8 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan8='Belum bekerja'");
	$jumlah28 = mysqli_num_rows($pertanyaan8);

	$pertanyaan9 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan9='1 s/d 2,5 JT'");
	$jumlah29 = mysqli_num_rows($pertanyaan9);

	$pertanyaan9 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan9='2,5 s/d 4,5 JT'");
	$jumlah30 = mysqli_num_rows($pertanyaan9);

	$pertanyaan9 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan9='lebih 5 JT'");
	$jumlah31 = mysqli_num_rows($pertanyaan9);

	$pertanyaan10 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan10='Lebih 86 %'");
	$jumlah32 = mysqli_num_rows($pertanyaan10);

	$pertanyaan10 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan10='76 % s/d 85 %'");
	$jumlah33 = mysqli_num_rows($pertanyaan10);

	$pertanyaan10 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan10='61 % s/d 75 %'");
	$jumlah34 = mysqli_num_rows($pertanyaan10);

	$pertanyaan10 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan10='51 % s/d 59 %'");
	$jumlah35 = mysqli_num_rows($pertanyaan10);

	$pertanyaan10 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan10='kurang 50 %'");
	$jumlah36 = mysqli_num_rows($pertanyaan10);

	$pertanyaan10 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan10='Belum bekerja'");
	$jumlah37 = mysqli_num_rows($pertanyaan10);

	$pertanyaan11 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan11='Relevan'");
	$jumlah38 = mysqli_num_rows($pertanyaan11);

	$pertanyaan11 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan11='Kurang Relevan'");
	$jumlah39 = mysqli_num_rows($pertanyaan11);

	$pertanyaan11 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan11='Tidak Relevan'");
	$jumlah40 = mysqli_num_rows($pertanyaan11);

	$pertanyaan12 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan12='Setingkat lebih tinggi'");
	$jumlah41 = mysqli_num_rows($pertanyaan12);

	$pertanyaan12 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan12='Tingkat yang sama'");
	$jumlah42 = mysqli_num_rows($pertanyaan12);

	$pertanyaan12 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan12='Setingkat lebih rendah'");
	$jumlah43 = mysqli_num_rows($pertanyaan12);

	$pertanyaan12 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan12='Tidak perlu pendidikan tinggi'");
	$jumlah44 = mysqli_num_rows($pertanyaan12);

	$pertanyaan13 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan13='Kurang 5'");
	$jumlah45 = mysqli_num_rows($pertanyaan13);

	$pertanyaan13 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan13='6 s/d 20'");
	$jumlah46 = mysqli_num_rows($pertanyaan13);

	$pertanyaan13 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan13='20 s/d 40'");
	$jumlah47 = mysqli_num_rows($pertanyaan13);

	$pertanyaan13 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan13='Lebih dari 40 '");
	$jumlah48 = mysqli_num_rows($pertanyaan13);

	$pertanyaan14 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan14='Kurang 5'");
	$jumlah49 = mysqli_num_rows($pertanyaan14);

	$pertanyaan14 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan14='6 s/d 20'");
	$jumlah50 = mysqli_num_rows($pertanyaan14);

	$pertanyaan14 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan14='20 s/d 40'");
	$jumlah51 = mysqli_num_rows($pertanyaan14);

	$pertanyaan14 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan14='Lebih dari 40 '");
	$jumlah52 = mysqli_num_rows($pertanyaan14);

	$pertanyaan15 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan15='Kurang 5'");
	$jumlah53 = mysqli_num_rows($pertanyaan15);

	$pertanyaan15 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan15='6 s/d 20'");
	$jumlah54 = mysqli_num_rows($pertanyaan15);

	$pertanyaan15 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan15='20 s/d 40'");
	$jumlah55 = mysqli_num_rows($pertanyaan15);

	$pertanyaan15 = mysqli_query($koneksi, "SELECT * FROM febi_banpt where pertanyaan15='Lebih dari 40 '");
	$jumlah56 = mysqli_num_rows($pertanyaan15);
	?>
	
	
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["No.1 Ya", "No.1 Tidak"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_pertanyaan1 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan1='YA'");
					echo mysqli_num_rows($jumlah_pertanyaan1);
					?>, 
					<?php 
					$jumlah_pertanyaan1 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan1='TIDAK'");
					echo mysqli_num_rows($jumlah_pertanyaan1);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(255,99,132,1)'
					],
					borderWidth: 1
				}]
			},
			
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>

	<script>
		var ctx = document.getElementById("myChart2").getContext('2d');
		var myChart2 = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["No.2 Ya", "No.2 Tidak"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_pertanyaan2 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan2='YA'");
					echo mysqli_num_rows($jumlah_pertanyaan2);
					?>, 
					<?php 
					$jumlah_pertanyaan2 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan2='TIDAK'");
					echo mysqli_num_rows($jumlah_pertanyaan2);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)'
					],
					borderWidth: 1
				}]
			},
			
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>

	<script>
		var ctx = document.getElementById("myChart3").getContext('2d');
		var myChart3 = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["No.3 Ya", "No.3 Tidak"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_pertanyaan3 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan3='YA'");
					echo mysqli_num_rows($jumlah_pertanyaan3);
					?>, 
					<?php 
					$jumlah_pertanyaan3 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan3='TIDAK'");
					echo mysqli_num_rows($jumlah_pertanyaan3);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)'
					],
					borderWidth: 1
				}]
			},
			
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>

	<script>
		var ctx = document.getElementById("myChart4").getContext('2d');
		var myChart4 = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["No.4 SUDAH", "No.4 BELUM"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_pertanyaan4 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan4='SUDAH'");
					echo mysqli_num_rows($jumlah_pertanyaan4);
					?>, 
					<?php 
					$jumlah_pertanyaan4 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan4='BELUM'");
					echo mysqli_num_rows($jumlah_pertanyaan4);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)'
					],
					borderWidth: 1
				}]
			},
			
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>

	<script>
		var ctx = document.getElementById("myChart5").getContext('2d');
		var myChart5 = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["No.5 Bekerja", "No.5 Wiraswasta", "No.5 Lanjut pend", "No.5 Mencari kerja", "No.5 Belum bisa bekerja", "No.5 Menikah"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_pertanyaan5 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan5='Bekerja'");
					echo mysqli_num_rows($jumlah_pertanyaan5);
					?>, 
					<?php 
					$jumlah_pertanyaan5 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan5='Wiraswasta'");
					echo mysqli_num_rows($jumlah_pertanyaan5);
					?>, 
					<?php 
					$jumlah_pertanyaan5 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan5='Melanjutkan pendidikan'");
					echo mysqli_num_rows($jumlah_pertanyaan5);
					?>, 
					<?php 
					$jumlah_pertanyaan5 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan5='Tidak kerja tetapi sedang mencari kerja'");
					echo mysqli_num_rows($jumlah_pertanyaan5);
					?>, 
					<?php 
					$jumlah_pertanyaan5 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan5='Belum memungkinkan bekerja'");
					echo mysqli_num_rows($jumlah_pertanyaan5);
					?>, 
					<?php 
					$jumlah_pertanyaan5 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan5='Menikah/ wajib militer/ mengurus keluarga'");
					echo mysqli_num_rows($jumlah_pertanyaan5);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)'
					],
					borderWidth: 1
				}]
			},
			
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>

	<script>
		var ctx = document.getElementById("myChart6").getContext('2d');
		var myChart6 = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["No.6 SUDAH", "No.6 BELUM"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_pertanyaan6 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan6='SUDAH'");
					echo mysqli_num_rows($jumlah_pertanyaan6);
					?>, 
					<?php 
					$jumlah_pertanyaan6 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan6='BELUM'");
					echo mysqli_num_rows($jumlah_pertanyaan6);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)'
					],
					borderWidth: 1
				}]
			},
			
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>

<script>
		var ctx = document.getElementById("myChart7").getContext('2d');
		var myChart7 = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["No.7 < 3 Bulan", "No.7 3 s/d 6 Bulan", "No.7 6 s/d 1 Tahun", "No.7 1 s/d 2 Tahun", "No.7 > 2 Tahun", "No.7 Belum bekerja"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_pertanyaan7 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan7='Kurang 3 Bulan'");
					echo mysqli_num_rows($jumlah_pertanyaan7);
					?>, 
					<?php 
					$jumlah_pertanyaan7 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan7='3 s/d 6 Bulan'");
					echo mysqli_num_rows($jumlah_pertanyaan7);
					?>, 
					<?php 
					$jumlah_pertanyaan7 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan7='6 s/d 1 Tahun'");
					echo mysqli_num_rows($jumlah_pertanyaan7);
					?>, 
					<?php 
					$jumlah_pertanyaan7 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan7='1 s/d 2 Tahun'");
					echo mysqli_num_rows($jumlah_pertanyaan7);
					?>, 
					<?php 
					$jumlah_pertanyaan7 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan7='Lebih Dari 2 Tahun'");
					echo mysqli_num_rows($jumlah_pertanyaan7);
					?>, 
					<?php 
					$jumlah_pertanyaan7 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan7='Belum bekerja'");
					echo mysqli_num_rows($jumlah_pertanyaan7);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)'
					],
					borderWidth: 1
				}]
			},
			
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>

<script>
		var ctx = document.getElementById("myChart8").getContext('2d');
		var myChart8 = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["No.8 Lokal", "No.8 Nasional", "No.Internasional", "No.8 Belum bekerja"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_pertanyaan8 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan8='Lokal'");
					echo mysqli_num_rows($jumlah_pertanyaan8);
					?>, 
					<?php 
					$jumlah_pertanyaan8 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan8='Nasional'");
					echo mysqli_num_rows($jumlah_pertanyaan8);
					?>, 
					<?php 
					$jumlah_pertanyaan8 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan8='Internasional'");
					echo mysqli_num_rows($jumlah_pertanyaan8);
					?>, 
					<?php 
					$jumlah_pertanyaan8 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan8='Belum bekerja'");
					echo mysqli_num_rows($jumlah_pertanyaan8);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)'
					],
					borderWidth: 1
				}]
			},
			
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>

<script>
		var ctx = document.getElementById("myChart9").getContext('2d');
		var myChart9 = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["No.9 1 JT s/d 2,5 JT","No.9 2,5 s/d 4,5 JT","No.9 lebih 5 JT"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_pertanyaan9 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan9='1 JT s/d 2,5 JT'");
					echo mysqli_num_rows($jumlah_pertanyaan9);
					?>,
					<?php 
					$jumlah_pertanyaan9 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan9='2,5 s/d 4,5 JT'");
					echo mysqli_num_rows($jumlah_pertanyaan9);
					?>,  
					<?php 
					$jumlah_pertanyaan9 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan9='lebih 5 JT'");
					echo mysqli_num_rows($jumlah_pertanyaan9);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)'
					],
					borderWidth: 1
				}]
			},
			
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>

<script>
		var ctx = document.getElementById("myChart10").getContext('2d');
		var myChart10 = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["No.10 Lebih 86 %","No.10 76 % s/d 85 %","No.10 61 % s/d 75 %","No.10 51 % s/d 59 %","No.10 kurang 50 %","No.10 Belum bekerja"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_pertanyaan10 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan10='Lebih 86 %'");
					echo mysqli_num_rows($jumlah_pertanyaan10);
					?>, 
					<?php 
					$jumlah_pertanyaan10 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan10='76 % s/d 85 %'");
					echo mysqli_num_rows($jumlah_pertanyaan10);
					?>,
					<?php 
					$jumlah_pertanyaan10 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan10='61 % s/d 75 %'");
					echo mysqli_num_rows($jumlah_pertanyaan10);
					?>,
					<?php 
					$jumlah_pertanyaan10 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan10='51 % s/d 59 %'");
					echo mysqli_num_rows($jumlah_pertanyaan10);
					?>,
					<?php 
					$jumlah_pertanyaan10 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan10='kurang 50 %'");
					echo mysqli_num_rows($jumlah_pertanyaan10);
					?>,
					<?php 
					$jumlah_pertanyaan10 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan10='Belum bekerja'");
					echo mysqli_num_rows($jumlah_pertanyaan10);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)'
					],
					borderWidth: 1
				}]
			},
			
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>

	<script>
		var ctx = document.getElementById("myChart11").getContext('2d');
		var myChart11 = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["No.11 Relevan","No.11 Kurang Relevan","No.11 Tidak Relevan"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_pertanyaan11 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan11='Relevan'");
					echo mysqli_num_rows($jumlah_pertanyaan11);
					?>, 
					<?php 
					$jumlah_pertanyaan11 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan11='Kurang Relevan'");
					echo mysqli_num_rows($jumlah_pertanyaan11);
					?>,
					<?php 
					$jumlah_pertanyaan11 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan11='Tidak Relevan'");
					echo mysqli_num_rows($jumlah_pertanyaan11);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)'
					],
					borderWidth: 1
				}]
			},
			
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>

<script>
		var ctx = document.getElementById("myChart12").getContext('2d');
		var myChart12 = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["No.12 lebih tinggi","No.12 Tingkat yang sama","No.12 Setingkat lebih rendah","No.12 Tidak perlu pend tinggi"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_pertanyaan12 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan12='Setingkat lebih tinggi'");
					echo mysqli_num_rows($jumlah_pertanyaan12);
					?>, 
					<?php 
					$jumlah_pertanyaan12 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan12='Tingkat yang sama'");
					echo mysqli_num_rows($jumlah_pertanyaan12);
					?>, 
					<?php 
					$jumlah_pertanyaan12 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan12='Setingkat lebih rendah'");
					echo mysqli_num_rows($jumlah_pertanyaan12);
					?>, 
					<?php 
					$jumlah_pertanyaan12 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan12='Tidak perlu pendidikan tinggi'");
					echo mysqli_num_rows($jumlah_pertanyaan12);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)'
					],
					borderWidth: 1
				}]
			},
			
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>

<script>
		var ctx = document.getElementById("myChart13").getContext('2d');
		var myChart13 = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["No.13 Kurang 5", "No.13 6 s/d 20", "No.13 20 s/d 40", "No.13 Lebih dari 40"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_pertanyaan13 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan13='Kurang 5'");
					echo mysqli_num_rows($jumlah_pertanyaan13);
					?>, 
					<?php 
					$jumlah_pertanyaan13 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan13='6 s/d 20'");
					echo mysqli_num_rows($jumlah_pertanyaan13);
					?>, 
					<?php 
					$jumlah_pertanyaan13 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan13='20 s/d 40'");
					echo mysqli_num_rows($jumlah_pertanyaan13);
					?>, 
					<?php 
					$jumlah_pertanyaan13 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan13='Lebih dari 40'");
					echo mysqli_num_rows($jumlah_pertanyaan13);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)'
					],
					borderWidth: 1
				}]
			},
			
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>

<script>
		var ctx = document.getElementById("myChart14").getContext('2d');
		var myChart14 = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["No.13 Kurang 5", "No.13 6 s/d 20", "No.13 20 s/d 40", "No.13 Lebih dari 40"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_pertanyaan14 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan14='Kurang 5'");
					echo mysqli_num_rows($jumlah_pertanyaan14);
					?>, 
					<?php 
					$jumlah_pertanyaan14 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan14='6 s/d 20'");
					echo mysqli_num_rows($jumlah_pertanyaan14);
					?>, 
					<?php 
					$jumlah_pertanyaan14 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan14='20 s/d 40'");
					echo mysqli_num_rows($jumlah_pertanyaan14);
					?>, 
					<?php 
					$jumlah_pertanyaan14 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan14='Lebih dari 40'");
					echo mysqli_num_rows($jumlah_pertanyaan14);
					?>					
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)'
					],
					borderWidth: 1
				}]
			},
			
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>

<script>
		var ctx = document.getElementById("myChart15").getContext('2d');
		var myChart15 = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["No.13 Kurang 5", "No.13 6 s/d 20", "No.13 20 s/d 40", "No.13 Lebih dari 40"],
				datasets: [{
					label: '',
					data: [
						<?php 
					$jumlah_pertanyaan15 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan15='Kurang 5'");
					echo mysqli_num_rows($jumlah_pertanyaan15);
					?>, 
					<?php 
					$jumlah_pertanyaan15 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan15='6 s/d 20'");
					echo mysqli_num_rows($jumlah_pertanyaan15);
					?>, 
					<?php 
					$jumlah_pertanyaan15 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan15='20 s/d 40'");
					echo mysqli_num_rows($jumlah_pertanyaan15);
					?>, 
					<?php 
					$jumlah_pertanyaan15 = mysqli_query($koneksi,"select * from febi_banpt where pertanyaan15='Lebih dari 40'");
					echo mysqli_num_rows($jumlah_pertanyaan15);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)'
					],
					borderWidth: 1
				}]
			},
			
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>


	
</body>
</html>