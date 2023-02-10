<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home | Sunkoshi Rural Municipality</title>
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
			<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
			<li ><a href="about.php">About us</a></li>
			<li ><a href="gallery.php">Gallery</a></li>
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

<!-- slide start -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/slide4.JPG" alt="Chania">
      <div class="carousel-caption">
        <h3>सुनकोशी गाउँपालिकाको कार्यपालिका भवन</h3>
      </div>
    </div>

    <div class="item">
      <img src="images/slide5.JPG" alt="Chicago">
      <div class="carousel-caption">
        <h3>सुनकोशी गाउँपालिका कार्यलय परिसर</h3>
      </div>
    </div>

    <div class="item">
      <img src="images/slide6.JPG" alt="New York">
      <div class="carousel-caption">
        <h3>नमस्ते सुनकोशी गाउँपालिका</h3>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- start end -->

<!-- welcome start -->
<div class="container-fluid text-center">
  <div class="row">
    <div class="panel panel-primary">
      <div class="panel panel-heading">
        <h2>Welcome to Sunkoshi Rural Municiplity</h2>
      </div>
      <div class="panel panel-body">
        <p>
		Sunkoshi Rural Municipality (Nepali: सुनकोशी गाउँपालिका) is a rural municipality in Sindhuli district of Bagmati Province in Nepal.
		The Rural municipality is divided into 7 wards.
		According to 2011 Nepal census, the total population of the municipality is 21,473 with 4,557 households.
		The total area of the municipality is 158.68 square kilometres (61.27 sq mi).
		The headquarter of the municipality is at Jhangajholi Ratmata.
		The rural municipality was established on March 10, 2017 when Ministry of Federal Affairs and Local Development
		dissolved the existing village development committees and announced the establishment of this new local body.
		Kusheshwar Dumja, Jhangjholi Ratmata, Purano Jhangajholi, Sitalpati and Majhuwa VDCs were merged to form the new rural municipality.
        </p>
        <button type="button" class="btn btn-primary btn-lg" onclick="window.open('about.php');">Read More</button>
      </div>
    </div>
  </div>
</div>

<!-- welcome end -->

<!-- content and rightbar start-->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-primary">
				<div class="panel panel-heading">
					<h2>News and Articles</h2>
				</div>
				
				<div class="panel panel-primary">
					<div class="panel panel-heading">
					<h2>This section for first news</h2>
					</div>
					<div class="panel panel-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
					<center><button type="button" class="btn btn-primary btn-lg" onclick="window.open('news1.php')">Read More</button></center>
				</div>

				<div class="panel panel-primary">
					<div class="panel panel-heading">
					<h2>This section for second news</h2>
					</div>
					<div class="panel panel-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
					<center><button type="button" class="btn btn-primary btn-lg" onclick="window.open('news2.php')">Read More</button></center>
				</div>


				<div class="panel panel-primary">
					<div class="panel panel-heading">
					<h2>This section for third news</h2>
					</div>
					<div class="panel panel-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
					<center><button type="button" class="btn btn-primary btn-lg" onclick="window.open('news3.php')">Read More</button></center>
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

<!-- services to book -->
<div class="container-fluid">
  <div class="text-center">
  <div class="panel panel-primary">
  <div class="panel-heading">
    <h2>व्यय विवरण</h2>
    <h4>For developement, improvement and betterment of the municipality </h4>
    </div>
   </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary text-center">
        <div class="panel-heading">
          <h1>बजेट तथा कार्यक्रम</h1>
        </div>
        <div class="panel-body">
          <p>आ.व ०७९/०८० को बजेट तथा कार्यक्रम <br>
			मिति: 06/24/2022 - 19:41</p>
          <p>आ.व ०७९/०८० नीति तथा कार्यक्रम <br>
			मिति: 06/23/2022 - 17:18</p>
          <p>आ.व ०७८/०७९ को बजेट तथा कार्यक्रम <br>
			मिति: 06/29/2021 - 19:44</p>
        </div>
        <div class="panel-footer">
          <button class="btn btn-danger btn-lg">अन्य</button>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary text-center">
        <div class="panel-heading">
          <h1>योजना तथा परियोजना</h1>
        </div>
        <div class="panel-body">
          <p>सुनकोशी गाउँपालिकाको प्रथम त्रि बर्षिय मध्यकालीन <br>
			खर्च संरचना ( २०७८-०७९-०८०/०८१ )</p>
          <p>सुनकोशी गाउँपालिकाको आवधिक बिकास योजना |<br>
		  (२०७८-०७९- २०८२-०८३ )</p>
          <p>वार्षिक गाउँ विकास योजना। <br>
		  (२००७४ - २०७५)</p>
        </div>
        <div class="panel-footer">
		<button class="btn btn-danger btn-lg">अन्य</button>
        </div>
      </div>
    </div>
   <div class="col-sm-4">
      <div class="panel panel-primary text-center">
        <div class="panel-heading">
          <h1>सार्वजनिक खरिद/बोलपत्र सूचना</h1>
        </div>
        <div class="panel-body">
          <p>invitation for bids 
			मिति: 03/25/2022 - 14:33</p> 
          <p>invitation for bids 
			मिति: 03/22/2022 - 14:36</p>
          <p>invitation for bids 
			मिति: 02/07/2022 - 14:13</p><br>
        </div>
        <div class="panel-footer">
		<button class="btn btn-danger btn-lg">अन्य</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- service end -->

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