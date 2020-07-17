<!DOCTYPE html>
<html lang="en" class="js">

<!-- Mirrored from nobleislam.com/portfolio/html/translator/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Mar 2018 09:49:05 GMT -->
<head>
	<meta charset="UTF-8">
<?php include 'header.php'; ?>
	<meta name="viewport" content="initial-scale=1.0, width=device-width" />
	<style media="screen">

	[data-notify="container"][class*="alert-pastel-"] {
	    background-color: rgb(255, 255, 238);
	    border-width: 0px;
	    border-left: 15px solid rgb(255, 240, 106);
	    border-radius: 0px;
	    box-shadow: 0px 0px 5px rgba(51, 51, 51, 0.3);
	    letter-spacing: 1px;
	}

	[data-notify="container"].alert-pastel-info {
	    border-left-color: rgb(40, 223, 255);
	}

	[data-notify="container"].alert-pastel-danger {
	    border-left-color: rgb(255, 103, 76);
	}

	[data-notify="container"].alert-pastel-success {
	    border-left-color: rgb(91, 255, 76);
	}

	[data-notify="container"].alert-pastel-primary {
	    border-left-color: rgb(235, 176, 49);
	}

	[data-notify="container"][class*="alert-pastel-"]>[data-notify="title"] {
	    color: #000;
	    display: block;
	    font-weight: 700;
	    margin-bottom: 5px;
	}

	[data-notify="container"][class*="alert-pastel-"]>[data-notify="message"] {
	    font-weight: 400;
	    color: #000;
	}

	[data-notify="container"][class*="close"]>[data-notify="dismiss"] {
	    -webkit-appearance: none;
	    padding: 0;
	    cursor: pointer;
	    background: 0 0;
	    border: 0;
	}
	</style>
	<!-- Style Sheets -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
	<link rel="stylesheet" href="css/hover-min.css" />
	<link rel="stylesheet" href="css/bootstrap-select.min.css" />
	<link rel="stylesheet" href="css/animate.css" />
	<link rel="stylesheet" type="text/css" href="css/loader.css">
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
	<style>

.panel-login {
border-color: #ccc;
-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
color: #00415d;
background-color: #fff;
border-color: #fff;
text-align:center;
}
.panel-login>.panel-heading a{
text-decoration: none;
color: #666;
font-weight: bold;
font-size: 15px;
-webkit-transition: all 0.1s linear;
-moz-transition: all 0.1s linear;
transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
color: #029f5b;
font-size: 18px;
}
.panel-login>.panel-heading hr{
margin-top: 10px;
margin-bottom: 0px;
clear: both;
border: 0;
height: 1px;
background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
height: 45px;
border: 1px solid #ddd;
font-size: 16px;
-webkit-transition: all 0.1s linear;
-moz-transition: all 0.1s linear;
transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
outline:none;
-webkit-box-shadow: none;
-moz-box-shadow: none;
box-shadow: none;
border-color: #ccc;
}
.btn-login {
background-color: #59B2E0;
outline: none;
color: #fff;
font-size: 14px;
height: auto;
font-weight: normal;
padding: 14px 0;
text-transform: uppercase;
border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
color: #fff;
background-color: #53A3CD;
border-color: #53A3CD;
}
.forgot-password {
text-decoration: underline;
color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
text-decoration: underline;
color: #666;
}

.btn-register {
background-color: #1CB94E;
outline: none;
color: #fff;
font-size: 14px;
height: auto;
font-weight: normal;
padding: 14px 0;
text-transform: uppercase;
border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
color: #fff;
background-color: #1CA347;
border-color: #1CA347;
}
.row {
	padding: 30px;
}
/* The message box is shown when the user clicks on the password field */
#message {
	display:none;
	background: #fff;
	color: #000;
	position: relative;
	padding: 20px;
	margin-top: 10px;
}

#message p {
	padding: 10px 35px;
	font-size: 14px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
	color: green;
}

.valid:before {
	position: relative;
	left: -35px;
	content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
	color: red;
}

