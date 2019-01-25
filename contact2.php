<?php session_start(); 



?>
<!DOCTYPE html>
<html>

<head>
	<title>Project-3 Contact Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/environment-icon-png-7.png">
	<!--Some custom CSS for reference only-->
	
    <style type="text/css">
		.cola {
			background: #fff;
		}

		.colb {
			background: #fff;
		}
        
        /*making long entries wrap within the modal */
        .modal-body p {
            word-wrap: break-word;
        }
	</style>
    
    
</head>

<body>
<div style="background-color: #f5fbf8">
    <?php require_once('assets/partials/nav.php'); ?>
    <content>
        <h2 class="text-uppercase" align="center">Contact Us</h2>
        <div class="container">
            <div class="row">
			<div class="col-md-6 cola" style="height:770px">
            
                <form action="assets/process.php" method="post">
                    <!--<h2 class="text-uppercase" align="center">Contact Us</h2>--><br><br>
                    
                    <!-- Comment: input ids populate the 'Check Your Entry' pop-up modal -->
                    <!-- Comment: input names populate entries to inquiries.php -->
                    
                    <!--<input type="date" onload="getDate()" class="form-control" id="date" 
                      name="date" >-->
                    <label>Full Name<br>
                        <input type="text" id="fulln" name="fullName" placeholder="John Smith" class="form-control"><br>
                    </label><br>
                    <label>City<br>
                    <input type="text" id="ct" name="city" placeholder="City" class="form-control"><br>
                    </label><br>
                    <label>State<br>
                    <input type="text" id="st" name="state" placeholder="State" class="form-control"><br>
                    </label><br>
                    <label>Telephone<br>
                        <input type="tel" id="tl" name="tel" placeholder="555-555-5555" class="form-control"><br>
                    </label><br>
                    <label>E-Mail<br>
                        <input type="email" id="eml" name="e-mail" placeholder="email@url.com" class="form-control"><br>
                    </label><br>
                    <label>Message<br>
                    <textarea id="tarea" name="txtArea" placeholder="What can we help you with?" rows="5" cols="50" class="form-control"></textarea>
                    </label>
                    
                    <br>
                    <h3>Sign up for our:</h3>
                    <label><input type="checkbox" name="newsletter" value="check" checked>&nbsp;Newsletter</label><br>
                    <label><input type="checkbox" name="special" value="check" checked>&nbsp;Special Offers</label><br>
                    <br>
                    <!--modal popup-->
			<!--button to trigger modal-->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
				Check Your Entry
			</button>

			<!--modal container -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
					<!-- modal content-->
					<div class="modal-content">
						<!-- modal header-->
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">You entered:</h4>
						</div>
						<!-- modal body-->
						<div class="modal-body">
							
	<p><b id="keyValue"></b></p>
                            <br>
    <p>If necessary, close this window, correct your form entry and check again.<br>Otherwise, close this window and submit your request, we will get back to you shortly.<br>Thank you.</p>
	
                
                    
						</div>
						<!-- modal footer-->
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>               
                    <button type="submit" class="btn btn-info btn-lg" name="send" value="Email Now">
				Submit
			</button>
                </form>
                <br>
                

                
                <br>
            </div>
            <div class="col-md-6 colb" style="height:770px">
                <div style="width: 100%;" align="center"><img src="img/2teacups-450.jpg" class="responsive" style="border-radius: 35px;"><br><br><a href="https://www.facebook.com/NaturesTeaLeafFans/" target="_blank"><img src="img/facebook.png" height="40px"></a>&nbsp;&nbsp;&nbsp;<a href="https://twitter.com/naturestealeaf?lang=en" target="_blank"><img src="img/twitter.png" height="40px"></a>&nbsp;&nbsp;&nbsp;<a href="https://plus.google.com/116108937402066704515" target="_blank"><img src="img/google-plus.png" height="40px"></a>&nbsp;&nbsp;&nbsp;<a href="https://www.pinterest.com/naturestealeaf/" target="_blank"><img src="img/pinterest.png" height="40px"></a></div>
                <h2 class="text-uppercase" align="center">Store Location</h2>
                <div style="width: 100%"><iframe width="100%" height="365px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.7269584857386!2d-73.95188378517065!3d40.67998467933541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b9a933f9e4f%3A0xa9d840c79ecbe23c!2s546+Nostrand+Ave%2C+Brooklyn%2C+NY+11216!5e0!3m2!1sen!2sus!4v1541710518796" width="600" height="500" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                
            </div>
        </div>
    </div>
    </content>
    <?php require_once('assets/partials/footer.php'); ?>
    </div>
    



	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
    
    <script>

		// a function that takes values from the form inputs based on their ids and adds them into a var full
		function process() {
			fulln = document.getElementById('fulln').value;
			ct = document.getElementById('ct').value;
            st = document.getElementById('st').value;
            tl = document.getElementById('tl').value;
            eml = document.getElementById('eml').value;
            tarea = document.getElementById('tarea').value;
			full ="<br>" + fulln + "<br> " + ct + "<br> " + st + "<br> " + tl + "<br> " + eml + "<br> " + tarea;
		}

		//key release event
		document.getElementById('fulln').onkeyup = function(){
			process();
			document.getElementById('keyValue').innerHTML = full;
		}

		document.getElementById('ct').onkeyup = function(){
			process();
			document.getElementById('keyValue').innerHTML = full;
		}
        
        document.getElementById('st').onkeyup = function(){
			process();
			document.getElementById('keyValue').innerHTML = full;
		}
        
        document.getElementById('tl').onkeyup = function(){
			process();
			document.getElementById('keyValue').innerHTML = full;
		}
        
        document.getElementById('eml').onkeyup = function(){
			process();
			document.getElementById('keyValue').innerHTML = full;
		}
        
       document.getElementById('tarea').onkeyup = function(){
			process();
			document.getElementById('keyValue').innerHTML = full;
		}

		//click event
		/*document.getElementById('clickEvent').onclick = function(){
			process();
			document.getElementById('clickValue').innerHTML = full;
            this.style.fontsize="80px";
		}*/

		//hover event
		/*document.getElementById('hoverEvent').onmouseover = function(){
			process();
			document.getElementById('hoverValue').innerHTML = full;
		}*/
	</script>
    
</body>
</html>