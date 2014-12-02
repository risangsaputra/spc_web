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
          <a class="navbar-brand" href="#">CNC News</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

            <li <?php if($_GET['act']=='home'){
              echo "class='active'";
            }
            ?>>
            <a href="?act=home">Home</a></li>


             <li <?php if($_GET['act']=='sport'){
              echo "class='active'";
            }
            ?>><a href="?act=sport">Sport</a></li>
    
            <li <?php if($_GET['act']=='entertainment'){
              echo "class='active'";
            }
            ?>>
            <a href="?act=entertainment">Entertainment</a></li>
            
            <li <?php if($_GET['act']=='politik'){
              echo "class='active'";
            }
            ?>><a href="?act=politik">Politik</a></li>
          </ul>
          <form class="navbar-form navbar-right" method="POST" role="form" action="?act=searching">
            <div class="form-group">
              <input type="search" name="search" placeholder="Searching" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-success">Search</button>
          </form>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container">

     
      	<div class="jumbotron">
       		<?php
            //!--Home--
            $page = @$_GET['act'];
            //$page = str_replace(".html","",$page); //menghilangkan ekstensi menjadi .html
            $file = "home.php";
            if(!file_exists($file)) {
                include("home.php");
            } else if ($page =="" || $page == "") {
                include("home.php"); //memanggil file yang diinclude
            } else {
                include("$page.php");
            }
            ?>
    	</div>

    </div> 

   
</body>
</html>