.invalid:before {
	position: relative;
	left: -35px;
	content: "✖";
}
</style>
</head>
<body><?php include 'logo.php'; ?>
	<!-- TopBar -->


	<!-- Main-Navigation -->
<?php include 'navbar.php'; ?>
	<!-- Main-Navigation -->

	<!-- Page-Bar -->

	<section id="pageBar">
		<div class="container">
			<div class="row">
				<h1 class="page-title pull-left">Daxil ol/ Qeydiyyat</h1>
				<ol class="breadcrumb pull-right">
				  <li><a href="index.php">Home</a></li>
				  <li>Login</li>
				</ol>
			</div>
		</div>
	</section>

	<!-- Page-Bar -->

	<!-- Login Form -->
	<section>
	<div class="container">
	    	<div class="row">
				<div class="col-md-6">
					<div class="panel panel-login">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-6">
									
									<a href="#" class="active" id="login-form-link">Daxil ol</a>
								</div>
								<div class="col-xs-6">
									<a href="#" id="register-form-link">Qeydiyyat</a>
								</div>
							</div>
							<hr>
						</div>
						<div class="panel-body">
							<div class="row">

								<div class="col-lg-12">

									<form id="login-form" action="admin/setting/engine.php" autocomplete="off" action="#" method="post" role="form" style="display: block;">
										<div class="form-group">
											<input type="email" name="user_email" id="username" required tabindex="1" class="form-control" placeholder="Email-nizi daxil edin" value="">
										</div>
										<div class="form-group">
											<input type="password" name="user_pass" id="password" required tabindex="2" class="form-control" placeholder="Şifrənizi daxil edin">
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-sm-offset-3">
													<input type="submit" name="userlogin" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Daxil ol">
												</div>
											</div>
											<div class="text-center">
												<a href="reset-pass.php" tabindex="5" class="forgot-password">Şifrəmi unutdum</a>
											</div>
										</div>
										<div style="color: green; border: 0" class="form-control" id="true" ></div>
										<div style="color: red; border: 0" class="form-control" id="false" ></div>







									</form>
									<form id="register-form" autocomplete="off" role="form" onsubmit="return myFunction()" action="admin/setting/engine.php" method="POST" enctype="multipart/form-data" style="display: none;">
										<input type="hidden" name="user_id">
										<div class="form-group">
											<input type="text" name="user_name" id="username" required tabindex="1" class="form-control" placeholder="Ad" value="">
										</div>
										<div class="form-group">
											<input type="email" name="user_email" id="email" required tabindex="1" class="form-control" placeholder="Email-nizi daxil edin" value="">
										</div>
										<div class="form-group">
											<input type="password" name="user_pass" id="pass1" required tabindex="2" class="form-control" placeholder="Şifrənizi daxil edin">
										</div>
										<div class="form-group">
											<input type="password" name="confirm-password" id="pass2" tabindex="2" class="form-control" placeholder="Şifrənin təkrarı">
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-sm-offset-3">
													<input type="submit" name="useradd" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Qeydiyyat">
												</div>
											</div>
										</div>

										<div style="color: red;  border: 0" class="form-control" id="log" ></div>

									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div id="message">
	  					<p>Şifrə aşağıdakı şərtləri ödəməlidir:</p>
	  					<p id="letter" class="invalid"><b>Kiçik</b> hərf</p>
	  					<p id="capital" class="invalid"><b>Böyük</b> hərf</p>
	  					<p id="number" class="invalid"><b>Rəqəm</b></p>
	  					<p id="length" class="invalid">Minimum <b>uzunluq 8</b></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Login Form -->

	<!-- Footer -->
