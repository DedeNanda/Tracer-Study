<?php
session_start();
require '../koneksi/dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM kepuasan WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: ../menu-admin/kepuasan.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted";
        header("Location: ../menu-admin/kepuasan.php");
        exit(0);
    }
}



if(isset($_POST['save_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
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


    $query = "INSERT INTO kepuasan (pertanyaan1,pertanyaan2,pertanyaan3,pertanyaan4,pertanyaan5,pertanyaan6,pertanyaan7) VALUES ('$pertanyaan1','$pertanyaan2','$pertanyaan3','$pertanyaan4','$pertanyaan5','$pertanyaan6','$pertanyaan7')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Created Successfully";
        header("Location: kusioner-kepuasan.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Created";
        header("Location: kusioner-kepuasan.php");
        exit(0);
    }
}

?>