
    <!DOCTYPE html>
    <html>
    <head>
        <title> halaman beranda</title>
    </head>
    <body>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Pengaduan Masyarakat</title>
    <link rel="stylesheet" href="<?php  echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php  echo base_url() ?>https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="<?php  echo base_url() ?>https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="<?php  echo base_url() ?>assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/untitled-1.css">
    <link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/untitled.css">



 <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top"><em>Pengaduan Masyarakat</em></a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead bg-primary text-white text-center">
        <div class="container">
            <h1>Selamat Datang!</h1>
            <h2 class="font-weight-light mb-0">Silahkan Login Untuk Melakukan Pengaduan</h2>
        </div>
    </header>
    <section id="portfolio" class="portfolio">
     <h1>Tambah Gambar</h1><hr>
<!-- Menampilkan Error jika validasi tidak valid -->
<div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>
<?php echo form_open("Home/tambah", array('enctype'=>'multipart/form-data')); ?>
  <table cellpadding="8">
                      <tr>
      <td>Nik</td>
      <td><input type="text" name="input_nik" value="<?php echo set_value('input_nik'); ?>"></td>
    </tr>

                <tr>
      <td>Deskripsi</td>
      <td><input type="text" name="input_deskripsi" value="<?php echo set_value('input_deskripsi'); ?>"></td>
    </tr>

    <tr>
      <td>Gambar</td>
      <td><input type="file" name="input_gambar"></td>
    </tr>
  </table>
    
  <hr>
  <input type="submit" name="submit" value="Simpan">
  <a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
<?php echo form_close(); ?>
        </section>


<footer class="text-center ">    @Pengaduan Masyarakat | 2020 </footer>
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/chart.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="<?php echo base_url() ?>assets/js/theme.js"></script>

    </body>
    </html>
