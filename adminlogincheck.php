<?php

$username1=$_POST["username"];
$password1=$_POST["password"];

if($username1=="" || $password1=="")

{

  echo "enter details pls";
}

else {

  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "validation";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT id FROM admin WHERE username = '$username1' and password = '$password1'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {

        echo '<script language="javascript">';
        echo 'alert("Welcome")';
        echo '</script>';
        echo '<script>window.location.href = "admin.php";</script>';
      }else {
        echo '<script language="javascript">';
      echo 'alert("invalid username and password")';
      echo '</script>';
      echo '<script>window.location.href = "adminlogin.php";</script>';
      }


}

 ?>
