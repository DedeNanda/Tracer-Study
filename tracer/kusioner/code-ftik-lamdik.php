<?php
session_start();
require '../koneksi/dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM ftik_lamdik WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: ../menu-admin/ftik-lamdik.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted";
        header("Location: ../menu-admin/ftik-lamdik.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
    $nim = mysqli_real_escape_string($con, $_POST['nim']);
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $gender  = $_POST['gender'];
    $notelepon = mysqli_real_escape_string($con, $_POST['notelepon']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $fakultas = mysqli_real_escape_string($con, $_POST['fakultas']);
    $prodi = mysqli_real_escape_string($con, $_POST['prodi']);
    $tanggal = mysqli_real_escape_string($con, $_POST['tanggal']);
    $pertanyaan1  = $_POST['pertanyaan1'];
    $pertanyaan2  = $_POST['pertanyaan2'];
    $pertanyaan3  = $_POST['pertanyaan3'];
    $pertanyaan4  = $_POST['pertanyaan4'];
    $pertanyaan5  = $_POST['pertanyaan5'];
    $pertanyaan6  = $_POST['pertanyaan6'];
    $pertanyaan7  = $_POST['pertanyaan7'];
    $pertanyaan8  = $_POST['pertanyaan8'];
    $pertanyaan9  = $_POST['pertanyaan9'];
    $pertanyaan10  = $_POST['pertanyaan10'];
    $pertanyaan11  = $_POST['pertanyaan11'];
    $pertanyaan12  = $_POST['pertanyaan12'];
    $pertanyaan13  = $_POST['pertanyaan13'];
    $pertanyaan14  = $_POST['pertanyaan14'];
    $pertanyaan15  = $_POST['pertanyaan15'];

    $query = "UPDATE ftik_lamdik SET nim='$nim', nama='$nama', gender='$gender', notelepon='$notelepon', email='$email',  fakultas='$fakultas', prodi='$prodi', tanggal='$tanggal', pertanyaan1='$pertanyaan1', pertanyaan2='$pertanyaan2', pertanyaan3='$pertanyaan3', pertanyaan4='$pertanyaan4', pertanyaan5='$pertanyaan5', pertanyaan6='$pertanyaan6', pertanyaan7='$pertanyaan7', pertanyaan8='$pertanyaan8', pertanyaan9='$pertanyaan9', pertanyaan10='$pertanyaan10', pertanyaan11='$pertanyaan11', pertanyaan12='$pertanyaan12', pertanyaan13='$pertanyaan13', pertanyaan14='$pertanyaan14', pertanyaan15='$pertanyaan15' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: ../menu-admin/ftik-lamdik.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Updated";
        header("Location: ../menu-admin/ftik-lamdik.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
    $nim = mysqli_real_escape_string($con, $_POST['nim']);
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $gender  = $_POST['gender'];
    $notelepon = mysqli_real_escape_string($con, $_POST['notelepon']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $fakultas = mysqli_real_escape_string($con, $_POST['fakultas']);
    $prodi = mysqli_real_escape_string($con, $_POST['prodi']);
    $tanggal = mysqli_real_escape_string($con, $_POST['tanggal']);
    $pertanyaan1  = $_POST['pertanyaan1'];
    $pertanyaan2  = $_POST['pertanyaan2'];
    $pertanyaan3  = $_POST['pertanyaan3'];
    $pertanyaan4  = $_POST['pertanyaan4'];
    $pertanyaan5  = $_POST['pertanyaan5'];
    $pertanyaan6  = $_POST['pertanyaan6'];
    $pertanyaan7  = $_POST['pertanyaan7'];
    $pertanyaan8  = $_POST['pertanyaan8'];
    $pertanyaan9  = $_POST['pertanyaan9'];
    $pertanyaan10  = $_POST['pertanyaan10'];
    $pertanyaan11  = $_POST['pertanyaan11'];
    $pertanyaan12  = $_POST['pertanyaan12'];
    $pertanyaan13  = $_POST['pertanyaan13'];
    $pertanyaan14  = $_POST['pertanyaan14'];
    $pertanyaan15  = $_POST['pertanyaan15'];

    $query = "INSERT INTO ftik_lamdik (nim,nama,gender,notelepon,email,fakultas,prodi,tanggal,pertanyaan1,pertanyaan2,pertanyaan3,pertanyaan4,pertanyaan5,pertanyaan6,pertanyaan7,pertanyaan8,pertanyaan9,pertanyaan10,pertanyaan11,pertanyaan12,pertanyaan13,pertanyaan14,pertanyaan15) VALUES ('$nim','$nama','$gender','$notelepon','$email','$fakultas','$prodi','$tanggal','$pertanyaan1','$pertanyaan2','$pertanyaan3','$pertanyaan4','$pertanyaan5','$pertanyaan6','$pertanyaan7','$pertanyaan8','$pertanyaan9','$pertanyaan10','$pertanyaan11','$pertanyaan12','$pertanyaan13','$pertanyaan14','$pertanyaan15')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Created Successfully";
        header("Location: kusioner-ftik-lamdik.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Created";
        header("Location: kusioner-ftik-lamdik.php");
        exit(0);
    }
}

?>