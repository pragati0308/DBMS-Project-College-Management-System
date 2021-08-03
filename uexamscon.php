<?php
include 'connect.php';
if(mysqli_connect_errno()) { echo "Error: Could not connect to database."; exit; }
if(isset($_POST['submit'])){
	$subcode = $_POST['subcode'];
	$sub = $_POST['course'];
	$date = $_POST['date'];
	$insquery = " insert into exams(Subject_Code,Subject,Date) values('$subcode','$sub','$date')";
	 echo $insquery;
   $res1 = mysqli_query($con, $insquery);
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