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
<title>Fees Details</title>
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
          <a class="nav-link "  href="loggedstud.php">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="facultiespstud.php">Faculty</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="loggedattend.php">Attendance</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="examspstud.php">Exams</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="loggedfees.php">Fees</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        

      </ul>
    </div>
  </div>
</nav>

<?php 
include 'connect.php';
$usn = $_SESSION['user'];
$usn = mysqli_real_escape_string($con, $usn);
$query = " SELECT * from fees where USN='$usn' ";
$res = mysqli_query($con, $query) or die('SQL Error: ' .mysqli_error($con));
$row = mysqli_fetch_array($res);
?>

<section class="my-5">
  <div class="py-5">
    <h1 class="text-center">Fees
    </h1> 
  </div>
  <div class="w-50 m-auto">
    <form action="profile.php" method="post">
      <div class="form-group">

<form action="/action_page.php">
  <label for="fname">USN</label><br>
  <input type="text" id="fname" name="usn" value="<?php echo "$row[1]"; ?>" disabled><br>
  <label for="lname">Fees Description</label><br>
  <input type="text" id="lname" name="name" value="<?php echo "$row[2]"; ?>" disabled><br><br>
  <label for="lname">Amount</label><br>
  <input type="number" id="lname" name="branch" value="<?php echo "$row[3]"; ?>" disabled><br><br>
  <label for="lname">Due Date</label><br>
  <input type="date" id="lname" name="sem" value="<?php echo "$row[4]"; ?>" disabled><br><br>
  <label for="lname">Status</label><br>
  <input type="text" id="lname" name="mob" value="<?php echo "$row[5]"; ?>" disabled><br><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a href="popuppayment.php">Pay Now</a>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a class="pay" href="receipt.php" style="margin-top: 10px ">Print Receipt</button><td>
</form>
</div> 
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
