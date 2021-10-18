<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('css/login.css'); ?>">

    <?= $this->include("pages/jquery") ?>

    <title>Login</title>
</head>

<body>
    <div class="form-login">
        <img src="https://upload.wikimedia.org/wikipedia/commons/e/eb/LOGO_KABUPATEN_SEMARANG.png" height="70px" width="45px"
            class="mx-auto d-block">
        <h4 class="text-center"> <b>Sistem Informasi Organisasi <br> Kemasyarakatan</b> </h4>
        <hr>
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-danger alert-dismissible show" role="alert">
                <?php echo session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>
        <?= form_open("/login/auth") ?>
            <div class="form-group">
                <label>Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                    </div>
                    <input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda" required>
                </div>
            </div>
            <div class="form-group">
                <label>Password</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                    </div>
                    <input type="Password" name="password" class="form-control" value="" id="Password"
                        placeholder="Masukkan Password Anda" required>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success"><i class="fas fa-sign-in-alt"
                        style="position: relative;"></i> Login</button>
            </div>
        <?= form_close() ?>
    </div>
</body>

</html>