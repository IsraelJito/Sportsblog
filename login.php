


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>

		body {
			background-image: url(img/lewandoski.jpg);
			background-size: cover;
		}

		h3 {
			margin-top: 100px;
			text-align: center;
			color: #fff;
		}

		form {
			margin: auto;
			width: 90%;
			padding: 50px;
			border: 1px solid #fff;
			width: 70%;
			min-width: 200px;
		}

		form input {
			width: 90%;
			padding: 10px 0;
			margin-bottom: 30px;
			background-color: transparent;
			border: 0;
			border-bottom: 2px solid #fff;
			color: #fff;
		}
		
		form input:focus {
			border-color: #ff0404;
			font-size: large;
		}

	</style>
</head>
<body>

		<h3>Admin Login</h3>
	<form>
		<input type="text" name="username" placeholder="Enter Username..">
		<input type="password" name="password" placeholder="Enter Password..">
	</form>


<div style="text-align: center;">
<?php require('footer.php'); ?></div>