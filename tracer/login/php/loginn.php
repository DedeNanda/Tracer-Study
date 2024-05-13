<?php
session_start();

if (
    isset($_POST['uname']) &&
    isset($_POST['pass'])
) {

    include "../dbconn.php";

    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $data = "uname=" . $uname;

    if (empty($uname)) {
        $em = "Nama pengguna diperlukan";
        header("Location: ../login.php?error=$em&$data");
        exit;
    } else if (empty($pass)) {
        $em = "kata kunci dibutuhkan";
        header("Location: ../login.php?error=$em&$data");
        exit;
    } else {

        $sql = "SELECT * FROM admin WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$uname]);

        if ($stmt->rowCount() == 1) {
            $user = $stmt->fetch();

            $username =  $user['username'];
            $password =  $user['password'];
            $fname =  $user['fname'];
            $id =  $user['id'];
            if ($username === $uname) {
                if (password_verify($pass, $password)) {
                    $_SESSION['id'] = $id;
                    $_SESSION['fname'] = $fname;

                    header("Location: ../menu-admin-index.php");
                    exit;
                } else {
                    $em = "Nama pengguna atau kata sandi salah";
                    header("Location: ../login.php?error=$em&$data");
                    exit;
                }
            } else {
                $em = "Nama pengguna atau kata sandi salah";
                header("Location: ../login.php?error=$em&$data");
                exit;
            }
        } else {
            $em = "Nama pengguna atau kata sandi salah";
            header("Location: ../login.php?error=$em&$data");
            exit;
        }
    }
} else {
    header("Location: ../login.php?error=error");
    exit;
}
