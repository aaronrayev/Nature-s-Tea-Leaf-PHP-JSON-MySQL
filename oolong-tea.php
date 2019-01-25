<?php

session_start();
include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `products` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>
<html>
<head>
	<title>Project-3 Products</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/environment-icon-png-7.png">
	<!--Some custom CSS for reference only-->
	<style type="text/css">

        
        /* CCS code for video background */
        body {
          margin: 0;
          padding: 0;
        /*  Background fallback in case of IE8 & down, or in case video doens't load, such as with slower connections  */
          background: #fff;
          background-attachment: fixed;
          background-size: cover;
        }

        /* The only rule that matters */
        #video-background {
        /*  making the video fullscreen  */
          position: fixed;
          left: 0;
          bottom: 0;
          min-width: 100%; 
          min-height: 100%;
          width: auto; 
          height: auto;
          z-index: -100;
        }

        /* These just style the content */
        article {
        /*  just a fancy border  */
          position: absolute;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          border: 10px solid rgba(255, 255, 255, 0.5);
          margin: 10px;
        }

        h1 {
          position: absolute;
          top: 60%;
          width: 100%;
          font-size: 36px;
          letter-spacing: 3px;
          color: #fff;
          font-family: Oswald, sans-serif;
          text-align: center;
        }

        h1 span {
          font-family: sans-serif;
          letter-spacing: 0;
          font-weight: 300;
          font-size: 16px;
          line-height: 24px;
        }

        h1 span a {
          color: #fff;
        }
	</style>
</head>

<body>
<?php require_once('assets/partials/nav.php'); ?>
    <div class="container" align="center">
    <div class="row">
        

<h2>OOLONG TEA PRODUCTS</h2>   

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div" align="left">
<a href="cart.php"><img src="cart-icon.png" /> Cart<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}
$result = mysqli_query($con,"SELECT * FROM `oolong_tea`");
while($row = mysqli_fetch_assoc($result)){
		echo "<div class='col-sm-4 cola'>
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['code']." />
			  <div class='image'><img src='".$row['image']."' /></div>
			  <div class='name'>".$row['name']."</div>
		   	  <div class='price'>$".$row['price']."</div>
			  <button type='submit' class='buy' style='border-bottom-right-radius: 40px; border-bottom-left-radius: 40px; color: darkcyan;'>Buy Now</button>
			  </form>
		   	  </div>";
        }
mysqli_close($con);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

<br /><br />
<!--<a href="https://www.allphptricks.com/simple-shopping-cart-using-php-and-mysql/"><strong>Tutorial Link</strong></a> <br /><br />
For More Web Development Tutorials Visit: <a href="https://www.allphptricks.com/"><strong>AllPHPTricks.com</strong></a>-->
</div>
    </div>
    
    <?php require_once('assets/partials/footer.php'); ?>
    
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>