<?php include 'footer.php'; ?>
	<!-- CopyRight -->

	<!-- Scripts -->
	<script src="js/wow.min.js"></script>
	<script src="js/jquery-1.11.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/jquery.custom-file-input.js"></script>
	<script src="js/jquery.bxslider-rahisified.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/custom.js"></script>
  <?php include 'userpanel/notification.php' ?>

	 	<?php if($_GET['useradd']=='true'){
	 			$login=$_GET['login'];
	 			$pass=$_GET['pass'] ?>

	 		<script>
	 			document.getElementById('username').value = '<?php echo $login ;?>';
	 			document.getElementById('password').value = '<?php echo $pass ;?>';
	 			document.getElementById('true').innerHTML += 'Uğurlu qeydiyyat!<br>Daxil ol düyməsinə sıxın';
	 		</script>

	 	<?php }?>

	 	<?php if($_GET['useradd']=='false'){ ?>

	 		<script>
	 			document.getElementById('false').innerHTML += 'Uğursuz qeydiyyat. Yenə cəhd edin';
	 		</script>

	 	<?php }?>

		<?php if($_GET['email']=='same'){ ?>

		<script>
			document.getElementById('false').innerHTML += 'Bu email ilə hesab möcüddur. Xahiş edirik başqa email ilə yenidən cəhd edin.';
		</script>

	<?php }?>



	     <script>
	     $(function() {

	     $('#login-form-link').click(function(e) {
	 		$("#login-form").delay(100).fadeIn(100);
	  		$("#register-form").fadeOut(100);
	 		$('#register-form-link').removeClass('active');
	 		$(this).addClass('active');
	 		e.preventDefault();
	 	});
	 	$('#register-form-link').click(function(e) {
	 		$("#register-form").delay(100).fadeIn(100);
	  		$("#login-form").fadeOut(100);
	 		$('#login-form-link').removeClass('active');
	 		$(this).addClass('active');
	 		e.preventDefault();
	 	});

	 });
	 function myFunction() {
	     var pass1 = document.getElementById("pass1").value;
	     var pass2 = document.getElementById("pass2").value;
	     var ok = true;

	     if (pass1 != pass2) {
	         //alert("Passwords Do not match");
	         document.getElementById("pass1").style.borderColor = "#E34234";
	         document.getElementById("pass2").style.borderColor = "#E34234";
	 		document.getElementById('log').innerHTML += 'Şifrələr uyğun gəlmir';
	         ok = false;
	     }
	     return ok;
	 }
	 </script>

	 <script>
	 var myInput = document.getElementById("pass1");
	 var letter = document.getElementById("letter");
	 var capital = document.getElementById("capital");
	 var number = document.getElementById("number");
	 var length = document.getElementById("length");

	 // When the user clicks on the password field, show the message box
	 myInput.onfocus = function() {
	     document.getElementById("message").style.display = "block";
	 }

	 // When the user clicks outside of the password field, hide the message box
	 myInput.onblur = function() {
	     document.getElementById("message").style.display = "none";
	 }

	 // When the user starts to type something inside the password field
	 myInput.onkeyup = function() {
	   // Validate lowercase letters
	   var lowerCaseLetters = /[a-z]/g;
	   if(myInput.value.match(lowerCaseLetters)) {
	     letter.classList.remove("invalid");
	     letter.classList.add("valid");
	   } else {
	     letter.classList.remove("valid");
	     letter.classList.add("invalid");
	   }

	   // Validate capital letters
	   var upperCaseLetters = /[A-Z]/g;
	   if(myInput.value.match(upperCaseLetters)) {
	     capital.classList.remove("invalid");
	     capital.classList.add("valid");
	   } else {
	     capital.classList.remove("valid");
	     capital.classList.add("invalid");
	   }

	   // Validate numbers
	   var numbers = /[0-9]/g;
	   if(myInput.value.match(numbers)) {
	     number.classList.remove("invalid");
	     number.classList.add("valid");
	   } else {
	     number.classList.remove("valid");
	     number.classList.add("invalid");
	   }

	   // Validate length
	   if(myInput.value.length >= 8) {
	     length.classList.remove("invalid");
	     length.classList.add("valid");
	   } else {
	     length.classList.remove("valid");
	     length.classList.add("invalid");
	   }
	 }
	 </script>
</body>

<!-- Mirrored from nobleislam.com/portfolio/html/translator/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Mar 2018 09:49:05 GMT -->
</html>
