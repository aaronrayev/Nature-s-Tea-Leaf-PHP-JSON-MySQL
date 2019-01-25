<?php session_start(); 



?>
<!DOCTYPE html>
<html>

<head>
	<title>Project-3 Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/environment-icon-png-7.png">
    <script src="js/jquery.min.js"></script>
	<script src="js/ajax.js"></script>
    <script src="js/parallax.min.js"></script>
    
	<style>
		*{
			font-family: sans-serif;
			box-sizing: border-box;
		}

		#profile{
			margin: 0px auto;
			text-align: center;
		}

		.person{
			width:400px;
			padding:5px 20px 20px 20px;
			display: inline-block;
			text-align: left;
			vertical-align: top;
			background-color: #000;
			color:#fff;
			border:1px #333 solid;
			border-radius:5px;
			margin:10px;
			min-height:400px;
		}

		.person .profileImage{
			text-align: center;
		}

		.person img{
			width: 200px;
			border-radius:50%;
			border:2px #fff solid;
		}

		.person h5{
			margin:10px 0px 0px 0px;
		}

		.person h5+p{
			margin:0px;
		}
	
    
	<!--Some custom CSS for reference only-->
	
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
        
        
        @media (max-width:968px) {
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
<div>
<?php require_once('assets/partials/nav.php'); ?>

<content style="background-image: url(img/2cfb93e8bec8edf4525b8b7513b230ca--seafoam-bathroom-bathroom-colours.jpg)">
	<!--carousel-->
	<div class="fluid-container">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<!-- wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<!--slide 1-->
				<div class="item active">
					<img src="img/natures-tea-leaf-slide1.jpg" width="100%">
					<div class="carousel-caption">
						<!--<p>Luthur</p>-->
					</div>
				</div>
				<!--slide 2-->
				<div class="item">
					<img src="img/natures-tea-leaf-slide2.jpg" width="100%">
					<div class="carousel-caption">
						<!--<p>Sherlock</p>-->
					</div>
				</div>
				<!--slide 3-->
				<div class="item">
					<img src="img/natures-tea-leaf-slide3.jpg" width="100%">
					<div class="carousel-caption">
						<!--<p>Penny Dreadful</p>-->
					</div>
				</div>
			</div>
			<!-- controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

<!--<div id="profile">
	<h2 class="text-uppercase">Profiles</h2>
</div>-->

    
    <div class="container">
        <h2 class="text-uppercase" align="center">Our Recommendations And Best Sellers</h2><br>
        <div class="mobile visible-xs visible-sm"><h6 align="center">tap product images to enlarge</h6></div>
        <div class="desktop hidden-xs hidden-sm"><h6 align="center">mouse over product images to enlarge</h6></div>
        
		<div class="row">
            
			<div class="col-sm-4 cola" style="height: 285px;">
				<h4 align="center" class="zoom">
                    <div class="img_section">
                        <figure><img class="img_section2" src="img/puerh-tea/coconut-puerh-150.jpg" width="130" class="responsive"></figure><br>
                    Coconut Puerh Tea</h4>
                    <p align="center"><small><a href="puerh-tea.php">Shop Our Full Pu-erh Tea Selection</a></small></p>
                <div class="row text-center">
			
			<!--modal popup-->
			<!--button to trigger modal-->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;">
				Description
			</button>
            
			<!--modal container -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
					<!-- modal content-->
					<div class="modal-content">
						<!-- modal header-->
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Coconut Pu-erh Tea</h4>
						</div>
						<!-- modal body-->
						<div class="modal-body">
							
                            <p style="text-align: left;">
                                <a href="JavaScript:void(0)" onmouseover="this.style.color='darkcyan'" onmouseout="this.style.color='black'">Coconut flakes lend a tropical flair when blended with premium, full-leaf pu-erh tea, resulting in a smooth, earthy cup with a slightly sweet notes. A special oxidation and aging process yields an earthy flavor and aroma that is unique among pu-erh teas.</a></p>
                                <table><tr><td align=left>
                                <p class="valid"></p>
    
                                <!--<button class="teaPackage">Click on tea package size to select:</button>
                                <ul>
                                    <li>2oz ($8.00)</li>
                                    <li>4oz ($15.00)</li>
                                    <li>8oz ($28.00)</li>
                                    <li>16oz ($52.00)</li>
                                </ul>-->
                                <a href="puerh-tea.php"><span style=" text-transform: uppercase;">Explore Our Full Pu-erh Teas Selection and Add to Cart</span></a>    
                                </td></tr></table>
                            
						</div>
						<!-- modal footer-->
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
                
			</div>
            </div>
            
			
			<div class="col-sm-4 colb"  style="height: 285px;">
				<h4 align="center" class="zoom">
                    <div class="img_section">
                        <figure><img src="img/black-tea/earl-grey-tea-150.jpg" width="130" class="responsive"></figure><br>
                   Earl Grey Black Tea </h4>
                    <p align="center"><small><a href="black-tea.php">Shop Our Full Black Tea Selection</a></small></p>
                <div class="row text-center">
			
			<!--modal popup-->
			<!--button to trigger modal-->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2" style="border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;">
				Description
			</button>
            
			<!--modal container -->
			<div class="modal fade" id="myModal2" role="dialog">
				<div class="modal-dialog">
					<!-- modal content-->
					<div class="modal-content">
						<!-- modal header-->
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Earl Grey Black Tea</h4>
                            
						</div>
						<!-- modal body-->
						<div class="modal-body">
							<p style="text-align: left;">
                                <a href="JavaScript:void(0)" onmouseover="this.style.color='darkcyan'" onmouseout="this.style.color='black'">Earl Grey is one of the most recognized flavored teas in the world. This quintessentially British tea is typically a black tea base flavored with oil from the rind of bergamot orange, a citrus fruit with the appearance and flavor somewhere between an orange and a lemon with a little grapefruit and lime thrown in.</a></p>
                                <table><tr><td align=left>
                                <p class="valid"></p>
                                
    
                                <!--<button class="teaPackage">Click on tea package size to select:</button>
                                <ul>
                                    <li>2oz ($8.00)</li>
                                    <li>4oz ($15.00)</li>
                                    <li>8oz ($28.00)</li>
                                    <li>16oz ($52.00)</li>
                                </ul>-->
                                    <a href="black-tea.php"><span style=" text-transform: uppercase;">Check Out Our Full Black Teas Selection and Add to Cart</span></a>    
                                </td></tr></table>
                                </td></tr></table>
						</div>
						<!-- modal footer-->
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
                
			</div>
            </div>
                
			<div class="col-sm-4 colc"  style="height: 285px;">
				<h4 align="center" class="zoom">
                    <div class="img_section">
                        <figure><img src="img/white-tea/silverneedle-150.png" width="130" class="responsive"></figure><br>
                    Organic Silver Needle</h4>
                    <p align="center"><small><a href="white-tea.php">Shop Our Full White Tea Selection</a></small></p>
                <div class="row text-center">
			
			<!--modal popup-->
			<!--button to trigger modal-->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3" style="border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;">
				Description
			</button>
                    
			<!--modal container -->
			<div class="modal fade" id="myModal3" role="dialog">
				<div class="modal-dialog">
					<!-- modal content-->
					<div class="modal-content">
						<!-- modal header-->
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Organic Silver Needle</h4>
                            
						</div>
						<!-- modal body-->
						<div class="modal-body">
                            <p style="text-align: left;"><a href="JavaScript:void(0)" onmouseover="this.style.color='darkcyan'" onmouseout="this.style.color='black'">Organic Silver Needle White Tea has exquisitely shaped buds enveloped in white down. This white tea excites with its savory aroma, rich body and a sweet flavor with rounded finish that is soft and airy on the palate. White Teas which include our Organic Silver Needle variety are known to promote weight loss and stimulate the metabolism. This low caffeine antioxidant packed tea is delicious hot or cold and can be enjoyed any time of day.</a></p>
                            <table><tr><td align=left>
                                <p class="valid"></p>
    
                                <!--<button class="teaPackage">Click on tea package size to select:</button>
                                <ul>
                                    <li>2oz ($8.00)</li>
                                    <li>4oz ($15.00)</li>
                                    <li>8oz ($28.00)</li>
                                    <li>16oz ($52.00)</li>
                                </ul>-->
                                <a href="white-tea.php"><span style=" text-transform: uppercase;">Check Out Our Full White Teas Selection and Add to Cart</span></a>
                                </td></tr></table>
						</div>
						<!-- modal footer-->
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
                
			</div>
            </div>
                
        </div>
                <div class="row">
                <br>
                    
                </div>
        
        <div class="row">
			<div class="col-sm-4 cola" style="height: 285px;">
				<h4 align="center" class="zoom">
                    <div class="img_section">
                        <figure><img src="img/green-tea/fruit-fusion-150.png" width="130" class="responsive"></figure><br>
                   Fruit Fusion Green Tea </h4>
                    <p align="center"><small><a href="green-tea.php">Shop Our Full Green Tea Selection</a></small></p>
                <div class="row text-center">
			
			<!--modal popup-->
			<!--button to trigger modal-->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4" style="border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;">
				Description
			</button>
                    
			<!--modal container -->
			<div class="modal fade" id="myModal4" role="dialog">
				<div class="modal-dialog">
					<!-- modal content-->
					<div class="modal-content">
						<!-- modal header-->
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Fruit Fusion Green Tea</h4>
                            
						</div>
						<!-- modal body-->
						<div class="modal-body">
                            <p style="text-align: left;"><a href="JavaScript:void(0)" onmouseover="this.style.color='darkcyan'" onmouseout="this.style.color='black'">Fruit Fusion Green Tea is a harmonious fusion of Eastern and Western flavors. This tea has a tart, fresh aroma with a zesty and fruity flavor that cools and refreshes your body. Our Fruit Fusion Green Tea combines a quality Sencha green tea with genuine dried pieces of Rosehip, Hibiscus (a Chinese flower and natural source of many vitamins including C, A, and D), and orange peel. The Sencha tea leaves are loose, green tea leaves with a flat, smooth, and narrow body. When infused, the tea has a sweet and sour aroma. A refreshing drink that can be enjoyed hot or cold.</a></p>
                            <table><tr><td align=left>
                                <p class="valid"></p>
    
                                <!--<button class="teaPackage">Click on tea package size to select:</button>
                                <ul>
                                    <li>2oz ($8.00)</li>
                                    <li>4oz ($15.00)</li>
                                    <li>8oz ($28.00)</li>
                                    <li>16oz ($52.00)</li>
                                </ul>-->
                                <a href="green-tea.php"><span style=" text-transform: uppercase;">Check Out Our Green Black Teas Selection and Add to Cart</span></a>
                                </td></tr></table>
						</div>
						<!-- modal footer-->
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
                
			</div>
            </div>
			
			<div class="col-sm-4 colb"  style="height: 285px;">
				<h4 align="center" class="zoom">
                    <div class="img_section">
                        <figure><img src="img/oolong-tea/ginseng-150.png" width="130" class="responsive"></figure><br>
                    Ginseng Oolong Tea</h4>
                    <p align="center"><small><a href="oolong-tea.php">Shop Our Full Oolong Tea Selection</a></small></p>
                <div class="row text-center">
			
			<!--modal popup-->
			<!--button to trigger modal-->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal5" style="border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;">
				Description
			</button>

			<!--modal container -->
			<div class="modal fade" id="myModal5" role="dialog">
				<div class="modal-dialog">
					<!-- modal content-->
					<div class="modal-content">
						<!-- modal header-->
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Ginseng Oolong Tea</h4>
                            
						</div>
						<!-- modal body-->
						<div class="modal-body">
                            <p style="text-align: left;"><a href="JavaScript:void(0)" onmouseover="this.style.color='darkcyan'" onmouseout="this.style.color='black'">Ginseng Oolong Tea takes loose oolong leaves and blends them with ginseng. The oolong tea leaves are mixed with powdered Ginseng and Liquorice Grass, naturally withered under the strong sun, oxidized, and then wrap rolled into granular shape. The many health benefits associated with Ginseng Ooolong Tea include lowered blood pressure and cholesterol levels and an increase in both physical and mental stamina. Our Ginseng Oolong tea has a bouquet aroma and a sweet, fruity flavor that can be served hot or cold.</a></p>
                            <table><tr><td align=left>
                                <p class="valid"></p>
    
                                <!--<button class="teaPackage">Click on tea package size to select:</button>
                                <ul>
                                    <li>2oz ($8.00)</li>
                                    <li>4oz ($15.00)</li>
                                    <li>8oz ($28.00)</li>
                                    <li>16oz ($52.00)</li>
                                </ul>-->
                                <a href="oolong-tea.php"><span style=" text-transform: uppercase;">Check Out Our Full Oolong Teas Selection and Add to Cart</span></a>
                                </td></tr></table>
						</div>
						<!-- modal footer-->
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
                
			</div>
            </div>
                
			<div class="col-sm-4 colc"  style="height: 285px;">
				<h4 align="center" class="zoom">
                    <div class="img_section">
                        <figure><img src="img/herbal-tea/rosebud-150.png" width="130" class="responsive"></figure><br>
                    Rose Bud Herbal Tea</h4>
                    <p align="center"><small><a href="herbal-tea.php">Shop Our Full Herbal Tea Selection</a></small></p>
                <div class="row text-center">
			
			<!--modal popup-->
			<!--button to trigger modal-->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal6" style="border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;">
				Description
			</button>

			<!--modal container -->
			<div class="modal fade" id="myModal6" role="dialog">
				<div class="modal-dialog">
					<!-- modal content-->
					<div class="modal-content">
						<!-- modal header-->
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Rose Bud Herbal Tea</h4>
						</div>
						<!-- modal body-->
						<div class="modal-body">
                            <p style="text-align: left;"><a href="JavaScript:void(0)" onmouseover="this.style.color='darkcyan'" onmouseout="this.style.color='black'">Rose Bud Herbal Tea is 100% natural whole dried rose buds harvested in their adolescent stage. The tea leaves are deep, olive green and have a natural shape with bright, plump, healthy rose buds. For thousands of years rosebud tea has been a part of Chinese medicine. Rosebuds have been found to contain vitamin C which has been shown to boost the immune system and promote healthy skin and bones. Our Rose Bud Herbal Tea has a captivating scent and when infused, the tea liquid is evenly pink with an aromatic, sweet flavor that can be enjoyed hot or cold.</a></p>
                            <table><tr><td align=left>
                                <p class="valid"></p>
    
                                <!--<button class="teaPackage">Click on tea package size to select:</button>
                                <ul>
                                    <li>2oz ($8.00)</li>
                                    <li>4oz ($15.00)</li>
                                    <li>8oz ($28.00)</li>
                                    <li>16oz ($52.00)</li>
                                </ul>-->
                                <a href="herbal-tea.php"><span style=" text-transform: uppercase;">Check Out Our Full Herbal Teas Selection and Add to Cart</span></a>
                                </td></tr></table>
						</div>
						<!-- modal footer-->
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
                
			</div>
            </div>
        </div>
        
	</div> 
    <!--END OF FEATURED PRODUCTS SECTION-->
        
        <div class="container" style="text-align: center;">
        
            <a href="contact.php" class="btn btn-danger btn-lg" style="box-shadow: 3px 3px  #888888;">Contact Us Now</a>
       
        </div>
    <br>
    
                
    <div class="fluid-container" style="background: linear-gradient(#e1f9ec, #f5f5f5);">
        <div class="container">
        <h2 class="text-uppercase" align="center">The Health Benefits of Drinking Tea</h2>
        <table width="95%" align="center">
            <tr><td>
        
        <p style="color: cadetblue;"><big>
        No matter what the season, tea can be a tasty beverage since it can be served iced or hot. But its benefits go far beyond refreshment. There is plenty of research showing that drinking tea can actually improve your health. At the very least, it’s a flavorful way of getting enough fluid into your body each day. On top of that, studies have shown teas can help protect your teeth and your heart, as well as possibly even helping to stave off cancer. Which type of tea you drink can make a difference. All non-herbal teas are made from the leaves of the Camellia sinensis plant. <!--<img id="optionalstuff" style="width:35%; height:auto; margin: 5px;" src="img/animated-tea-cup-250.gif" align="right">-->The amount of time the leaves are processed determines whether you end up with a green, black or oolong tea. The green teas are the least processed and tend to have the highest amounts of polyphenols, and the only type that contain the polyphenol, catechin, which is why many studies have been done using only green teas. Certain herbal teas are known for their medicinal values, including soothing the digestive system.
        </big></p>
        <p style="color: cadetblue;"><big>
        Put down those saucer cups and get chugging — tea is officially awesome for your health. But before loading up on Red Zinger, make sure that your “tea” is actually tea. Real tea is derived from a particular plant (Camellia sinensis) and includes only four varieties: green, black, white, and oolong. Anything else (like herbal “tea”) is an infusion of a different plant and isn’t technically tea.
        </big></p>
        <p style="color: cadetblue;"><big>
        But what real tea lacks in variety, it makes up for with some serious health benefits. Researchers attribute tea’s health properties to polyphenols (a type of antioxidant) and phytochemicals. Though most studies have focused on the better-known green and black teas, white and oolong also bring benefits to the table. Read on to find out why coffee’s cousin rocks your health.</big></p>
        
        <div class="parallax" data-parallax="scroll" data-z-index="1" data-image-src="img/Brewing-13.jpg" class="responsive"></div>
      
        <p style="color: cadetblue;"><big>
        <br><img src="img/check.png" height="15px">&nbsp;&nbsp; Antioxidants work to prevent the body’s version of rust and thus help to keep us young and protect us from damage from pollution. Load up on antioxidants with a white tea, which is less processed than black or green tea so it retains more beneficial antioxidants.<br>
        <img src="img/check.png" height="15px">&nbsp;&nbsp; Herbal blends have no caffeine, while traditional teas have less than 50 percent of what typically is found in coffee. That means you can consume it without those pesky effects on your nervous system, says Leslie Bonci, nutritionist and owner of Active Eating Advice. If you're trying to switch from coffee to tea, try a chicory root tea like Teeccino, which has a mouth feel and flavor similar to coffee. Chicory root is also known to help reduce stress and is a prebiotic so may be helpful to your gut. Bonus: this tea will give you a kick of energy without the caffeine.<br>
        <img src="img/check.png" height="15px">&nbsp;&nbsp; In fact, a study published earlier this year that combined data from a host of earlier reports found a nearly 20 percent reduction in the risk of heart attack and a 35 percent reduced risk of stroke among those who drank one to three cups of green tea a day.<br>
        <img src="img/check.png" height="15px">&nbsp;&nbsp; Tea helps fight free radicals. Tea is high in oxygen radical absorbance capacity (“ORAC” to its friends), which is a fancy way of saying that it helps destroy free radicals (which can damage DNA) in the body. While our bodies are designed to fight free radicals on their own, they’re not 100 percent effective — and since damage from these radical oxygen ninjas has been linked to cancer, heart disease and neurological degeneration, we’ll take all the help we can get.
        </big></p>
        
        <div class="parallax" data-parallax="scroll" data-z-index="1" data-image-src="img/AdobeStock_96688764.jpg"  class="responsive"></div>
        
        <p style="color: cadetblue;"><big>
        <br><img src="img/check.png" height="15px">&nbsp;&nbsp; Tea can boost exercise endurance. Scientists have found that the catechins (antioxidants) in green tea extract increase the body’s ability to burn fat as fuel, which accounts for improved muscle endurance.<br>
        <img src="img/check.png" height="15px">&nbsp;&nbsp; Drinking tea could help reduce the risk of heart attack. Tea might also help protect against cardiovascular and degenerative diseases.<br>
        <img src="img/check.png" height="15px">&nbsp;&nbsp; The antioxidants in tea might help protect against a boatload of cancers, including breast, colon, colorectal, skin, lung, esophagus, stomach, small intestine, pancreas, liver, ovarian, prostate and oral cancers. But don’t rely solely on tea to keep a healthy body — tea is not a miracle cure, after all. While more studies than not suggest that tea has cancer-fighting benefits, the current research is mixed.<br>
        <img src="img/check.png" height="15px">&nbsp;&nbsp; Drinking tea is linked with a lower risk of Parkinson’s disease. When considered with other factors like smoking, physical activity, age and body mass index, regular tea drinking was associated with a lowered risk of Parkinson’s disease in both men and women.<br>
        <img src="img/check.png" height="15px">&nbsp;&nbsp; Tea could keep waist circumference in check. In a few studies, participants who regularly consumed hot tea had lower waist circumference and lower BMI than non-consuming participants. Scientists speculate that regular tea drinking lowers the risk of metabolic syndrome (which increases the risk of diabetes, artery disease and stroke), although it’s important to remember that correlation does not equal causation.
        </big></p><br>
                </td></tr></table></div></div>
    <br>
    <div class="container" style="text-align: center;">
        <a href="contact.php" class="btn btn-danger btn-lg" style="box-shadow: 3px 3px  #888888;">Contact Us Now</a>
        
    </div>
	<div class="container">
        <div class="col-lg-12 cola">
		<h2 class="text-uppercase" align="center">Our Full Selection</h2>
        
        
        
				
				<!--accordian-->
				<div class="panel-group" id="accordion">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
									<strong><img src="img/Green_Leaf_Transparent.png" height="15px"> Black Tea</strong>
								</a>
							</h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse in">
							<div class="panel-body">
                                <a href="category.php#black-tea"><img src="img/black-tea.jpg" class="responsive"></a>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
									<strong><img src="img/Green_Leaf_Transparent.png" height="15px"> Green Tea</strong>
								</a>
							</h4>
						</div>
						<div id="collapse2" class="panel-collapse collapse">
							<div class="panel-body">
                                <a href="category.php#green-tea"><img src="img/Green-Tea.jpg" class="responsive"></a>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
									<strong><img src="img/Green_Leaf_Transparent.png" height="15px"> White Tea</strong>
								</a>
							</h4>
						</div>
						<div id="collapse3" class="panel-collapse collapse">
							<div class="panel-body">
                                <a href="category.php#white-tea"><img src="img/white-tea.jpg" class="responsive"></a>
							</div>
						</div>
					</div>
                    <div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
									<strong><img src="img/Green_Leaf_Transparent.png" height="15px"> Herbal Tea</strong>
								</a>
							</h4>
						</div>
						<div id="collapse4" class="panel-collapse collapse">
							<div class="panel-body">
                                <a href="category.php#herbal-tea"><img src="img/herbal-tea.jpg" class="responsive"></a>
							</div>
						</div>
					</div>
                    <div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
									<strong><img src="img/Green_Leaf_Transparent.png" height="15px"> Oolong Tea</strong>
								</a>
							</h4>
						</div>
						<div id="collapse5" class="panel-collapse collapse">
							<div class="panel-body">
                                <a href="category.php#oolong-tea"><img src="img/oolong-tea.jpg" class="responsive"></a>
							</div>
						</div>
					</div>
                    <div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
									<strong><img src="img/Green_Leaf_Transparent.png" height="15px"> Pu-erh Tea</strong>
								</a>
							</h4>
						</div>
						<div id="collapse6" class="panel-collapse collapse">
							<div class="panel-body">
                                <a href="category.php#puerh-tea"><img src="img/puerh-tea.jpg" class="responsive"></a>
							</div>
						</div>
					</div>
                    <div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                                    <strong><img src="img/Green_Leaf_Transparent.png" height="15px"> Iced Tea</strong>
								</a>
							</h4>
						</div>
						<div id="collapse7" class="panel-collapse collapse">
							<div class="panel-body">
								<a href="category.php#iced-tea"><img src="img/iced-tea.jpg" class="responsive">
							</div>
						</div>
					</div>
				</div>
            </div>
            <!--<div class="col-lg-3 cola"><a class="twitter-timeline" data-height="750" href="https://twitter.com/NaturesTeaLeaf?ref_src=twsrc%5Etfw">Tweets by NaturesTeaLeaf</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>--></div>
    </div>
               
                

	
	
	
</content>
    
<?php require_once('assets/partials/footer.php'); ?>
    
</div>    

	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
    
            
         <script>
             // JavaScript code for "Click on Tea Package size to select" within featured products pop-up modal
        $('.teaPackage').click(function(){
            $(this).next().toggle(1000);
        });
        
        $('.teaPackage').next().find('li').click(function(){
            console.log("clicked list item");
            $(this).prepend(' &#9989;');
            $(this).css({
                color:"#0f0",
                fontsize:'20px'
            })
        });
        
        $('#fn').click(function(){
            $(this).addClass('fnf');
        });
        $('#check').click(function(){
            console.log("clicked");
            fn = $('#fn').val();
            if(fn == ""){
                $('.valid').html('you left the input black');
            }else{
                $('.valid').html(fn);
                $('#fn').removeClass('fnf');
            }
        });
    </script>
      
</body>
</html>



