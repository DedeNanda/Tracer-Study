<?php

if (
    isset($_POST['fname']) &&
    isset($_POST['uname']) &&
    isset($_POST['pass'])
) {

    include "../dbconn.php";

    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $data = "fname=" . $fname . "&uname=" . $uname;

    if (empty($fname)) {
        $em = "Nama lengkap diperlukan";
        header("Location: ../register.php?error=$em&$data");
        exit;
    } else if (empty($uname)) {
        $em = "Nama pengguna diperlukan";
        header("Location: ../register.php?error=$em&$data");
        exit;
    } else if (empty($pass)) {
        $em = "kata kunci dibutuhkan";
        header("Location: ../register.php?error=$em&$data");
        exit;
    } else {

        // hashing the password
        $pass = password_hash($pass, PASSWORD_DEFAULT);

        $sql = "INSERT INTO admin(fname, username, password) 
    	        VALUES(?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$fname, $uname, $pass]);

        header("Location: ../register.php?success=Akun Anda telah berhasil dibuat");
        exit;
    }
} else {
    header("Location: ../register.php?error=error");
    exit;
}
