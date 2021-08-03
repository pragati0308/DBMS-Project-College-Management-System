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
        <li class="nav-item active">
          <a class="nav-link" href="profile.php">Profile<span class="sr-only">(current)</a>
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


<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Add Student Profile 
    </h2> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a href="studtable.php">View All</a>
  </div>
  <div class="w-50 m-auto">
  	<form action="profile.php" method="post">
  		<div class="form-group">
        
  			<label>USN</label> 
  			<input type="text" name="usn" autocomplete="off" class="form-control">
  		</div>
  		<div class="form-group">
  			<label>Password</label>
  			<input type="text" name="password" autocomplete="off" class="form-control">
  		</div>
  		<div class="form-group">
  			<label>Name</label>
  			<input type="text" name="user" autocomplete="off" class="form-control">
  		</div>
  		<div class="form-group">
  			<label>Branch</label>
  			<input type="text" name="branch" autocomplete="off" class="form-control">
  		</div>
  		<div class="form-group">
  			<label>Semester</label>
  			<input type="text" name="sem" autocomplete="off" class="form-control">
  		</div>
  		<div class="form-group">
  			<label>Mobile Number</label>
  			<input type="text" name="mobile" autocomplete="off" class="form-control">
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
</body>
</html>


<?php
include 'connect.php';
  $str = $_POST['password'];
  $pass = md5($str);
if(isset($_POST['submit'])){
	$usn = $_POST['usn'];
	$password = $pass;
	$name = $_POST['user'];
	$branch = $_POST['branch'];
	$semester = $_POST['sem'];
	$mobile = $_POST['mobile'];
	$insertquery = " insert into student(USN,password,Name,Branch,Semester,Mobile) values('$usn','$password','$name','$branch','$semester','$mobile')";
	$res = mysqli_query($con, $insertquery);
	if($res){
		?>
		<script>
			alert("Data Inserted");
		</script>
		<?php
	}else{
		?>
		<script>
			alert("Data Not Inserted ");
		</script>
		<?php
	}
}
?>
