<?php session_start(); 

if( !( isset($_SESSION['uid'] ) ) ){
    header('location:login.php');
}

?>
<!doctype html>
<html>
<head>
	<title>Project-3 Add New Products</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/environment-icon-png-7.png">
	<!--Some custom CSS for reference only-->
	<style type="text/css">
		/*.cola, .colb, .colc{
			border: 1px #000 solid;
		}*/

		.cola {
			background: #fff;
		}

		.colb {
			background: #fff;
		}

		.colc {
			background: #fff;
		}

		.carousel-inner>.item>img {
			margin: 0px auto;
		}

		.cola p, .colb p, .colc p{
			color:#333;
		}
		
		.btn-primary{
			background-color: #f00;
		}

		@media screen and (max-width: 900px) {
			.cola p, .colb p, .colc p{
				color: #333;
			}
		}
        
        
        @media (max-width:768px) {
        img#optionalstuff {
            display: none;
            }
        }
        /* mouse over enlarge */
        h1.head {
        text-align: center;
        font-size: 26px;
        }
                .img_section figure img {
                    transform: scale(1);
                    transition: .3s ease-in-out;
                    height: 300;
                    width: 200;  			
                }
                .img_section figure:hover img {
                    transform: scale(1.6);
                }
                h2.zoom {
            padding-bottom: 33px;
            padding-left: 25px;
        }
        img.animated-gif{
            width: 150px;
            height: auto;
        }
        a:link    {
          /* Applies to all unvisited links */
          text-decoration:  none;
          color: black;
          } 
       /* a:hover {
            font-style: italic;
        }*/
   
        /*yesterday's code*/
        .fnf{
            background: #ccc;
            border:5px solid #000;
        }
        
        .teaPackage+ul{
            display:block;
        }
        ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
        

	</style>
</head>
<body>
    
    
	<?php require_once('assets/partials/nav.php'); ?>
	<div class="container-fluid" style="width:95%;">
    <div class="row">
        <?php
        if($_SESSION['email']!="aaronrayev@gmail.com")
            {
		?>
            <script>
		window.location.href="index.php";
	    </script>
		<?php
		//header('location:index.php');
            }
        ?>
    <content>
        <h1>&nbsp;&nbsp;Add New Product</h1>
        <a href="add-black-tea.php">Add New Black Tea</a><br><br>
        <a href="add-green-tea.php">Add New Green Tea</a><br><br>
        <a href="add-white-tea.php">Add New White Tea</a><br><br>
        <a href="add-herbal-tea.php">Add New Herbal Tea</a><br><br>
        <a href="add-oolong-tea.php">Add New Oolong Tea</a><br><br>
        <a href="add-puerh-tea.php">Add New Pu-erh Tea</a><br><br>
        <a href="add-ice-tea.php">Add New Iced Tea</a><br><br>
        <a href="add-weekly-deals.php">Add Weekly Deals</a><br><br>
	
	
    </content>
	<?php require_once('assets/partials/footer.php'); ?>
        
</div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>    
</body>
</html>
