<?php require('header.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>

		form {
			color: black;
			margin: auto;
			width: 90%;
			padding: 50px;
		}

		form label {
			display: block;
			padding: 10px 0;
			text-align: center;
		}

		form div {
			width: 200px;
			height: 200px;
			background-color: #ccc;
			border-radius: 50%;
			background-image: url( );
			background-size: cover;
		}

		form select {
			width: 90%;
			padding: 10px 0;
			border: 2px solid #ccc;
			margin: 10px 0;
			margin-bottom: 20px;
		}

		form input, textarea {
			width: 90%;
			padding: 10px 0;
			margin-bottom: 30px;
			border: 0;
			border-bottom: 2px solid black;
		}

		form input:focus, textarea:focus {
			color: ;
			font-size: large;
			border-color: #45489a;
		}

		#preloader {
			content: '';
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			z-index: 9999;
			overflow: hidden;
			background: #fff;
		}

		#preloader:before {
			content: "";
			position: fixed;
			top: 45%;
			left: 45%;
			border: 6px solid #f2f2f2;
			border-top: 5px solid #45489a;
			border-left: 5px solid #45489a;
			border-bottom: 5px solid #45489a;
			border-radius: 50%;
			width: 50px;
			height: 50px;
			-webkit-animation: animate-preloader 1s linear infinite;
			animation: animate-preloader 1s linear infinite;
		}

		@-webkit-keyframes animate-preloader {
			0% {
				-webkit-transform: rotate(0deg);
				transform: rotate(0deg);
			}

			100% {
				-webkit-transform: rotate(360deg);
				transform: rotate(360deg);
			}
		}

		@keyframes animate-preloader {
			0% {
				-webkit-transform: rotate(0deg);
				transform: rotate(0deg);
			}

			100% {
				-webkit-transform: rotate(360deg);
				transform: rotate(360deg);
			}
		}

	</style>
</head>
<body>
	<!-- <div id="preloader"></div> -->

	<div class="page-content">
		<section>
			<h2>New Post!</h2>
			<div>
		<form>
			<label for="title">Blog Title</label>
			<input type="text" name="title" id="title" placeholder="Blog Title..">
			<div></div>
			<label for="image">Image</label>
			<input type="File" name="image" id="image" placeholder="Blog Image..">
			<select name="status">
				<option value="active">Publish</option>
				<option value="inactive">Save as draft</option>
			</select>
			<label for="post">Blog Posts</label>
			<textarea type="text" name="post" id="post" placeholder="Blog Post.."></textarea>
		</form>
	</div>

	<script>
		var ima = document.getElementsById('image').value;
	</script>
		</section>
	</div>



<?php require('footer.php'); ?>