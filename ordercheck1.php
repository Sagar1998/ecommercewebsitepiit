<?php
$orderid=$_GET['orderid'];
$fname=$_GET['fname'];
$email=$_GET['email'];
$itemdesc=$_GET['itemdesc'];
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
$sql="insert into cancelorders(orderid,fname,email,itemdesc) values('$orderid','$fname','$email','$itemdesc')";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }

  $sql1="DELETE FROM checkout WHERE orderid='$orderid'";
  if ($conn->query($sql1) === TRUE) {
      echo "Record updated successfully";
      echo '<script language="javascript">';
echo 'alert("Order cancelled")';
echo '</script>';
echo '<script>window.location.href = "mainpage.php";</script>';
    } else {
      echo "Error updating record: " . $conn->error;
    }
 ?>
