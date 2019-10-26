<?php
    $fname=$_POST["fname"];
    $pass=$_POST["password"];
    $pass1=$_POST["password1"];
    $email=$_POST["email"];
    $phno=$_POST["phno"];
    if($fname=="" || $pass="" || $pass1=="" || $email=="" || $phno=="")
    {
      echo '<script language="javascript">';
echo 'alert("enter all the details")';
echo '</script>';
echo '<script>window.location.href = "signup.php";</script>';

    }
    else if ($pass !=  $pass) {

      echo '<script language="javascript">';
echo 'alert("pls check your password")';
echo '</script>';
echo '<script>window.location.href = "signup.php";</script>';

    }

  else if( strlen($pass1 ) < 8 ) {
  $error .= "Password too short!";

  echo $error;
  echo '<script>window.location.href = "signup.php";</script>';

  }
  else if( strlen($pass1 ) > 20 ) {
  $error .= "Password too long!
  ";
  echo $error;
  echo '<script>window.location.href = "signup.php";</script>';

  }
  else if( strlen($pass1 ) < 8 ) {
  $error .= "Password too short!
  ";
  echo $error;
  echo '<script>window.location.href = "signup.php";</script>';

  }
  else if( !preg_match("#[0-9]+#", $pass1 ) ) {
  $error .= "Password must include at least one number!
  ";
  echo $error;
  }
  else if( !preg_match("#[a-z]+#", $pass1 ) ) {
  $error .= "Password must include at least one letter!
  ";
  echo $error;
  echo '<script>window.location.href = "signup.php";</script>';

  }
  else if( !preg_match("#[A-Z]+#", $pass1 ) ) {
  $error .= "Password must include at least one CAPS!
  ";
  echo $error;
  echo '<script>window.location.href = "signup.php";</script>';

  }
  else if( !preg_match("#\W+#", $pass1 ) ) {
  $error .= "Password must include at least one symbol!
  ";
  echo $error;
  echo '<script>window.location.href = "signup.php";</script>';

}
else if( strlen($phno ) < 10 ) {
$error .= "invalid phno";
echo $error;
echo '<script>window.location.href = "signup.php";</script>';

}
else if( strlen($phno ) > 10 ) {
$error .= "invalid phno";
echo $error;
echo '<script>window.location.href = "signup.php";</script>';

}
    else if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {

      echo '<script language="javascript">';
echo 'alert("pls enter correct username")';
echo '</script>';
echo '<script>window.location.href = "signup.php";</script>';

    }

    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {


      echo '<script language="javascript">';
echo 'alert("enter valid emai")';
echo '</script>';
echo '<script>window.location.href = "signup.php";</script>';

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
      $sql="insert into temp1 (fname,password,email,phno) values ('$fname','$pass1','$email','$phno')";
      if ($conn->query($sql) === TRUE) {
          echo "Record updated successfully";
        } else {
          echo "Error updating record: " . $conn->error;
        }

        $sql="insert into sku (fname,email,sku11,sku12,sku13,sku14,sku21,sku22,sku31,sku32,sku33,sku34,sku41,sku42,sku51,sku52,sku53,sku61,sku62,skutotal) values ('$fname','$email','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0')";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . $conn->error;
          }
  echo '<script language="javascript">';
          echo 'alert("welcome")';
          echo '</script>';


          echo '<script>window.location.href = "mainpage.php";</script>';




    }
     ?>
