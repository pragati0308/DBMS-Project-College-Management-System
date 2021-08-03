<?php 
include 'connect.php';
if(mysqli_connect_errno()) { echo "Error: Could not connect to database."; exit; }
if(isset($_POST['Submit'])){
  $usn = $_POST['usn'];
  $feesdesc = $_POST['desc'];
  $amount = $_POST['amt'];
  $due = $_POST['due'];
  $status = $_POST['status'];
  $insertquery1 = "insert into fees(USN,Fees_Description,Amount,Due_date,Status) VALUES('$usn','$feesdesc','$amount','$due','$status')";
    echo $insertquery1;
   $res1 = mysqli_query($con, $insertquery1);
   echo "Succesful";
   if($res1){
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