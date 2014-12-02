<?php
session_start();
include "koneksi.php";
error_reporting(0);

if (empty($_SESSION['username']) AND empty($_SESSION['password'])){include "login.php";}
else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Computer And Communication</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
<body>

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CNC Admin</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

            <li <?php if($_GET['act']=='berita_tampil'){
              echo "class='active'";
            }
            ?>>
            <a href="?act=berita_tampil">Berita</a></li>
          </ul>
         
         <ul class="nav navbar-nav navbar-right">
            <li><a href="#"> <?php session_start();
                            echo $_SESSION['username'];
                        ?>
                </a>
          </li>
          <li><a href="?act=logout">Logout</a></li
            
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container">

     
      	<div class="jumbotron">
       		<?php
            //!--Home--
            $page = @$_GET['act'];
            //$page = str_replace(".html","",$page); //menghilangkan ekstensi menjadi .html
            $file = "berita_tampil.php";
            if(!file_exists($file)) {
                include("berita_tampil.php");
            } else if ($page =="" || $page == "") {
                include("berita_tampil.php"); //memanggil file yang diinclude
            } else {
                include("$page.php");
            }
            ?>
    	</div>

    </div> 

   
</body>
</html>
<?php

}?>