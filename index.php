<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html lang="eng">

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
	<title>ATN Store database web application</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Cloud Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	
	<!-- css files -->
	<link rel="stylesheet" href="css/style1.css" type="text/css" media="all">
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Encode+Sans+Condensed:100,200,300,400,500,600,700,800,900&amp;subset=latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<!-- title -->
	<h1>
		ATN Store Login Form
	</h1>
	<!-- //title -->

	<!-- content -->
	<div class="container">
		<div id="clouds">
			<div class="cloud x1"></div>
			<!-- Time for multiple clouds to dance around -->
			<div class="cloud x2"></div>
			<div class="cloud x3"></div>
			<div class="cloud x4"></div>
			<div class="cloud x5"></div>
		</div>
		<!-- content form -->
		<div class="sub-main-w3">
			<form action="#" method="post">
				<div class="form-style-agile">
					<label>
						<i class="fas fa-user"></i>
						Username

					</label>
					<input placeholder="Username" name="Name" type="text" required="">
				</div>
				<div class="form-style-agile">
					<label>
						<i class="fas fa-unlock-alt"></i>
						Password

					</label>
					<input placeholder="Password" name="Password" type="password" required="">
				</div>
                                    <input type="submit" value="Log In">                       
			</form>
		</div>
		<!-- //content form -->
	</div>
	<!-- //content -->

	<!-- copyright -->
	<div class="footer">
		<h2>&copy; 2018 Cloud Login Form. All rights reserved | Design by
			<a href="http://w3layouts.com">W3layouts</a>
		</h2>
	</div>
	<!-- //copyright -->

<?php 
	$username ='admin';
	$pass = 'admin';
	if(isset($_POST[Name])){
	if($_POST[Name]==$username && $_POST[Password]==$pass)
	{
		header("location: tables_invoice.php");
	}
	else
	{
		header("location: index.php");
	}
	}
	else{}
?>
</body>

</html>