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
	<title>	</title>
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
        <li class="nav-item active">
          <a class="nav-link" href="uteacher.php">Faculty<span class="sr-only">(current)</a>
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

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Add Teacher Profile 
    </h2> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a href="facultiesp.php">View Teachers</a>
  </div>
  <div class="w-50 m-auto">
    <form action="uteacher.php" method="post">
      <div class="form-group">
        <label>ID</label>
        <input type="text" name="id" autocomplete="off" class="form-control">
      </div>
      
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Department</label><br>
        <input type="radio" id="c1" name="dept" value="CSE">
  <label for="c1">CSE</label><br>
  <input type="radio" id="c2" name="dept" value="ISE">
  <label for="c2">ISE</label><br>
  <input type="radio" id="c3" name="dept" value="ECE">
  <label for="c3">ECE</label><br>
  <input type="radio" id="c4" name="dept" value="ME">
  <label for="c4">ME</label><br>
  <input type="radio" id="c5" name="dept" value="EEE">
  <label for="c5">EEE</label><br>
  <input type="radio" id="c6" name="dept" value="Mathematics">
  <label for="c5">Mathematics</label><br>
  <input type="radio" id="c7" name="dept" value="Physics">
  <label for="c5">Physics</label><br>
        
      </div>
      <div class="form-group">
        <label>Designation</label><br>
        <input type="radio" id="c1" name="design" value="HOD">
        <label for="c1">HOD</label><br>
        <input type="radio" id="c2" name="design" value="Prof">
        <label for="c2">Prof</label><br>
          <input type="radio" id="c3" name="design" value="Associate Prof">
          <label for="c3">Associate Prof</label><br>
          <input type="radio" id="c4" name="design" value="Asst. Prof">
        <label for="c4">Asst. Prof</label><br>
        
      </div>
      
     
      <input type="submit" class="btnSubmit" name="submit" value="Submit"/>
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
     include 'uteachercon.php';  
     function dbInsert(){
      alert ("testing");
     }
     ?>

</body>
</html>