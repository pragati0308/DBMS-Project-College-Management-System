<?php 
session_start();
if($_SESSION['status'] != "Active")
{
  header("location: studlogin.php");
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Exams</title>
<link href="style.css" rel="stylesheet">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">B.N.M. Institute of Technology</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="studentindex.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="loggedstud.php">Profile</a>
        </li>
        <li class="nav-item">
<a class="nav-link" href="facultiespstud.php">Faculty</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="loggedattend.php">Attendance</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="examspstud.php">Exams</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="loggedfees.php">Fees</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<div>
	<h1 class="text-center">Exam Details</h1> 
</div>
<section>
<table class="table table-dark table-bordered table-sm text-center" style="margin-right: auto margin-left: auto">
  <thead>
    <tr>
      <th scope="col">Subject Code</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <?php
  include('connection.php');
$sql = "SELECT * FROM exams";
$result = $conn->query($sql);

if (!empty($result) && $result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<tr><td>'  . $row["Subject_Code"]. "</td><td> " . $row["Subject"]. "</td><td> " .$row["Date"]. "</td></tr>" ;
  }
} else {
  echo "0 results";
}
?>
</table>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
<footer style="margin-top: auto">
  <p class="p-3 bg-dark text-white text-center">@B.N.M. Institute of Technology</p>
</footer>
</html>
