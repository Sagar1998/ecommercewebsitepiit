<?php
$fname=$_POST['fname'];
$email=$_POST['email'];
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

$sql = "SELECT * FROM checkout where fname='$fname' and email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

$check1=$row["orderid"];
$check2=$row["fname"];
$check3=$row["email"];
$check4=$row["itemdesc"];
echo "<link rel='stylesheet' type='text/css' href='ordercheck.css'>";
echo "<center>";

echo"<h1>";echo "<a href=\"ordercheck1.php?orderid=".$check1."&fname=".$check2."&email=".$check3."&itemdesc=".$check4."\">cancel order </a> .";
 echo " .orderid: " . $row["orderid"]. "<br> - Name: " . $row["fname"].  " <br>  email:" . $row["email"]. "<br> orderdesc: " . $row["itemdesc"]. "<br>";
  echo"</h1>";

echo "<br><br><br>";

  }
} else {
    echo "0 results";echo "</center>";
}
$conn->close();
?>
