


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<style>
body {
  background-image: url('pics/bg.jpg') ;
}
</style>

<body>


<div class="container vh-100">
  <div class="row justify-content-center  h-100">
    <div class="card w-25 my-auto shadow">
      <div class="card-header text-center"><h2>Student Login</h2>
      </div>
      <div class="card-body">
        <form action="studlogin.php" method="post">
          <div class="form-input">
            <label for="username">Username</label>
            <input type="text" id="username" class="form-control" name="usn" required/>
          
      </div>
      <div class="form-input">
            <label for="password">Password</label>
            <input type="password" id="password" class="form-control" name="password" required/>
    </div>
    <input type="submit" class="btn btn-primary w-100" value="Login" name="login">
  </form> &emsp;&emsp;&emsp;&emsp;&emsp; <a href="adminform.php">Admin</a>
  </div>
  <div class="card-footer text-right">
    <small>&copy; B.N.M. Institute of Technology</small>
  </div>
</div>
</div>
</div>

</body>
</html>

<?php 
session_start();

            include 'connect.php';


            if (isset($_POST['login']) && !empty($_POST['usn']) 
               && !empty($_POST['password'])) {

                $_SESSION['user'] = $_POST['usn'];
                $usn = $_SESSION['user'];
                $str = $_POST['password'];
                $pass = md5($str);
                $sel = " select USN, password from student where USN='$usn' and password='$pass' ";     
                $res = mysqli_query($con, $sel) or die('SQL Error: ' .mysqli_error($con));
                $row = mysqli_fetch_array($res);
                if(($row['USN'] == $usn) && ($row['password'] == $pass))
                {
                  $_SESSION['status'] = "Active";
                  header("location: studentindex.php");
                }else{
                  $msg = "Your Username or Password is Invalid";
                  ?>
                <script>
                alert("Invalid Credentials !");
                </script>
                <?php
                  //echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
                  header("url=studlogin.php");
                }
                mysqli_close($con);
              }
                ?>