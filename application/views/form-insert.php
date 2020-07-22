<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="<?= base_url() ?>assetsregis/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assetsregis/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="<?= base_url() ?>assetsregis/css/styles.css">
    <link rel="stylesheet" href="<?= base_url() ?>assetsregis/css/untitled.css">
</head>

<body>
    <div class="card"></div>
    <div class="register-photo">
        <h2 class="text-center"><strong>Create</strong> an account.</h2>
        <div class="form-container">
            
            <form action="<?php echo site_url('Home/insert') ?>" method="POST">

                <input class="form-control" type="nik" name="nik" placeholder="Nik">
                <br>
                <input class="form-control" type="name" name="nama" placeholder="Name">
                <br>
                <input class="form-control" type="email" name="email" placeholder="Email">
                <br>
                <input class="form-control" type="password" name="password" placeholder="password">
                <br>
                <input class="form-control" type="phone" name="phone" placeholder="Phone Number">
            <br>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">I agree to the license terms.</label>
                    </div>
                <button class="btn btn-primary btn-block" type="submit" name="simpan" >Create</button>
                <br>
                <a class="already" href="<?= site_url()  ?>">You already have an account? Login here.</a>
            </form>
        </div>
    </div>
    <script src="<?= base_url() ?>assetsregis/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assetsregis/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>