<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="<?= base_url() ?>assetsa/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assetsa/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assetsa/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="<?= base_url() ?>assetsa/css/styles.css">
</head>

<body>
    <div class="login-clean">
        <?php echo form_open('Home/admin') ?>
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-happy"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="pass" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="login">Log In</button></div><a class="forgot" href="#">Forgot your email or password?</a>
            <?php echo form_close() ?>
    </div>
    <script src="<?= base_url() ?>assetsa/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assetsa/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>