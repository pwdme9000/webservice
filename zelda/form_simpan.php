<?php 
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
if (isset($_POST["submit"])) {
    //cek apakah data berhasul ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "<script>
        alert('data berhasil di tambahkan!');
        document.location.href='layout.php';
        </script>";
    }else {
        echo "<script>
        alert('data tidak berhasil ditambahkan!');
        document.location.href='layout.php';
        </script>";
    }
    

}


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
                            <li><a href="register1.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Tambah Pegawai</a></li>
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
        <!--//<banner-->
            <div class="banner">
                
                <div class="col-md-12">
                   <form action="" method="post" enctype="multipart/form-data">
                        <ul>
                            
                                <label>News Heading</label><br>
                                <input type="text" name="news_heading" id="news_heading" required>
                                <br/>   
                                <label for="">Tanggal Berita</label><br>
                                <input type="text" name="news_date" id="news_date" required>
                                <br/>
                                <label for="">Kategori</label><br>        
                                <input type="text" name="cate_id" id="cate_id">
                                <br/> 
                                <label for="">Deskripsi</label><br>         
                                <textarea name="news_description" id="news_description" class="form-control" rows="10" required></textarea>
                                <br/>                           
                                <label for="gambar">Pilih Gambar</label>
                                <input type="text" name="news_image" id="news_image">
                                <br>
                           
                            
                                <button type="submit" name="submit">Tambah Berita</button>
                            
                        </ul>
                        
                </form>
    

                    <hr />
                </div>

                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        <!--//banner-->
 	<!--grid-->
 	<div class="grid-system">
 		<!---->
 		
</div>
 	<!--//grid-->
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
