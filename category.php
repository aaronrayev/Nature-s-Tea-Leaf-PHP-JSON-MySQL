<?php session_start(); 



?>
<!DOCTYPE html>
<html>

<head>
	<title>Project-3 Categories</title>
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
          background: #333;
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
    <content>
        <video id="video-background" autoplay loop muted width="100%">
        <source src="video/stock-footage-a-cup-of-hot-tea-on-a-windowsill.webm"></video>
        
    <a name="black-tea"></a>
    <table><tr><td height="50px"></td></tr></table>
	<div class="container" style="font-family:monospace; font-size: 16px; color: cadetblue; background:white; opacity:0.9">
        
		<h2 class="text-uppercase">Black Tea</h2>

		<!--tabs-->
		<!--tabs navigation-->
		<ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#black-benefits"><h6 class="text-uppercase" style="font-weight: bold; color: cadetblue;">Health Benefits</h6></a></li>
            <li><a data-toggle="tab" href="#black-brewing"><h6 class="text-uppercase" style="font-weight: bold; color: cadetblue;">Brewing Instructions</h6></a></li>
            <li><a href="black-tea.php"><h6 class="text-uppercase" style="font-weight: bold; color: cadetblue;">Shop Now</h6></a></li>
			<!--<li><a data-toggle="tab" href="#menu3">History</a></li>-->
		</ul>

		<!--tabs content-->
		<div class="tab-content">
			<div id="black-benefits" class="tab-pane fade in active">
				<h4><a href="black-tea.php">See Our Black Tea Selection</a></h4>
                &nbsp;
				<p>Black tea is known to banish fatigue, stimulate mental alertness, and raise energy levels. It has been shown to reduce stress hormone levels and acts as a nerve sedative, frequently relieving headaches.</p>
                <p style="font-family:monospace; font-size: 16px;">Black tea is known for its antiviral and antibacterial properties. It can be topically applied to cuts, bruises and burns, and is famous for its sunburn relief and has been shown to have a positive effect on preventing tooth decay and gum disease.<br>
                &nbsp;</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Nurtures Digestive Health</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Helps Naturally Reduce Stress</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Promotes Balance And Harmony</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Well-Known To Revitalize, Invigorate, And Energize The Senses</p>
                &nbsp;
                <h4><a href="black-tea.php">Shop Now</a></h4>
			</div>
			<div id="black-brewing" class="tab-pane fade">
				<!--<h3>Brewing Instructions</h3>-->
                &nbsp;
				<p><img src = "img/BlackTea_Instructions.gif"></p>
			</div>
			<!--<div id="menu3" class="tab-pane fade">
				<h3>Menu 3</h3>
				<p>this is new</p>
			</div>-->
		</div>
	</div>
    <a name="green-tea"></a>
    <table><tr><td height="50px"></td></tr></table>
    	<div class="container" style="font-family:monospace; font-size: 16px; color: cadetblue; background:white; opacity:0.9">
		<h2 class="text-uppercase">Green Tea</h2>

		<!--tabs-->
		<!--tabs navigation-->
		<ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#green-benefits"><h6 class="text-uppercase" style="font-weight: bold; color: cadetblue;">Health Benefits</h6></a></li>
            <li><a data-toggle="tab" href="#green-brewing"><h6 class="text-uppercase" style="font-weight: bold; color: cadetblue;">Brewing Instructions</h6></a></li>
            <li><a href="green-tea.php"><h6 class="text-uppercase" style="font-weight: bold; color: cadetblue;">Shop Now</h6></a></li>
			<!--<li><a data-toggle="tab" href="#menu3">Menu 2</a></li>-->
		</ul>

		<!--tabs content-->
		<div class="tab-content">
			<div id="green-benefits" class="tab-pane fade in active">
				<h4><a href="green-tea.php">See Our Green Tea Selection</a></h4>
                &nbsp;
				<p style="font-family:monospace; font-size: 16px;">By some accounts, the history of green tea goes back as far as 2737 BC. In the 15th century, Chinese seamen were given green tea to prevent scurvy, which would take the lives of many of their European counterparts more than 100 years later.</p>
                <p style="font-family:monospace; font-size: 16px;">Green tea’s catechins have also been found to help inhibit cancer growth. The National Cancer Institute states, "[catechins] scavenge oxidants before cell injuries occur, reduce the incidence and size of chemically induced tumors, and inhibit the growth of tumor cells.”<br>
                &nbsp;</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Promotes Skin Health</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Provides High Levels Of Vitamins And Antioxidants</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Cool And Refreshing To Ease Summer Heat & Fever</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;May Impede The Growth Of Certain Forms Of Cancer</p>
                &nbsp;
                <h4><a href="green-tea.php">Shop Now</a></h4>
			</div>
			<div id="green-brewing" class="tab-pane fade">
				&nbsp;
				<p><img src = "img/GreenTea_Instructions.gif"></p>
			</div>
			<!--<div id="menu3" class="tab-pane fade">
				<h3>Menu 3</h3>
				<p>this is new</p>
			</div>-->
		</div>
	</div>
        <a name="white-tea"></a>
        <table><tr><td height="50px"></td></tr></table>
    	<div class="container" style="font-family:monospace; font-size: 16px; color: cadetblue; background:white; opacity:0.9">
		<h2 class="text-uppercase">White Tea</h2>

		<!--tabs-->
		<!--tabs navigation-->
		<ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#white-benefits"><h6 class="text-uppercase" style="font-weight: bold; color: cadetblue;">Health Benefits</h6></a></li>
            <li><a data-toggle="tab" href="#white-brewing"><h6 class="text-uppercase" style="font-weight: bold; color: cadetblue;">Brewing Instructions</h6></a></li>
            <li><a href="white-tea.php"><h6 class="text-uppercase" style="font-weight: bold; color: cadetblue;">Shop Now</h6></a></li>
			<!--<li><a data-toggle="tab" href="#menu3">Menu 2</a></li>-->
		</ul>

		<!--tabs content-->
		<div class="tab-content">
			<div id="white-benefits" class="tab-pane fade in active">
				<h4><a href="white-tea.php">See Our White Tea Selection</a></h4>
                &nbsp;
				<p style="font-family:monospace; font-size: 16px;">White tea completely skips the oxidizing process, and thus keeps more of the medicinal elements in the tea intact. White tea is the closest thing to a fresh tea leaf that most of us in the Western hemisphere will ever see. And those of us who drink it know that white tea leaves even look fresh and healthy!</p>
                <p style="font-family:monospace; font-size: 16px;">White tea helps keep your skin acne–free. The antioxidants in white tea may have an effect on acne, and in some cases have been shown to work as well as a 4% solution of the much more harsh benzoyl peroxide. White tea is widely used in beauty and cosmetic products, with the promise that its high antioxidant content will keep your skin looking young.<br>
                &nbsp;</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Elevates Skin Health</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Extremely High Levels Of Antioxidants</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Promotes Weight Loss And Aids Digestion</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Known To Help Minor Digestion Discomforts</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;May Impede The Growth Of Certain Cancers</p>
                &nbsp;
                <h4><a href="white-tea.php">Shop Now</a></h4>
			</div>
			<div id="white-brewing" class="tab-pane fade">
				&nbsp;
				<p><img src = "img/WhiteTea_Instructions.gif"></p>
			</div>
			<!--<div id="menu3" class="tab-pane fade">
				<h3>Menu 3</h3>
				<p>this is new</p>
			</div>-->
		</div>
	</div>
            <a name="herbal-tea"></a>
            <table><tr><td height="50px"></td></tr></table>
    	<div class="container" style="font-family:monospace; font-size: 16px; color: cadetblue; background:white; opacity:0.9">
		<h2 class="text-uppercase">Herbal Tea</h2>

		<!--tabs-->
		<!--tabs navigation-->
		<ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#herbal-benefits"><h6 class="text-uppercase" style="font-weight: bold; color: cadetblue;">Health Benefits</h6></a></li>
            <li><a data-toggle="tab" href="#herbal-brewing"><h6 class="text-uppercase" style="font-weight: bold; color: cadetblue;">Brewing Instructions</h6></a></li>
            <li><a href="herbal-tea.php"><h6 class="text-uppercase" style="font-weight: bold; color: cadetblue;">Shop Now</h6></a></li>
			<!--<li><a data-toggle="tab" href="#menu3">Menu 2</a></li>-->
		</ul>

		<!--tabs content-->
		<div class="tab-content">
			<div id="herbal-benefits" class="tab-pane fade in active">
				<h4><a href="herbal-tea.php">See Our Herbal Tea Selection</a></h4>
                &nbsp;
				<p style="font-family:monospace; font-size: 16px;">Herbal teas, unlike standard teas such as green and black, are not made from the Camellia sinensis plant. Instead, herbal teas are derived from a variety of dried flowers, spices, herbs and fruits. This has led to a huge variety of flavors and options when it comes to choosing teas for taste and health benefits. Herbal teas are some of the healthiest things you can drink. The vitamins, minerals, and antioxidants found in many herbs have shown to provide many short and long-term health benefits. These teas can be a great alternative to your daily sugary and caffeinated drinks, while still providing great taste and a natural boost to your day. <br>
                &nbsp;</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;High In Vitamin C</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Aids with Skin Health</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Boosts Immune System</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Promotes Digestive Health</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Regulates Weight And Aids With Weight Reduction</p>
                &nbsp;
                <h4><a href="herbal-tea.php">Shop Now</a></h4>
			</div>
			<div id="herbal-brewing" class="tab-pane fade">
				&nbsp;
				<p><img src = "img/HerbalTea_Instructions.gif"></p>
			</div>
			<!--<div id="menu3" class="tab-pane fade">
				<h3>Menu 3</h3>
				<p>this is new</p>
			</div>-->
		</div>
	</div>
                <a name="oolong-tea"></a>
                <table><tr><td height="50px"></td></tr></table>
    	<div class="container" style="font-family:monospace; font-size: 16px; color: cadetblue; background:white; opacity:0.9">
		<h2 class="text-uppercase">Oolong Tea</h2>

		<!--tabs-->
		<!--tabs navigation-->
		<ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#oolong-benefits"><h6 class="text-uppercase" style="font-weight: bold; color: cadetblue;">Health Benefits</h6></a></li>
            <li><a data-toggle="tab" href="#oolong-brewing"><h6 class="text-uppercase" style="font-weight: bold; color: cadetblue;">Brewing Instructions</h6></a></li>
            <li><a href="oolong-tea.php"><h6 class="text-uppercase" style="font-weight: bold; color: cadetblue;">Shop Now</h6></a></li>
			<!--<li><a data-toggle="tab" href="#menu3">Menu 2</a></li>-->
		</ul>

		<!--tabs content-->
		<div class="tab-content">
			<div id="oolong-benefits" class="tab-pane fade in active">
				<h4><a href="oolong-tea.php">See Our Oolong Tea Selection</a></h4>
                &nbsp;
				<p style="font-family:monospace; font-size: 16px;">Oolong tea combines the health benefits of both green and black tea. It contains the full range of polyphenol antioxidants: catechins, thearubigin and theaflavin. Oolong, or semi–fermented tea contains more polyphenols than black and fewer than the less oxidized green and white teas. Some polyphenols, like flavonoids, have antioxidant properties.</p>
                <p style="font-family:monospace; font-size: 16px;">Oolong tea is often recommended for its weight–loss properties. The polyphenols in oolong tea help to control obesity by activating the enzyme responsible for dissolving triglyceride (fatty deposits) and enhancing the function of fat metabolism.<br>
                &nbsp;</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Promotes Liver Health</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Increases Metabolism</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Nurtures Digestive Health</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Elevates Skin & Dental Health</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Helps Reduce High Cholesterol</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Boosts Balance And Harmony</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Good Source Of The Amino Acid GABA</p>
                &nbsp;
                <h4><a href="oolong-tea.php">Shop Now</a></h4>
			</div>
			<div id="oolong-brewing" class="tab-pane fade">
				&nbsp;
				<p><img src = "img/OolongTea_Instructions.gif"></p>
			</div>
			<!--<div id="menu3" class="tab-pane fade">
				<h3>Menu 3</h3>
				<p>this is new</p>
			</div>-->
		</div>
	</div>
            <a name="puerh-tea"></a>
            <table><tr><td height="50px"></td></tr></table>
    	<div class="container" style="font-family:monospace; font-size: 16px; color: cadetblue; background:white; opacity:0.9">
		<h2 class="text-uppercase">Pu-erh Tea</h2>

		<!--tabs-->
		<!--tabs navigation-->
		<ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#puerh-benefits"><h6 class="text-uppercase" style="font-weight: bold; color: cadetblue;">Health Benefits</h6></a></li>
            <li><a data-toggle="tab" href="#puerh-brewing"><h6 class="text-uppercase" style="font-weight: bold; color: cadetblue;">Brewing Instructions</h6></a></li>
            <li><a href="puerh-tea.php"><h6 class="text-uppercase" style="font-weight: bold; color: cadetblue;">Shop Now</h6></a></li>
			<!--<li><a data-toggle="tab" href="#menu3">Menu 2</a></li>-->
		</ul>

		<!--tabs content-->
		<div class="tab-content">
			<div id="puerh-benefits" class="tab-pane fade in active">
				<h4><a href="puerh-tea.php">See Our Pu-erh Tea Selection</a></h4>
                &nbsp;
				<p style="font-family:monospace; font-size: 16px;">Hailed for its medicinal properties, Pu-erh tea is commonly used in China to detoxify the body and aid digestion. Pu-erh tea has strong digestive, antibacterial, and warming properties. It cleanses the bloodstream of fat and toxins from meat and fatty foods. Recent research suggests that consuming 5–8 cups of Pu-erh Tea each day can reduce cholesterol and plaque of the arteries.</p>
                <p style="font-family:monospace; font-size: 16px;">Pu-erh tea is regarded as a slimming and safe dieter’s tea. In France, Pu-erh Tuo Cha (mini tea bricks) are widely popular and consumed by many women as a "beauty and dieting tea".<br>
                &nbsp;</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Shrinks Fat Cells</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Boosts Immune System</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Nurtures Vascular Health</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Promotes And Soothes Digestion</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Stimulates Weight Loss And Aids With Weight Reduction</p>
                &nbsp;
                <h4><a href="puerh-tea.php">Shop Now</a></h4>
			</div>
			<div id="puerh-brewing" class="tab-pane fade">
				&nbsp;
				<p><img src = "img/PuerhTea_Instructions.gif"></p>
			</div>
			<!--<div id="menu3" class="tab-pane fade">
				<h3>Menu 3</h3>
				<p>this is new</p>
			</div>-->
		</div>
	</div>
        <a name="iced-tea"></a>    
        <table><tr><td height="50px"></td></tr></table>
    	<div class="container" style="font-family:monospace; font-size: 16px; color: cadetblue; background:white; opacity:0.9">
		<h2 class="text-uppercase">Iced Tea</h2>

		<!--tabs-->
		<!--tabs navigation-->
		<ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#iced-benefits"><h6 class="text-uppercase" style="font-weight: bold; color: cadetblue;">Health Benefits</h6></a></li>
            <li><a data-toggle="tab" href="#iced-instructions"><h6 class="text-uppercase" style="font-weight: bold; color: cadetblue;">Brewing Instructions</h6></a></li>
            <li><a href="ice-tea.php"><h6 class="text-uppercase" style="font-weight: bold; color: cadetblue;">Shop Now</h6></a></li>
			<!--<li><a data-toggle="tab" href="#menu3">Menu 2</a></li>-->
		</ul>

		<!--tabs content-->
		<div class="tab-content">
			<div id="iced-benefits" class="tab-pane fade in active">
				<h4><a href="ice-tea.php">See Our Iced Tea Selection</a></h4>
                &nbsp;
				<p style="font-family:monospace; font-size: 16px;">After water, tea is the most frequently consumed beverage in the world. Which make sense; tea goes hand in hand with images of Asia, the United Kingdom, India, Russia. But how about here in the old United States of America? It might not seem like we have a booming tea culture, but the fact is that on any given day, more than half of the American population drinks tea. But here’s the twist: 85 percent of that tea is served on the rocks.</p>
                <p style="font-family:monospace; font-size: 16px;">Regardless of the temperature it is served at, tea is chock full of good things. There has been much research done, and compelling conclusions that tea can reduce the risk of heart disease, and possibly even help prevent a number of others. In warmer weather, having your tea iced is a great way to reap the benefits all year.<br>
                &nbsp;</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;High Levels Of EGCG</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Rich In Antioxidants</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Metabolism Booster</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Increases The Excretion Of Toxins Through Sweat</p>
                <p style="font-family:monospace; font-size: 13px; color:darkcyan; font-style: italic;"><img src="img/Green_Leaf_Transparent.png" height="15px">&nbsp;Aids In Weight Loss</p>
                &nbsp;
                <h4><a href="ice-tea.php">Shop Now</a></h4>
			</div>
			<div id="iced-instructions" class="tab-pane fade">
				&nbsp;
				<p>1. Boil 16 Ounces of Fresh Water to 175°<br>
                   2. Add 4 Teaspoons of Green Tea to Tea Pot<br>
                   3. Add Water to Tea Pot<br>
                   4. Let Stand for 3-5 Minutes<br>
                   5. Pour Into Pitcher<br>
                   6. Add 8 Ounces Of Fresh Water<br>
                   7. Let cool for 20 Minutes<br>
                   8. Pour Over Ice And Enjoy<br>
                   *add sugar, honey or other sweeteners to liking while tea is hot</p>
			</div>
			<!--<div id="menu3" class="tab-pane fade">
				<h3>Menu 3</h3>
				<p>this is new</p>
			</div>-->
		</div>
	</div>
    </content>
    <table><tr><td height="50px"></td></tr></table>
    <?php require_once('assets/partials/footer.php'); ?>
    
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>