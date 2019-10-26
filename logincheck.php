<?php

$fname=$_POST["fname"];
$pass=$_POST["password"];

if($fname=="" || $pass=="")
{
  echo '<script language="javascript">';
echo 'alert("enter all the details")';
echo '</script>';
echo '<script>window.location.href = "test.php";</script>';
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

  $sql = "SELECT id FROM temp1 WHERE fname = '$fname' and password = '$pass'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {

        $id=$row['id'];

       echo '<script language="javascript">';
        echo 'alert("welcome echo $fname;")';
        echo '</script>';
        echo '<script>window.location.href = "mainpage.php";</script>';


      }else {
        echo '<script language="javascript">';
      echo 'alert("invalid username and password")';
      echo '</script>';
      echo '<script>window.location.href = "test.php";</script>';
      }


}



 ?>
