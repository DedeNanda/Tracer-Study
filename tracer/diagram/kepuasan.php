
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
	<button><a href="../menu-admin/kepuasan.php" class="btn btn-success"><h7>BACK</h7></a></button>
	</center>

	<center><P>Diagram Data kepuasan</p></center>

	<?php 
	include 'koneksi.php';
	?>
	
	<br></br>
	<center><P>Pertanyaan 1</p>Etika</center>
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>

	<br></br>
	<center><P>Pertanyaan 2</p>Keahlian pada bidang ilmu kompetensi utama</center>
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart2"></canvas>
	</div>
	
	<br></br>
	<center><P>Pertanyaan 3</p>Kemampuan berbahasa asing</center>
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart3"></canvas>
	</div>

	<br></br>
	<center><P>Pertanyaan 4</p>Penggunaan teknologi informasi</center>
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart4"></canvas>
	</div>

	<br></br>
	<center><P>Pertanyaan 5</p>Kemampuan berkomunikasi</center>
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart5"></canvas>
	</div>

	<br></br>
	<center><P>Pertanyaan 6</p>Kerjasama tim</center>
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart6"></canvas>
	</div>

	<br></br>
	<center><P>Pertanyaan 7</p>Pengembangan diri</center>
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart7"></canvas>
	</div>

	<br/>
	<br/>

	<?php

	$pertanyaan1 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan1='Sangat Baik'");
	$jumlah1 = mysqli_num_rows($pertanyaan1);

	$pertanyaan1 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan1='Baik'");
	$jumlah2 = mysqli_num_rows($pertanyaan1);

	$pertanyaan1 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan1='Cukup'");
	$jumlah3 = mysqli_num_rows($pertanyaan1);

	$pertanyaan1 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan1='Kurang'");
	$jumlah4 = mysqli_num_rows($pertanyaan1);

	
	$pertanyaan2 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan2='Sangat Baik'");
	$jumlah5 = mysqli_num_rows($pertanyaan2);

	$pertanyaan2 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan2='Baik'");
	$jumlah6 = mysqli_num_rows($pertanyaan2);

	$pertanyaan2 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan2='Cukup'");
	$jumlah7 = mysqli_num_rows($pertanyaan2);

	$pertanyaan2 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan2='Kurang'");
	$jumlah8 = mysqli_num_rows($pertanyaan2);


	$pertanyaan3 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan3='Sangat Baik'");
	$jumlah9 = mysqli_num_rows($pertanyaan3);

	$pertanyaan3 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan3='Baik'");
	$jumlah10 = mysqli_num_rows($pertanyaan3);

	$pertanyaan3 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan3='Cukup'");
	$jumlah11 = mysqli_num_rows($pertanyaan3);

	$pertanyaan3 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan3='Kurang'");
	$jumlah12 = mysqli_num_rows($pertanyaan3);


	$pertanyaan4 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan4='Sangat Baik'");
	$jumlah13 = mysqli_num_rows($pertanyaan4);

	$pertanyaan4 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan4='Baik'");
	$jumlah14 = mysqli_num_rows($pertanyaan4);

	$pertanyaan4 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan4='Cukup'");
	$jumlah15 = mysqli_num_rows($pertanyaan4);

	$pertanyaan4 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan4='Kurang'");
	$jumlah16 = mysqli_num_rows($pertanyaan4);


	$pertanyaan5 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan5='Sangat Baik'");
	$jumlah17 = mysqli_num_rows($pertanyaan5);

	$pertanyaan5 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan5='Baik'");
	$jumlah18 = mysqli_num_rows($pertanyaan5);

	$pertanyaan5 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan5='Cukup'");
	$jumlah19 = mysqli_num_rows($pertanyaan5);

	$pertanyaan5 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan5='Kurang'");
	$jumlah20 = mysqli_num_rows($pertanyaan5);


	$pertanyaan6 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan6='Sangat Baik'");
	$jumlah21 = mysqli_num_rows($pertanyaan6);

	$pertanyaan6 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan6='Baik'");
	$jumlah22 = mysqli_num_rows($pertanyaan6);

	$pertanyaan6 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan6='Cukup'");
	$jumlah23 = mysqli_num_rows($pertanyaan6);

	$pertanyaan6 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan6='Kurang'");
	$jumlah24 = mysqli_num_rows($pertanyaan6);


	$pertanyaan7 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan7='Sangat Baik'");
	$jumlah25 = mysqli_num_rows($pertanyaan7);

	$pertanyaan7 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan7='Baik'");
	$jumlah26 = mysqli_num_rows($pertanyaan7);

	$pertanyaan7 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan7='Cukup'");
	$jumlah27 = mysqli_num_rows($pertanyaan7);

	$pertanyaan7 = mysqli_query($koneksi, "SELECT * FROM kepuasan where pertanyaan7='Kurang'");
	$jumlah28 = mysqli_num_rows($pertanyaan7);

	?>
	
	
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["No.1 Sangat Baik", "No.1 Baik", "No.1 Cukup", "No.1 Kurang"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_pertanyaan1 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan1='Sangat Baik'");
					echo mysqli_num_rows($jumlah_pertanyaan1);
					?>, 
					<?php 
					$jumlah_pertanyaan1 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan1='Baik'");
					echo mysqli_num_rows($jumlah_pertanyaan1);
					?>,
					<?php 
					$jumlah_pertanyaan1 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan1='Cukup'");
					echo mysqli_num_rows($jumlah_pertanyaan1);
					?>,
					<?php 
					$jumlah_pertanyaan1 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan1='Kurang'");
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
				labels: ["No.2 Sangat Baik", "No.2 Baik", "No.2 Cukup", "No.2 Kurang"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_pertanyaan2 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan2='Sangat Baik'");
					echo mysqli_num_rows($jumlah_pertanyaan2);
					?>, 
					<?php 
					$jumlah_pertanyaan2 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan2='Baik'");
					echo mysqli_num_rows($jumlah_pertanyaan2);
					?>,
					<?php 
					$jumlah_pertanyaan2 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan2='Cukup'");
					echo mysqli_num_rows($jumlah_pertanyaan2);
					?>,
					<?php 
					$jumlah_pertanyaan2 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan2='Kurang'");
					echo mysqli_num_rows($jumlah_pertanyaan2);
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
		var ctx = document.getElementById("myChart3").getContext('2d');
		var myChart3 = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["No.3 Sangat Baik", "No.3 Baik", "No.3 Cukup", "No.3 Kurang"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_pertanyaan3 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan3='Sangat Baik'");
					echo mysqli_num_rows($jumlah_pertanyaan3);
					?>, 
					<?php 
					$jumlah_pertanyaan3 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan3='Baik'");
					echo mysqli_num_rows($jumlah_pertanyaan3);
					?>,
					<?php 
					$jumlah_pertanyaan3 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan3='Cukup'");
					echo mysqli_num_rows($jumlah_pertanyaan3);
					?>,
					<?php 
					$jumlah_pertanyaan3 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan3='Kurang'");
					echo mysqli_num_rows($jumlah_pertanyaan3);
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
		var ctx = document.getElementById("myChart4").getContext('2d');
		var myChart4 = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["No.4 Sangat Baik", "No.4 Baik", "No.4 Cukup", "No.4 Kurang"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_pertanyaan4 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan4='Sangat Baik'");
					echo mysqli_num_rows($jumlah_pertanyaan4);
					?>, 
					<?php 
					$jumlah_pertanyaan4 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan4='Baik'");
					echo mysqli_num_rows($jumlah_pertanyaan4);
					?>,
					<?php 
					$jumlah_pertanyaan4 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan4='Cukup'");
					echo mysqli_num_rows($jumlah_pertanyaan4);
					?>,
					<?php 
					$jumlah_pertanyaan4 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan4='Kurang'");
					echo mysqli_num_rows($jumlah_pertanyaan4);
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
		var ctx = document.getElementById("myChart5").getContext('2d');
		var myChart5 = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["No.5 Sangat Baik", "No.5 Baik", "No.5 Cukup", "No.5 Kurang"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_pertanyaan5 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan5='Sangat Baik'");
					echo mysqli_num_rows($jumlah_pertanyaan5);
					?>, 
					<?php 
					$jumlah_pertanyaan5 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan5='Baik'");
					echo mysqli_num_rows($jumlah_pertanyaan5);
					?>,
					<?php 
					$jumlah_pertanyaan5 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan5='Cukup'");
					echo mysqli_num_rows($jumlah_pertanyaan5);
					?>,
					<?php 
					$jumlah_pertanyaan5 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan5='Kurang'");
					echo mysqli_num_rows($jumlah_pertanyaan5);
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
		var ctx = document.getElementById("myChart6").getContext('2d');
		var myChart6 = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["No.6 Sangat Baik", "No.6 Baik", "No.6 Cukup", "No.6 Kurang"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_pertanyaan6 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan6='Sangat Baik'");
					echo mysqli_num_rows($jumlah_pertanyaan6);
					?>, 
					<?php 
					$jumlah_pertanyaan6 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan6='Baik'");
					echo mysqli_num_rows($jumlah_pertanyaan6);
					?>,
					<?php 
					$jumlah_pertanyaan6 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan6='Cukup'");
					echo mysqli_num_rows($jumlah_pertanyaan6);
					?>,
					<?php 
					$jumlah_pertanyaan6 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan6='Kurang'");
					echo mysqli_num_rows($jumlah_pertanyaan6);
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
		var ctx = document.getElementById("myChart7").getContext('2d');
		var myChart7 = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["No.7 Sangat Baik", "No.7 Baik", "No.7 Cukup", "No.7 Kurang"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_pertanyaan7 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan7='Sangat Baik'");
					echo mysqli_num_rows($jumlah_pertanyaan7);
					?>, 
					<?php 
					$jumlah_pertanyaan7 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan7='Baik'");
					echo mysqli_num_rows($jumlah_pertanyaan7);
					?>,
					<?php 
					$jumlah_pertanyaan7 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan7='Cukup'");
					echo mysqli_num_rows($jumlah_pertanyaan7);
					?>,
					<?php 
					$jumlah_pertanyaan7 = mysqli_query($koneksi,"select * from kepuasan where pertanyaan7='Kurang'");
					echo mysqli_num_rows($jumlah_pertanyaan7);
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
	
</body>
</html>