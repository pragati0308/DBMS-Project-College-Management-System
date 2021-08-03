<?php 
session_start();
if($_SESSION['status'] != "Active")
{
  header("location: studlogin.php");
}

?>
<!DOCTYPE HTML>
<HTML>
<head>
  <link href="style.css" rel="stylesheet">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: auto auto;
}

.col-25 {
  -ms-flex: auto; /* IE10 */
  flex: auto;
}

.col-50 {
  -ms-flex: auto; /* IE10 */
  flex: auto;
}

.col-75 {
  -ms-flex: auto; /* IE10 */
  flex: auto;
}

.col-25,
.col-50,
.col-75 {
  padding: auto auto;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
  text-align: center;
  margin: auto;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<BODY>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">B.N.M. Institute of Technology</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profiled.php">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="attendance.php">Attendance</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="exams.php">Exams</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  aria-current="page" href="fees.php">Fees</a>
        </li>
        <a class="nav-link" href="faculties.php">Faculties</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="form-popup" id="myForm">
  <form class="form-container">
   <div class="row">
          <div class="col-50">
            <h3>Debit Card Details</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" ><br>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" ><br>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" ><br>
            <label for="ccnum">Debit card number</label>
            <input type="text" id="ccnum" name="cardnumber" ><br>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" ><br>

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" >
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" >
              </div>
            </div>
          </div>
      </form>
    </div>
  </div>

    <div class="col-25">
    <div class="container">
      <h4>Fees Details
        <span class="price" style="color:black">
        </span>
      </h4>
      <?php
  include('connection.php');
  $usn = $_SESSION['user'];
$sql = "SELECT * FROM fees where USN='$usn'";
//$sql = "SELECT * FROM fees where USN='1BG18CS001'";
$result = $conn->query($sql);
$total=0;
if (!empty($result) && $result->num_rows > 0 ) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
    <?php
        if($row["Status"]=="Not Paid")
        {
    echo '<tr><td>'  . $row["Fees_Description"]. "</td><td> " . $row["Amount"]. '</td><br></tr>';
    $total=$total+$row["Amount"];
  }
}
} else {
  echo "0 results";
}
?>

<h4> Total <?php
echo $total;
?>
</h4>
<button type="submit" onclick ="alert('Payment Successful');" >Continue to Payment</button><br>
<?php
  include('connection.php');
$sql = "SELECT * FROM fees";
$result = $conn->query($sql);
if (!empty($result) && $result->num_rows > 0 ) {
  // output data of each row
    ?>
    <?php

    $usn = $_SESSION['user'];
        $update="UPDATE fees SET Status='Paid' where Status='Not Paid' and USN='$usn'";
        $res=$conn->query($update);
  }
  // output data of each row

?>

<a href="loggedfees.php">Go Back</a>
</div>

  </form>
</div>
</form>
</div>
</script>
</BODY>
<footer style="margin-top: 100px">
  <p class="p-3 bg-dark text-white text-center">@B.N.M. Institute of Technology</p>
</footer>
</HTML>
