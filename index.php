<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Agriwebhub</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<link rel="stylesheet" href="style.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<link rel="stylesheet" href="indexfooter.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


         <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
		
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>

	<?php
		require 'menu.php';
	?>

		<!-- Banner -->
			<section id="banner" class="wrapper">
				<div class="container">
				<h2 style="color: black;">Agriwebhub</h2>
				<p style="color: black;">Your Product Our Market</p>
				<br><br>
				<center>
					<div class="row uniform">
						<div class="6u 12u$(xsmall)">
							<button class="button fit" onclick="document.getElementById('id01').style.display='block'" style="width:auto">LOGIN</button>
						</div>

						<div class="6u 12u$(xsmall)">
							<button class="button fit" onclick="document.getElementById('id02').style.display='block'" style="width:auto">REGISTER</button>
						</div>
					</div>
				</center>


			</section>

			<footer>
				<div class="footer">
				<div class="row1">
				<a href="style.css"><i class="fa fa-facebook"></i></a>
				<a href="style.css"><i class="fa fa-instagram"></i></a>
				<a href="style.css"><i class="fa fa-youtube"></i></a>
				<a href="style.css"><i class="fa fa-twitter"></i></a>
				</div>
				
				<div class="row">
				<ul>
				
				<!-- <li><a href="#">Contact Us</a></li> -->
				<li><a href="Aaservice.html">Our Services</a></li>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Terms & Conditions</a></li>
				<!-- <li><a href="#">Career</a></li> -->
				</ul>
				</div>
				<div class="row2">
					<p> &copy;Agriwebhub all rights preserved</p>
				   </div>
				</div>
				</div>
				</footer>

			<div>
				<i class="fa fa-envelope"></i>
				<p style="font-size:20px"><a href="mailto:agroculture@gmail.com" style="color:white">demo@demo.com</a></p>
			</div>
		</div> 


			<div id="id01" class="modal">

  <form class="modal-content animate" action="Login/login.php" method='POST'>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
    <h3>Login</h3>
							<form method="post" action="Login/login.php">
								<div class="row uniform 50%">
									<div class="7u$">
										<input type="text" name="uname" id="uname" value="" placeholder="UserName" style="width:80%" required/>
									</div>
									<div class="7u$">
										<input type="password" name="pass" id="pass" value="" placeholder="Password" style="width:80%" required/>
									</div>
								</div>
									<div class="row uniform">
										<p>
				                            <b>Category : </b>
				                        </p>
				                        <div class="3u 12u$(small)">
				                            <input type="radio" id="farmer" name="category" value="1" checked>
				                            <label for="farmer">Farmer</label>
				                        </div>
				                        <div class="3u 12u$(small)">
				                            <input type="radio" id="buyer" name="category" value="0">
				                            <label for="buyer">Buyer</label>
				                        </div>
									</div>
									<center>
									<div class="row uniform">
										<div class="7u 12u$(small)">
											<input type="submit" value="Login" />
										</div>
									</div>
									</center>
								</div>
							</form>
						</section>
</div>
    </div>
    </div>
  </form>
</div>

<div id="id02" class="modal">
    <form class="modal-content animate" action="Login/signUp.php" method="POST">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>
        <div class="container">
            <section>
                <h3>SignUp</h3>
                <form method="post" action="Login/signUp.php">
                    <center>
                        <div class="row uniform">
                            <div class="3u 12u$(xsmall)">
                                <input type="text" name="name" id="name" value="" placeholder="Name" required/>
                            </div>
                            <div class="3u 12u$(xsmall)">
                                <input type="text" name="uname" id="uname" value="" placeholder="UserName" required/>
                            </div>
                        </div>
                        <div class="row uniform">
                            <div class="3u 12u$(xsmall)">
                                <input type="text" name="mobile" id="mobile" value="" placeholder="Mobile Number" required/>
                                <span id="phone-error"></span>
                            </div>
                            <div class="3u 12u$(xsmall)">
                                <input type="email" name="email" id="email" value="" placeholder="Email" required/>
                                <span id="email-error"></span>
                            </div>
                        </div>
                        <div class="row uniform">
                            <div class="3u 12u$(xsmall)">
                                <input type="password" name="password" id="password" value="" placeholder="Password" required/>
                                <span id="password-error"></span>
                            </div>
                            <div class="3u 12u$(xsmall)">
                                <input type="password" name="pass" id="pass" value="" placeholder="Retype Password" required/>
                                
                            </div>
                        </div>
                        <div class="row uniform">
                            <div class="6u 12u$(xsmall)">
                                <input type="text" name="addr" id="addr" value="" placeholder="Address" style="width:80%" required/>
                            </div>
                        </div>
                        <div class="row uniform">
                            <p><b>Category:</b></p>
                            <div class="3u 12u$(small)">
                                <input type="radio" id="farmer_radio" name="category" value="1" checked>
                                <label for="farmer_radio">Farmer</label>
                            </div>
                            <div class="3u 12u$(small)">
                                <input type="radio" id="buyer_radio" name="category" value="0">
                                <label for="buyer_radio">Buyer</label>
                            </div>
                        </div>
                        <div class="row uniform">
                            <div class="3u 12u$(small)">
                                <input type="submit" value="Submit" name="submit" class="special"/>
                            </div>
                            <div class="3u 12u$(small)">
                                <input type="reset" value="Reset" name="reset"/>
                            </div>
                        </div>
                    </center>
                </form>
            </section>
        </div>
    </form>
</section>

    </div>
    </div>
  </form>
</div>



<script>


window.onclick = function(event) {
    var modal = document.getElementById('id01');
    var modal1 = document.getElementById('id02');

   
    if (event.target == modal) {
        modal.style.display = "none";
    }
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}


var phoneNumberInput = document.getElementById('mobile');

    
    phoneNumberInput.addEventListener('input', function() {
        var phoneNumber = this.value;
        var isValidPhoneNumber = /^\d+$/.test(phoneNumber);

        if (!isValidPhoneNumber) {
            document.getElementById('phone-error').textContent = 'Please enter numbers only';
        } else {
            document.getElementById('phone-error').textContent = ''; 
        }
    });

    var emailInput = document.getElementById('email');

    emailInput.addEventListener('input', function() {
        var email = this.value;
        var isValidEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);

        if (!isValidEmail) {
            document.getElementById('email-error').textContent = 'Please enter a valid email address';
        } else {
            document.getElementById('email-error').textContent = '';
        }
    });

    var passwordInput = document.getElementById('password');
    var passwordError = document.getElementById('password-error');

    passwordInput.addEventListener('input', function() {
        var password = this.value;
        var isValidPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(password);

        if (!isValidPassword) {
            passwordError.textContent = 'Please enter a strong password';
        } else {
            passwordError.innerHTML = '<i class="fa fa-check-circle" style="color: green; font-size: 24px;"></i>'; 
        }
    });
</script>
</body>
</html>
