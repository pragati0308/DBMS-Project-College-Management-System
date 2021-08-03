<?php 
session_start();
if($_SESSION['status'] != "Active")
{
  header("location: studlogin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style >
        .col-xs-6 col-sm-6 col-md-6{
            text-align: center;
        }
    </style>
</head>
<body>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address align="center">
                        <strong>B.N.M. Institute of Technology</strong>
                        <br>
                        12th Main Road, 27th Cross
                        <br>
                        Banashankari 2nd Stage 
                        <br>
                        Bengaluru Karnataka 560070
                        <br>
                        <abbr title="Phone">P:</abbr> (080)26711781
                    </address>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                </span>
                <table class="table table-hover" >
                    <thead>
                        <tr>
                            <th>Fees Description</th>
                            <th>Amount</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php
  include('connection.php');
  $usn = $_SESSION['user'];
$sql = "SELECT * FROM fees where USN='$usn'";
$result = $conn->query($sql);
$total=0;
if (!empty($result) && $result->num_rows > 0 ) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
    <?php
    if($row["Status"]=='Paid'){
        $total=$total+$row["Amount"];
            echo '<tr><td>'  . $row["Fees_Description"]. "</td><td> " . $row["Amount"]. '</td><br></tr>';
  }
}
} else {
  echo "0 results";
}
?>

            </div>

        </div>
    </div>
</tbody>
</table>
</div>
</div>
</div>
<div style="text-align: center; font-size: 25">Total <?php
echo $total;
?>
</div>
<a href="loggedfees.php">Back</a>
</body>
</html>
