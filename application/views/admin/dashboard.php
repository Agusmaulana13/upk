<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assetspet/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="<?php echo base_url() ?>assetspet/fonts/fontawesome-all.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Admin <br></span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation">
                    	<a class="nav-link active" href="#">
                    		<i class="fas fa-tachometer-alt"></i>
                    		<span>Dashboard</span>
                    	</a></li>
                    	
                    	<li class="nav-item" role="presentation"><a class="nav-link" href="#pengaduan"><i class="fas fa-table"></i><span>Table Pengaduan</span></a></li>
                    	<li class="nav-item" role="presentation"><a class="nav-link" href="#masyarakat"><i class="fas fa-table"></i><span>Table Masyarakat</span></a></li>
                    	<li class="nav-item" role="presentation"><a class="nav-link" href="#petugas"><i class="fas fa-table"></i><span>Table Petugas</span></a></li>

                    
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                            </div>
                        </form>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="badge badge-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                                        role="menu">
                                        <h6 class="dropdown-header">alerts center</h6>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter">7</span></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                                        role="menu">
                                        <h6 class="dropdown-header">alerts center</h6>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="<?php echo base_url() ?>assetspet/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="<?php echo base_url() ?>assetspet/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="<?php echo base_url() ?>assetspet/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="<?php echo base_url() ?>assetspet/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">Valerie Luna</span><img class="border rounded-circle img-profile" src="<?php echo base_url() ?>assetspet/img/avatars/avatar1.jpeg"></a>
                                    <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <a
                                            class="dropdown-item" role="presentation" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                    </div>
                    </li>
                    </ul>
            </div>
            </nav>
            <div class="container-fluid" id="pengaduan">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Table Pengaduan</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a></div>
               
                   

                	 <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table dataTable my-0" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th></th>>Tanggal Pengaduan</th>
                                        <th>Nik</th>
                                        <th>Isi Laporan</th>
                                        <th>Foto</th>
                                        <th>Status</th>
                                        <th>Option</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                     $no = 1;
                                      foreach($pengadu as $s){ ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $s['tgl_pengaduan'] ?></td>
                                        <td><?php echo $s['nik'] ?></td>
                                        <td><?php echo $s['isi_laporan'] ?></td>
                                        <td><img src="data:image/jpeg;base64,<?php echo base64_encode($s['foto']) ?>"  width="200"></td>
                                        <td><?php echo $s['status'] ?></td>
                                        <td>
                                            <a href="<?php  echo site_url('Home/form_edit/'.$s['id_pengaduan']); ?>">Edit</a>||
                                            <a href="<?php  echo site_url('Home/hapusPengadu/' .$s['id_pengaduan']); ?>" onclick="return confirm('yakin ingin hapus data')">Hapus</a>
                                            <a href="<?php  echo site_url('Home/insertPengadu/' .$s['id_pengaduan']); ?>" onclick="return confirm('yakin ingin hapus data')">insert</a>
                                        </td>
                                        </tr>
                                            <?php } ?>  
                                    
                                </tbody>
                               
                            </table>

                        </div>

                        <br>

<!-- ahir -->
 <div class="container-fluid" id="masyarakat">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Table Masyarakat</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a></div>
               
                   

                	 <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table dataTable my-0" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nik</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Telpon</th>
                                        <th>Opsi</th>
                                        <th> <a href="<?php  echo site_url('Home/regis/'); ?>">Tambah</a></th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                     $no = 1;
                                      foreach($hasil as $r){ ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $r['nik'] ?></td>
                                        <td><?php echo $r['nama'] ?></td>
                                        <td><?php echo $r['email'] ?></td>
                                        <td><?php echo $r['password'] ?></td>
                                        <td><?php echo $r['telp'] ?></td>
                                        <td>
                                            <a href="<?php  echo site_url('Home/form_edit/'.$r['id']); ?>">Edit</a>||
                                            <a href="<?php  echo site_url('Home/delete/' .$r['id']); ?>" onclick="return confirm('yakin ingin hapus data')">Hapus</a>
                                           
                                        </td>
                                        </tr>
                                            <?php } ?>  
                                </tbody>
                            </table>
                        </div>
                        <br>

                         <div class="container-fluid" id="petugas">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Table Petugas</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a></div>
               
                   

                	 <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table dataTable my-0" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Petugas</th>
                                        <th>email</th>
                                        <th>password</th>
                                        <th>Telpon</th>
                                        <th>Level</th>
                                        <th>Option</th>
                                        <th> <a href="<?php  echo site_url('Home/regis/'); ?>">Tambah</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                     $no = 1;
                                      foreach($result as $p){ ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $p['nama_petugas'] ?></td>
                                        <td><?php echo $p['email'] ?></td>
                                        <td><?php echo $p['password'] ?></td>
                                        <td><?php echo $p['telp'] ?></td>
                                        <td><?php echo $p['level'] ?></td>
                                        <td>
                                            <a href="<?php  echo site_url('Home/form_edit/'.$p['id_petugas']); ?>">Edit</a>||
                                            <a href="<?php  echo site_url('Home/hapus/' .$p['id_petugas']); ?>" onclick="return confirm('yakin ingin hapus data')">Hapus</a>
                                        </td>
                                        </tr>
                                            <?php } ?>  
                                </tbody>
                            </table>
                        </div>

                        <br>
                         <div class="container-fluid" id="masyarakat">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Table Tanggapan</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a></div>
               
                   

                     <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table dataTable my-0" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>id_tanggapan</th>
                                        <th>id_pengaduan </th>
                                        <th>tgl_tanggapan</th>
                                        <th>tanggapan</th>
                                        <th>id_petugas </th>
                                        <th>Opsi</th>
                                        <th> <a href="<?php  echo site_url('Home/regis/'); ?>">Tambah</a></th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                     $no = 1;
                                      foreach($tanggapan as $q){ ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $q['id_pengaduan'] ?></td>
                                        <td><?php echo $q['tgl_tanggapan'] ?></td>
                                        <td><?php echo $q['tanggapan'] ?></td>
                                        <td><?php echo $q['id_petugas'] ?></td>
        
                                    <td>
                                            <a href="<?php  echo site_url('Home/form_edit/'.$q['id_tanggapan']); ?>">Edit</a>||
                                            <a href="<?php  echo site_url('Home/delete/' .$q['id_tanggapan']); ?>" onclick="return confirm('yakin ingin hapus data')">Hapus</a>
                                           
                                        </td>
                                        </tr>
                                            <?php } ?>  
                                </tbody>
                            </table>
                        </div>
                        <br>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © Brand 2020</span></div>
            </div>
        </footer>
    </div>

<a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="<?php echo base_url() ?>assetspet/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assetspet/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assetspet/js/chart.min.js"></script>
    <script src="<?php echo base_url() ?>assetspet/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="<?php echo base_url() ?>assetspet/js/theme.js"></script>
</body>

</html>