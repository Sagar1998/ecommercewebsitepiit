<?php

$fname=$_POST['fname'];
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

$sql = "SELECT sku11,sku12,sku13,sku14,sku21,sku22,sku31,sku33,sku34,sku41,sku42,sku51,sku52,sku53,sku61,sku62 FROM sku WHERE fname = '$fname'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count == 1) {

      $item1=$row['sku11'];
      $item2=$row['sku12'];
      $item3=$row['sku13'];
      $item4=$row['sku14'];
      $item5=$row['sku21'];
      $item6=$row['sku22'];
      $item7=$row['sku31'];
      $item8=$row['sku32'];
      $item9=$row['sku33'];
      $item10=$row['sku34'];
      $item11=$row['sku41'];
      $item12=$row['sku42'];
      $item13=$row['sku51'];
      $item14=$row['sku52'];
      $item15=$row['sku53'];
      $item16=$row['sku61'];
      $item17=$row['sku62'];

      $itemf=$item1 + $item2 +$item3 +$item4 +$item5 +$item6 +$item7 +$item7 +$item8 +$item9 +$item10 +$item11 +$item12 +$item13 +$item14 +$item15 +$item16 + $item17;
      $sql2="UPDATE sku SET skutotal = '$itemf' WHERE fname = '$fname'";
      if ($conn->query($sql2) === TRUE) {
        echo '<script language="javascript">';
                echo 'alert("updated successfully")';
                echo '</script>';
                echo '<script>window.location.href = "checkout.html";</script>';

        } else {
          echo "Error updating record: " . $conn->error;
        }

echo '<script>window.location.href = "checkout.html";</script>';




    }else {
      echo '<script language="javascript">';
    echo 'alert("no user found")';
    echo '</script>';
    echo '<script>window.location.href = "mainpage.php";</script>';
    }



 ?>
