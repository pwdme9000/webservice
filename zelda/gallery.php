<?php 
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$pengaduan = query("SELECT * FROM laporan");

// $mahasiswa = query("SELECT * FROM mahasiswa");
// //jika tombol cari di klik 
// if (isset($_POST["cari"])) {
//  $mahasiswa = cari($_POST["keyword"]);
// }

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Unit Laka lantas Banyuwangi</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>


<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>
<div id="wrapper">


        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="index.php">Unit Laka</a></h1>         
               </div>
             <div class=" border-bottom">
                <!-- dibawah ini digunakan untuk menu pencarian -->
            <div class="full-left">
              <section class="full-top">
                <button id="toggle"><i class="fa fa-arrows-alt"></i></button>   
            </section>
            <form class=" navbar-left-right">
              <input type="text"  value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
              <input type="submit" value="" class="fa fa-search">
            </form>
            <div class="clearfix"> </div>
           </div>      

            <div class="clearfix">
       
     </div>
      
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                
                    <li>
                        <a href="index.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
                    </li>
                                       
                     <li>
                        <a href="inbox.php" class=" hvr-bounce-to-right"><i class="fa fa-inbox nav_icon"></i> <span class="nav-label">Data Pengaduan</span> </a>
                    </li>
                    
                    <li>
                        <a href="gallery.php" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Data Kecelakaan</span> </a>
                    </li>
                     
                     <li>
                        <a href="layout.php" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">Tulis Artikel</span> </a>
                    </li>
                   
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i> <span class="nav-label">Daftar Pegawai</span></a>                  
                    </li>
                   
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">Settings</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">                
                            <li><a href="logout.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Logout</a></li>
                            <li><a href="signup.html" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Singup</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
        <!--banner-->   
            <div class="banner">
           
                <h2>
                <a href="index.php">Home</a>
                <i class="fa fa-angle-right"></i>
                <span>Dashboard</span>              
                </h2>
                <p class="">Data Kecelakaan terbaru </p>
            </div>
        <!--//banner-->
        <div class="content-top">
            
            
            <div class="col-md-12 ">
                <div class="content-top-1">
                <div class="col-md-8 top-content">
                    <table border="1" cellpadding="100" width="1000px" cellspacing="0">
                        <tr>
                            <th>No.</th>
                            <th>Aksi</th>
                            <th>Foto</th>                           
                            <th>Keterangan</th>
                            <th>Meninggal</th>
                            <th>Luka Berat</th>
                            <th>Luka Ringan</th>                     
                            <th>Nomor Kendaraan</th>
                            <th>Waktu</th>
                            
                        </tr>
                        <?php $i =1; ?>
                        <?php foreach ($pengaduan as $row): ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td>
                                <a href="ubah.php?id=<?= $row["id"];?>">ubah</a>|
                                <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Apakah anda yakin menghapus data?');">hapus</a>
                            </td>
                            <td><br><img src="accident_report/<?php echo $row["foto"]; ?>" width="200" ></td>
                            <td><?php echo $row["keterangan"]; ?></td>
                            <td><?php echo $row["meninggal"]; ?></td>
                            <td><?php echo $row["luka_berat"]; ?></td>
                            <td><?php echo $row["luka_ringan"]; ?></td>
                            <td><?php echo $row["nomor_kendaraan"]; ?></td>
                            <td><?php echo $row["waktu"]; ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                    </table>

                    <br><br><br><br><br><br><br>
                    <br><br><br><br><br><br><br>
                </div>              
                 <div class="clearfix"></div>
                </div>
                
            </div>
            
        </div>
        <div class="clearfix"> </div>
        </div>
        
<div class="copy">
            <p> &copy;2018 Design By Adi Division <a href="http://gandrungdesk.id/" target="_blank">Gandrungdesk</a> </p>
        </div>
        </div>
        <div class="clearfix"> </div>
       </div>
     </div>
<!---->
<!--scrolling js-->
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!--//scrolling js-->
    <script src="js/bootstrap.min.js"> </script>
</body>
</html>

