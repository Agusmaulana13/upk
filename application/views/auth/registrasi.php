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

                <input class="form-control" type="text"  maxlength="10" onkeypress="return hanyaAngka(event)" name="nik" placeholder="Nik" required>
                <br>
                <input class="form-control" type="name" name="nama" placeholder="Name" required>
                <br>
                <input class="form-control" type="email" name="email" placeholder="Email" required>
                <br>
                <input class="form-control" type="password" name="password" placeholder="password" required>
                <br>
                <input class="form-control" type="text" name="phone" maxlength="12" onkeypress="return hanyaAngka(event)" placeholder="Phone Number" required>
            <br>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">I agree to the license terms.</label>
                    </div>
                <button class="btn btn-primary btn-block" type="submit" name="simpan" onclick="return confirm('Data Anda Sudah Masuk Silahkan Login')">Create</button>
                <br>
                <a class="already" href="<?= site_url()  ?>">You already have an account? Login here.</a>
            </form>
        </div>
    </div>
    <script>
        function hanyaAngka(evt){
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57)) 

                return false;
                return true;

        }


    </script>
    <script src="<?= base_url() ?>assetsregis/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assetsregis/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>