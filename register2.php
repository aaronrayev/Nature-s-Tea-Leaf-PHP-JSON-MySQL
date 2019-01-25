<!DOCTYPE html>
<html>

<head>
	<title>Project-3 Register</title>
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
    <content>
<table><tr><td width="60px"></td><td>
<h2>REGISTRATION</h2>
<p><span class="error">* required field.</span></p>

<form method="post" action="postprocess2.php" enctype ='multipart/form-data'>

<label>Name:<br>
	<input type="text" name="name" required><span class="error">*</span><br>
</label>
<br>
<label>E-mail:<br>
	<input type="email" name="email" required><span class="error">*</span><br>
</label>
<br>
<label>Photo:<br>
	<input type="file" name="photo"><br>
</label>
<br>
<input type="submit" name="submit" value="Register">
    
</form>
    </td></tr></table>
</content>
    <table><tr><td height="50px"></td></tr></table>
    <?php require_once('assets/partials/footer.php'); ?>
    
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>