<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar akun UPT Pengembangan Karir</title>
</head>

<body>
    <div class="wrapper">
        <div class="logo">
            <img src="../images/logo_upt.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            Daftar UPT Pengembangan Karir
        </div>
        </br>
        <form action="php/signup.php" class="p-3 mt-3" method="post">
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_GET['success']; ?>
                </div>
            <?php } ?>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="fname" id="fname" placeholder="Fullname" value="<?php echo (isset($_GET['fname'])) ? $_GET['fname'] : "" ?>">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="uname" name="uname" id="uname" placeholder="Username" value="<?php echo (isset($_GET['uname'])) ? $_GET['uname'] : "" ?>">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="pass" id="pass" placeholder="Password">
            </div>
            <button class="btn mt-3" type="submit">Daftar</button>
            </br>
            </br>
            <button class="btn mt-3"><a href="login.php">Menu Login</a></h4>
        </form>
    </div>
</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    .wrapper .text-center {
        text-align: center;
        font-family: 'Dancing Script', cursive;
    }

    body {
        background: #ecf0f3;
    }

    .wrapper {
        max-width: 350px;
        min-height: 500px;
        margin: 80px auto;
        padding: 40px 30px 30px 30px;
        background-color: #CEF0B9;
        border-radius: 15px;
        box-shadow: 13px 13px 20px #64A36F, -13px -13px 20px #64A36F;
    }

    .logo {
        width: 80px;
        margin: auto;
    }

    .logo img {
        width: 100%;
        height: 80px;
        object-fit: cover;
        border-radius: 50%;
        box-shadow: 0px 0px 3px #FFE121,
            0px 0px 0px 5px #FFE121,
            8px 8px 15px #FFE121,
            -8px -8px 15px #FFE121;
    }

    .wrapper .name {
        font-weight: 600;
        font-size: 1.4rem;
        letter-spacing: 1.3px;
        padding-left: 10px;
        color: #b8860b;
    }


    .wrapper .form-field input {
        width: 100%;
        display: block;
        border: none;
        outline: none;
        background: none;
        font-size: 1.2rem;
        color: #666;
        padding: 10px 15px 10px 10px;
    }

    .wrapper .form-field {
        padding-left: 10px;
        margin-bottom: 20px;
        border-radius: 20px;
        box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
    }

    .wrapper .form-field .fas {
        color: #555;
    }

    .wrapper .btn {
        box-shadow: none;
        width: 100%;
        height: 40px;
        background-color: #64A36F;
        color: #fff;
        border-radius: 25px;
        box-shadow: 3px 3px 3px #b1b1b1,
            -3px -3px 3px #fff;
        letter-spacing: 1.3px;
    }

    .wrapper .btn:hover {
        background-color: #FFE121;
    }
</style>

</html>