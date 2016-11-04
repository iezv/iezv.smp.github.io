<?php 
include("php/db_connection.php");
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>New Project | Login-page</title>

	<link href="https://fonts.googleapis.com/css?family=Lato|Libre+Franklin" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Taviraj" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<!-- Bootstrap -->
	<link href="vendors/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="vendors/font-awesome/css/font-awesome.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- Animate.css -->
	<link href="vendors/animate.css/animate.css" rel="stylesheet">
	<!-- Custom Theme Style -->
	<link href="build/css/custom.css" rel="stylesheet">
	<!-- My Style -->
	<link href="css/mystyle.css" rel="stylesheet">
    
    <!-- блокироване SUBMIT пока не введены все данные-->
	<script language="javascript" type="text/javascript">
		function FoprmSubmit()
		{  f1.submit();
			document.getElementById("SubmitButton").disabled = true;
			return false;
		}
	</script>
	
</head>

<body class="login">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-md-offset-6 col-sm-12 col-xs-12" >
				<a class="hiddenanchor" id="signup"></a>
				<a class="hiddenanchor" id="signin"></a>
				<div class="login_wrapper">
					<div class="animate form login_form">
						<section class="login_content">
							<form id="f1" action="php/authentic.php" method="post" name="authentic">
								<h1>Login Form</h1>
								<div>
									<input name="username" type="text" class="form-control" placeholder="Username" required="" />
								</div>
								<div>
									<input name="password" type="password" class="form-control" placeholder="Password" required="" />
								</div>
								<div class="cen">
									<button type="submit" class="btn btn-primary butt">Log in</button>
									<a class="reset_pass" href="#">Lost your password?</a>
								</div>
								<div class="clearfix"></div>
								<div class="separator">
									<p class="change_link">New to site?
										<a href="#signup" class="to_register"> Create Account </a>
									</p>
									<div class="clearfix"></div>
									<div class="downText">
										<h3><i class="fa fa-gg"></i> Your logo</h1>
											<p>©2016 All Rights Reserved</p>
										</div>
									</div>
								</form>
							</section>
						</div>
						<div id="register" class="animate form registration_form">
							<section class="login_content">
								<form id="f1" action="php/checkin.php" method="post" name="checkin">
									<h1>Create Account</h1>
									<div>
										<input name="username" type="text" class="form-control" placeholder="Username" required="" />
									</div>
									<div>
										<input name="email" type="email" class="form-control" placeholder="Email" required="" />
									</div>
									<div>
										<input name="password" type="password" class="form-control" placeholder="Password" required="" />
									</div>
									<div class="text-center">
										<button type="submit" class="btn btn-primary butt">Submit</button>
									</div>
									<div class="clearfix"></div>
									<div class="separator">
										<p class="change_link">Already a member ?
											<a href="#signin" class="to_register"> Log in </a>
										</p>
										<div class="clearfix"></div>
										<div class="downText">
											<h3><i class="fa fa-gg"></i>Your logo</h1>
												<p>©2016 All Rights Reserved</p>
											</div>
										</div>
									</form>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
		</body>
		</html>
