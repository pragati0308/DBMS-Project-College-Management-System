<?php 
session_start();
if($_SESSION['status'] != "Active")
{
  header("location: adminform.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
 
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">B.N.M. Institute of Technology</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="uteacher.php">Faculty</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="uattendance.php">Attendance</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="uexams.php">Exams</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ufees.php">Fees</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="adminlogout.php">Logout</a>
        </li>
       
      </ul>
      
    </div>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="pics/logo.png" alt="#" width="2000" height="750">
    </div>
    <div class="carousel-item">
      <img src="pics/mb.jpg" alt="#" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="pics/apj.jpg" alt="#" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5"> 
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="pics/nb.jpg" class="img-fluid">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h2>
					BNM Institute of Technology extends a hearty welcome to you.
				</h2>
				<p>
					In these days of totally urbanized atmosphere, the BNM Campus is like a breath of fresh air set amidst landscaped gardens and with a highly surcharged interactive atmosphere between students, faculties and mentors.
				</p>
				
				<p>
					Vision

» To be one of the premier Institutes of Engineering and Management education in the country.</p>

<p>Mission

» To provide Engineering and Management education that meets the needs of human resources in the country.

» To develop leadership qualities, team spirit and concern for environment in students.</p>

<p>Objectives

» To achieve educational goals as stated in the vision through the mission statements which depicts the distinctive characteristics of the Institution.

» To make teaching-learning process an enjoyable pursuit for the students and teachers.
				</p>
		</div>	
	</div>
</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Recruiters  
    </h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="pics/ibm.png" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="pics/infosys.png" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="pics/byjus.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="pics/wipro.png" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="pics/samsung.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="pics/bosch.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="pics/adobe.jpg" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="pics/amazon.png" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="pics/cognizant.jpg" class="img-fluid pb-4">
      </div>
      
    </div>
    
  </div>


</section>

<footer>
  <p class="p-3 bg-dark text-white text-center"> © B.N.M. Institute of Technology
    
  </p>
</footer>


	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>