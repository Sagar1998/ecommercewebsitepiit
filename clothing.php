<html>
<head>
	<link rel="stylesheet" type="text/css" href="cloth.css">
	<script src="https://kit.fontawesome.com/a458080d9e.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Heebo:500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Text:700&display=swap" rel="stylesheet">
</head>
<script src="cloths/cloth.js"></script>
<body>
<style>

.item1{
  display: block;
  width: 20%;
  height: 50px;
  border: none;
  background: #38ada9;
  color: #fff;
  outline: none;
  position: absolute;
  top: 120%;
  left: 12%;
  transform: translate(-50%,-50%);
  font-size: 30px;
  font-family: 'Roboto', sans-serif;
  border-radius: 20px;

}
.item2{
  display: block;
  width: 20%;
  height: 50px;
  border: none;
  background: #38ada9;
  color: #fff;
  outline: none;
  position: absolute;
  top: 120%;
  left: 39%;
  transform: translate(-50%,-50%);
  font-size: 30px;
  font-family: 'Roboto', sans-serif;
  border-radius: 20px;

}
.item3{
  display: block;
  width: 20%;
  height: 50px;
  border: none;
  background: #38ada9;
  color: #fff;
  outline: none;
  position: absolute;
  top: 120%;
  left: 63%;
  transform: translate(-50%,-50%);
  font-size: 30px;
  font-family: 'Roboto', sans-serif;
  border-radius: 20px;

}
.item4{
  display: block;
  width: 20%;
  height: 50px;
  border: none;
  background: #38ada9;
  color: #fff;
  outline: none;
  position: absolute;
  top: 120%;
  left: 88%;
  transform: translate(-50%,-50%);
  font-size: 30px;
  font-family: 'Roboto', sans-serif;
  border-radius: 20px;

}
.cartvalue1{


  position: absolute;
  top: 50px;
	width: 2%;
  right: 100px;
  float: right;



}
</style>
	<div class="top">
		<a href="mainpage.php"> <img class="logo"  src="logostroke.png"></a>
		<div class="searchbox">
			<input class="searchtxt" type="text" name="" placeholder="Search for products">
			<a class="searchbtn"><i class="fas fa-search"></i></a>
		</div>
			<div class="login">
				<a class="sign" href="test.php"> <h3> Logout </h3> </a>
			</div>
		<a class="cartbtn" href="finalcart.html">
			<i class="fas fa-shopping-cart fa-3x"></i>
		</a>

	</div>

<div class="slideshow-container">

<div class="mySlides fade">

  <img src="sale 1-01.jpg" style="width:100%">

</div>

<div class="mySlides fade">

  <img src="sale 2-01.jpg" style="width:100%">

</div>

<div class="mySlides fade">

  <img src="sale 3-01.jpg" style="width:100%">

</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>
<div class="row1">
	<img class="img1" src="rBVaGFX2ckqAIpnFAAKcUzvvBko836.jpg" style="width: 100%" style="height: 100%">
	<img class="img1"src="04792393_zi_dress_blue.jpg" style="width: 100%" style="height: 100%">
	<img class="img1" src="100-25-cotton-fancy-casual-shirt-for-men-500x500.jpg" style="width: 100%" style="height: 100%">
	<img class="img1" src="d28eacbb-5251-40bc-8e48-231db7bb2af9.jpg" style="width: 100%" style="height: 100%">
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>

	<button class="item1" onclick="return item1();">addtocart</button>
	<button class="item2" onclick="return item2();">addtocart</button>
	<button class="item3" onclick="return item3();">addtocart</button>
	<button class="item4" onclick="return item4();">addtocart</button>

	<input type="text" class="cartvalue1" name="clothtotal" value="1" id="clothtotal" readonly>



</body>
</html>
