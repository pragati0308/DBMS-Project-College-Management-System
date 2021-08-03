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
  <title> </title>
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
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
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
        <li class="nav-item active">
          <a class="nav-link" href="uexams.php">Exams<span class="sr-only">(current)</a>
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

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Update Exam Details 
    </h2> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a href="examsp.php">View Schedule</a>
  </div>
  <div class="w-50 m-auto">
    <form action="uexams.php" method="post">

    	<div class="form-group">
        	<label>Subject Code</label>
        	<input type="text" name="subcode" autocomplete="off" class="form-control">
      	</div>
      	<div class="form-group">
          <p>Subject</p>
  <input type="radio" id="c1" name="course" value="Calculus and Linear Algebra">
  <label for="c1">Calculus and Linear Algebra</label><br>
  <input type="radio" id="c2" name="course" value="Physics">
  <label for="c2">Physics</label><br>
  <input type="radio" id="c3" name="course" value="Electrical">
  <label for="c3">Electrical</label><br>
  <input type="radio" id="c4" name="course" value="Civil">
  <label for="c4">Civil</label><br>
  <input type="radio" id="c5" name="course" value="CAED">
  <label for="c5">CAED</label><br>
  <input type="radio" id="c6" name="course" value="Physics Lab">
  <label for="c6">Physics Lab</label><br>
  <input type="radio" id="c7" name="course" value="Electrical Lab">
  <label for="c7">Electrical Lab</label>
        	
      	</div>
      	<div class="form-group">
        	<label>Date</label>
        	<input type="date" name="date" autocomplete="off" class="form-control">
      	</div>
      	<input type="submit" class="btnSubmit" name="submit" value = "Submit">
      	</form>
  </div>
</section>

<footer>
  <p class="p-3 bg-dark text-white text-center"> © B.N.M. Institute of Technology
    
  </p>
</footer>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 



     <?php         
     include 'uexamscon.php';  
     function dbInsert(){
      alert ("testing");
     }
     ?>

</body>
</html>