<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Project-3 Login</title>
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
        <!--<h2 class="text-uppercase" align="center">Registration</h2>-->
<h2 class="text-uppercase" align="center">Login</h2>
        <div class="container">
        <div class="col-sm-12 cola" align="center" style="height:400px">

<form method="post">
<label align="left">E-mail<br>
	<input type="email" name="email"  value="" required><br>
</label>
	<br>
<label align="left">Password<br>
	<input type="password" name="pw" value="" required><br>
</label>
<br>
<input type="submit" name="submit" value="Submit">
</form>
<br><br>
<a href="register.php">** CREATE A NEW ACCOUNT **</a>
            <br><br>
    </div>
    <!--<div class="col-sm-6 colb" style="height:770px">
        <div style="width: 100%;" align="center"><br><img src="img/animated-tea-cup-250.gif" width="100%" class="responsive" style="border-radius: 35px;"></div>
    </div>-->
<?php 
    
    if( isset( $_POST['submit'] ) ){
        $e = $_POST['email'];
        $p = $_POST['pw'];
        
        $cnt = mysqli_connect('localhost', 'root', 'root', 'rayev2019');
        
        $qry = "select * from nature18 where pw = '$p' AND email='$e';";
        
        $login = mysqli_query($cnt, $qry);
        
        print_r($login);
        
        $row = $login -> num_rows;
        
        
        // if login exist in database 
        if($row == 1){
            $a = mysqli_fetch_assoc($login);
            print_r($a);
            $_SESSION['uid'] = $a['uid'];
            $_SESSION['date'] = $a['date'];
            $_SESSION['name'] = $a['name'];
            $_SESSION['email'] = $a['email'];
            $_SESSION['user'] = $a['user'];
            $_SESSION['pw'] = $a['pw'];
            $_SESSION['img'] = $a['img'];
            header('Location: profile.php');
            //echo '<a href = "profile.php">Proceed to profile</a>';
        } else{
            echo "Try Again";
        }
        
        mysqli_close($cnt);
    }
    
    ?>
</content>
    <table><tr><td height="100px"></td></tr></table>
    <?php require_once('assets/partials/footer.php'); ?>
    
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>