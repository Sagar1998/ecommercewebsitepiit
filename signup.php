<html lang="en" dir="ltr">
  <head>
    <title></title>
  </head>
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
    top: 90%;
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
    top:100%;
    left: 50%;
    transform: translate(-50%,-50%);
    font-family: 'Source Sans Pro', sans-serif;
    justify-content: center;
  }

  .bottom-text1{

    text-align: center;
    font-size: 20px;
    position: absolute;
    top:100%;
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
    top: 20%;
    left: 50%;
    transform: translate(-50%,-50%);
  }
  </style>

  <h1>Welcome,</h1>
  <h2>Click the button to start signup.</h2>

  <button id="myBtn" class="button"><a  class="user"><i class="fas fa-user fa-9x"></i></a></button>
  <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <div class="loginscreen">
      	<form class="login-form" id="signUpForm" action="signupcheck.php" method="post">
          <img class="logo" src="logo.png">

      		<div class="txtb">
      			<input type="text" name="fname">
      			<span data-placeholder="Enter your name"></span>
      		</div>

      		<div class="txta">
      			<input type="password" name="password" placeholder="min 8 characters, 1 speacial and 1 num">
      			<span data-placeholder="Password"></span>
      		</div>

          <div class="txtc">
      			<input type="password" name="password1">
      			<span data-placeholder="confirm your password"></span>
      		</div>

          <div class="txtd">
      			<input type="text" name="email">
      			<span data-placeholder="enter email"></span>
      		</div>
          <div class="txte">

            <input type="text" name="phno">
            <span data-placeholder="enter phno"></span>


      		</div>


      		<input type="submit" class="logbtn" value="Submit">




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

          $(".txtc input").on("focus",function(){
         	$(this).addClass("focus")});
             		$(".txtc input").on("blur",function(){if($(this).val()=="") $(this).removeClass("focus")});

                $(".txtd input").on("focus",function(){
                $(this).addClass("focus")});
                      $(".txtd input").on("blur",function(){if($(this).val()=="") $(this).removeClass("focus")});

                      $(".txte input").on("focus",function(){
                      $(this).addClass("focus")});
                            $(".txte input").on("blur",function(){if($(this).val()=="") $(this).removeClass("focus")});




  </script>



  </body>
</html>
