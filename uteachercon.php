<?php
include 'connect.php';
if(mysqli_connect_errno()) { echo "Error: Could not connect to database."; exit; }
if(isset($_POST['submit'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$dept = $_POST['dept'];
	$design = $_POST['design'];
		$insquery = " insert into teacher(ID,Name,Department,Designation) values('$id','$name','$dept','$design')";
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