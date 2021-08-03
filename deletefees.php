<?php

include 'connect.php';
 
$id = $_GET['id'];

if(mysqli_connect_errno()) { echo "Error: Could not connect to database."; exit; }

//if (!$con) {
  //  die("Connection failed: " . mysqli_connect_error());


// sql to delete a record
$sql = " delete from fees where USN = '$id' "; 
//$sql = " delete from fees where USN = '1BG18CS004' "; 


//echo $sql;
?>
    <script>
      alert("Data Deleted");
    </script>
    <?php
$res2 = mysqli_query($con, $sql); 
//$row = mysqli_fetch_row($res2);
//echo 'Successful';

      ?>
    <script>
      alert("Data Deleted");
    </script>
    <?php

if ($res2) {
    //mysqli_close($con);
    
    ?>
    <script>
      alert("Data Deleted");
    </script>
    <?php
    header('Location: fees.php'); //If book.php is your main page where you list your all records
    exit;
} else {
	?>
    <script>
      alert("Error deleting record");
    </script>
    <?php
   // header('Location: studtable.php');
    
}
?>