<?php 

$username = "root";
$password = "";
$server = "127.0.0.1:3307";
$database = "cms";

$con = new mysqli($server, $username, $password, $database); //or die ("Cannot Connect");

if($con){
	//echo "Connection Successful";
	?>

	<script >//alert('Connection Successful');</script>

	<?php 

}else{
	echo "No Connection";
}

 ?>