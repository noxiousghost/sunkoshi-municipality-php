<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gallery | Sunkoshi Rural Municipality</title>
	<meta name="author" content="Narayan">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link rel="favicon icon" href="images/favicon.png">
</head>
</head>
<body>
<!-- navbar start -->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

		<div class="navbar-header">
			<a class="navbar-brand" href="#">Sunkoshi Rural Municiplity</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav">
			<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
			<li><a href="about.php">About us</a></li>
			<li class="active"><a href="gallery.php">Gallery</a></li>
			<li><a href="news.php">News and Articles</a></li>
			<li><a href="booking.php">E-Serivces</a></li>
			<li><a href="contact.php">Contact us</a></li>
		</ul>

		<ul class="nav navbar-nav navbar-right">
			<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
			<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		</ul>
	</div>
	</div>	
	</nav>
<!-- navbar end -->
<!-- title panel start -->
<div class="container-fluid" style="margin-top: 60px;">
	<div class="panel panel-primary">
		<div class="panel panel-heading">
			<h2>Photo Gallery</h2>
		</div>
	</div>
</div>
<!-- title panel end -->
<!-- content and rightbar start-->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">				
				<div class="panel panel-primary">
					<div class="panel panel-body">
						<?php
            $dir=glob('img/{*.jpg, *.png, *.jpeg}',GLOB_BRACE);
            foreach($dir as $value)
            {
            ?>
            <a href="<?php echo $value; ?>">
              <img src="<?php echo $value; ?>" width="200px" align="left" hspace="5px" vspace="5px">
            </a>
            <?php
            }
          ?>
					</div>
					
				</div>


		</div>
		<div class="col-md-4">
			<div class="panel panel-primary">
				<div class="panel panel-heading">
				<h3>COVID-19 विरुद्ध सु.गा.पा </h3>
			</div>
			<div class="panel panel-body">
				<img src="images/a.GIF" class="thumbnail" width="100%">
			</div>

			<div class="panel panel-body">
				<img src="images/b.GIF" class="thumbnail" width="100%">
			</div>

			<div class="panel panel-body">
				<img src="images/c.GIF" class="thumbnail" width="100%">
			</div>
			</div>
		</div>
	</div>
</div>
<!-- content and right bar end -->

<!-- footer -->
<div class="container-fluid jumbotron" style="background-color: #066; color: white;">
	<div class="row">
		<div class="col-sm-4">
			<h2><u>Contact us:</u></h2>
			<h3>Sunkoshi Rural Municiplaty</h3>
			<p><span class="glyphicon glyphicon-map-marker"></span> Ramtar, Sindhuli, Nepal</p>
      <p><span class="glyphicon glyphicon-phone"></span> 01-6924118</p>
      <p><span class="glyphicon glyphicon-envelope"></span> Sunkoshimunsindhuli@yahoo.com</p>

		</div>
		<div class="col-sm-4">
			<h2><u>Google Map</u></h2>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1524.2631762199694!2d85.900485!3d27.406635!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x14acca8cce0ed6ea!2sSunkoshi%20Gaunpalika%20Office!5e1!3m2!1sen!2snp!4v1656132721976!5m2!1sen!2snp" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy referrerpolicy="no-referrer-when-downgrade"></iframe>
			
		</div>
		<div class="col-sm-4">
			<h2><u>Social Media</u></h2>
			<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsunkoshimun&tabs=timeline&width=300&height=200&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
			
		</div>


	</div>
	<footer class="container-fluid bg-4 text-center">
  <p>All right reserved @ <a href="https://github.com/noxiousghost">Narayan Sapkota</a></p>
</footer>
</div>
<!-- footer end -->


</body>
</html>