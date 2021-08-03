<?php 
include 'connect.php';
if(mysqli_connect_errno()) { echo "Error: Could not connect to database."; exit; }
if(isset($_POST['submit'])){
  $usn = $_POST['usn'];
  $course = $_POST['course'];
  $totalclasses = $_POST['total'];
  $attended = $_POST['attended'];
  $per = ($attended/$totalclasses)*100;
  $insertquery = " insert into uattendance(USN,Course_Name, Total_Classes, Classes_Attended,Percentage) values('$usn','$course','$totalclasses','$attended','$per')";
    echo $insertquery;
   $res1 = mysqli_query($con, $insertquery);
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