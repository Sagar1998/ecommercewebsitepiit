<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Crete+Round&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a458080d9e.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto:700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8">


	</script>
	<script>
	function check(){
	var username=document.getElementById('username').value;
	var password=document.getElementById('password').value;
	if(username=="" || password==""){
		alert('pls enter correct username and password');


	}
	else {
		alert('welcome');
		window.location.href = "mainpage.html";

	}
}
	</script>
	<title>
	</title>
</head>
<body>
  <style>

.logbtn{
  display: block;
  width: 60%;
  height: 50px;
  border: none;
  background: #38ada9;
  color: #fff;
  outline: none;
  position: absolute;
  top: 70%;
  left: 50%;
  transform: translate(-50%,-50%);
  font-size: 25px;
  font-family: 'Roboto', sans-serif;
  border-radius: 20px;

}

.logbtn:hover{
  background-position: right;

}
.bottom-text{

  text-align: center;
  font-size: 20px;
  position: absolute;
  top: 80%;
  left: 50%;
  transform: translate(-50%,-50%);
  font-family: 'Source Sans Pro', sans-serif;
  justify-content: center;
}

.bottom-text1{

  text-align: center;
  font-size: 20px;
  position: absolute;
  top: 90%;
  left: 50%;
  transform: translate(-50%,-50%);
  font-family: 'Source Sans Pro', sans-serif;
  justify-content: center;
}
.logo{
  width: 400px;
  height: auto;
  align-self: center;
  position: absolute;
  top: 25%;
  left: 50%;
  transform: translate(-50%,-50%);
}
</style>

<h1>Welcome,</h1>
<h2>Click the button to start login.</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn" class="button"><a  class="user"><i class="fas fa-user fa-9x"></i></a></button>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="loginscreen">
    	<form class="login-form" name="form2" action="logincheck.php" method="post">
    		<img class="logo" src="logo.png">

    		<div class="txtb">
    			<input type="text" name="fname">
    			<span data-placeholder="Username"></span>
    		</div>

    		<div class="txta">
    			<input type="password" name="password">
    			<span data-placeholder="Password"></span>
    		</div>

    		<input type="submit" name="" class="logbtn" value="Login">

    		<div class="bottom-text">
    			Don't have account? <a href="signup.php"> Sign up </a>
    		</div>

				<div class="bottom-text1">
    			Administrator?? <a href="adminlogin.php"> Login </a>
    		</div>

    	</form>





    </div>

  </div>

</div>

<script type="text/javascript">
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "block";
  }
}
$(".txta input").on("focus",function(){
	$(this).addClass("focus")});
    		$(".txta input").on("blur",function(){if($(this).val()=="") $(this).removeClass("focus")});

 $(".txtb input").on("focus",function(){
	$(this).addClass("focus")});
    		$(".txtb input").on("blur",function(){if($(this).val()=="") $(this).removeClass("focus")});


</script>




</body>
</html>
