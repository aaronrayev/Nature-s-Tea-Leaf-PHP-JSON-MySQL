<header style="position: sticky; width: 100%; overflow: hidden; top: 0; z-index: 999;">

	<!--mobile friendly hamburger menu-->
	<nav class="navbar navbar-default affix-top navbar-expand-xl" >
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
				<span class="glyphicon glyphicon-menu-hamburger"></span>
			</button>
			<a class="navbar-brand" href="index.html" style="margin-left: 15px;"><img src="img/Natures-logo.png" height="50px"></a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
                <?php 
        
        if(isset($_SESSION['uid'])){
        // check if session has the admin email 'aaronrayev@gmail.com' to display the admin main menu with an Inquiries menu item
            
            if($_SESSION['email']=="aaronrayev@gmail.com")
            {
            echo '
            <li style="width: 110px; margin-left: 5px; margin-right: 5px;"><a href="category.php" class="btn btn-default" style="border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;"><strong>Categories</strong></a></li>
            <li style="width: 110px; margin-left: 5px; margin-right: 5px;"><a href="contact.php" class="btn btn-default" style="border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;"><strong>Contact Us</strong></a></li>
            <li style="width: 110px; margin-left: 5px; margin-right: 5px;"><a href="cart.php" class="btn btn-default" style="border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;"><strong>My Cart</strong></a></li>
            <li style="width: 110px; margin-left: 5px; margin-right: 5px;"><a href="inquiries.php" class="btn btn-default" style="border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;"><strong>Inquiries</strong></a></li>
            <li style="width: 110px; margin-left: 5px; margin-right: 5px;"><a href="users.php" class="btn btn-default" style="border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;"><strong>Users</strong></a></li>
            <li style="width: 110px; margin-left: 5px; margin-right: 5px;"><a href="new-tea.php" class="btn btn-default" style="border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;"><strong>New Item</strong></a></li>
            <li style="width: 110px; margin-left: 5px; margin-right: 5px;"><a href="profile.php" class="btn btn-default" style="border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;"><strong>Profile</strong></a></li>
            <li style="width: 110px; margin-left: 5px; margin-right: 5px;"><a href="logout.php" class="btn btn-default" style="border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;"><strong>Logout</strong></a></li>
            <li><a href="#">WELCOME, '.$_SESSION['name'].'</a></li>
            ';}
            // otherwise display regular user menu
            else{
             echo '
            <li style="width: 110px; margin-left: 5px; margin-right: 5px;"><a href="category.php" class="btn btn-default" style="border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;"> <strong>Categories</strong> </a></li>
            <li style="width: 110px; margin-left: 5px; margin-right: 5px;"><a href="contact.php" class="btn btn-default" style="border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;"> <strong>Contact Us</strong> </a></li>    
            <li style="width: 110px; margin-left: 5px; margin-right: 5px;"><a href="special-deals.php" class="btn btn-default" style="border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;"><strong>Weekly Deal</strong></a></li>
            <li style="width: 110px; margin-left: 5px; margin-right: 5px;"><a href="cart.php" class="btn btn-default" style="border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;"><strong>My Cart</strong></a></li>
            <li style="width: 110px; margin-left: 5px; margin-right: 5px;"><a href="profile.php" class="btn btn-default" style="border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;"><strong>Profile</strong></a></li>
            <li style="width: 110px; margin-left: 5px; margin-right: 5px;"><a href="logout.php" class="btn btn-default" style="border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;"><strong>Logout</strong></a></li>
            <li><a href="#">WELCOME, '.$_SESSION['name'].'</a></li>
            ';   
            }
        }
                // display inactive session menu 
                else{
                    echo
                    '
                
				<li style="width: 110px; margin-left: 5px; margin-right: 5px;"><a href="category.php" class="btn btn-default" style="border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;"><strong>Categories</strong></a></li>
                <li style="width: 110px; margin-left: 5px; margin-right: 5px;"><a href="contact.php" class="btn btn-default" style="border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;"> <strong>Contact Us</strong> </a></li>
                <li style="width: 110px; margin-left: 5px; margin-right: 5px;"><a href="cart.php" class="btn btn-default" style="border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;"><strong>My Cart</strong></a></li>
                <li style="width: 110px; margin-left: 5px; margin-right: 5px;"><a href="login.php" class="btn btn-default" style="border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;"><strong>Login</strong></a></li>
                <li style="width: 110px; margin-left: 5px; margin-right: 5px;"><a href="register.php" class="btn btn-default" style="border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;"><strong>Weekly Deal</strong></a></li>
                
                ';
                    }
                
        
       
        
        ?>
			</ul>
		</div>
	</nav>

</header>