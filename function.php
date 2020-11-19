<?php 

function dbconnect() {
	$conn = mysqli_connect('localhost', 'root', '', 'jitosport');

	if (mysqli_errno($conn)) {
		die('COULD NOT CONNECT TO DATABASE**');
	}else{
		return $conn;
	}
}


function login($request) {
	global $db, $errors;
	if (empty($request['username'])) {
		$errors['username'] = "Username is required";
	}
	if (empty($request['password'])) {
		$errors['password'] = "Password is required";
	}
	$username = $request['username'];
	$password = $request['password'];
	if (!empty($username) && !empty($password)) {
		$checkuser = "SELECT * FROM users WHERE username = '$username' and password = '$password' ";
		$query = mysqli_query($db, $checkuser);
		$no = mysqli_num_rows($query);
		if ($no == 0) {
			$errors['credentials'] = "Invalid details!";
		}else {
			$userdata = mysqli_fetch_assoc($query);
			$_SESSION['user'] = $userdata;
			return true;
		}
	}
}


function profile_pic($request) {
	global $db, $user, $errors;
	if (!getimagesize($request['profile_pic']['name'])) {
		$errors['image'] = "Please choose a valid image file!";
	}else{
		$randnumbers = rand(10, 1000);
		$string = str_shuffle('GREATASJHSKFjkdflnvJF'.$randnumbers);
		$trial = explode(".", $request['profile_pic']['name']);
		$back = end($trial);
		$profile_pic = $string.'.'.$back;
	}
	$user_id = $user['id'];
	$query = mysqli_query($db, "INSERT INTO users (`profile_pic`) VALUES ('$profile_pic') WHERE id = '$user_id' ");
	if (mysqli_affected_rows($db) != 0) {
		return $query;
		return true;
	}else{
		$errors['profile_pic'] = "error uploading image!";
	}
}


function createpost($request) {
	global $db, $errors, $user;
	if (empty(filter_var($request{'title'}, FILTER_SANITIZE_STRING))) {
		$errors['title'] = "Your Article Needs A Title";
	}else{
		$title = filter_var($request{'title'}, FILTER_SANITIZE_STRING);
	}
	if (empty($request['image']['name'])) {
		$errors['image'] = "Please choose an image file!";
	}elseif (!getimagesize($request['image']['tmp_name'])) {
		$errors['image'] = "Please choose a valid image";
	}else{
		$random = rand(10, 10000);
		$string = str_shuffle('ABCDEFGHIzxcvbnmkljhdsa'.$random);
		$test = explode(".", $request['image']['name']);
		$extension = end($test);
		$imageName = $string.'.'.$extension;
	}
	if (empty($request['status'])) {
		$errors['status'] = 'Please choose an option!';
	}else{
		$status = $request['status'];
	}
	if (empty(filter_var($request{'post'}, FILTER_SANITIZE_STRING))) {
		$errors['post'] = "Write your article.";
	}else{
		$post = filter_var($request{'post'}, FILTER_SANITIZE_STRING);
	}
	if (empty($errors)) {
		$user_id = $user['id'];
		if (move_uploaded_file($request['image']['tmp_name'], 'img/'.$imageName)) {
			$query = mysqli_query($db, "INSERT INTO posts (author_id,title,image,status,post) VALUES ('$user_id','$title','$imageName','$status','$post')");
			if (mysqli_affected_rows($db) != 0) {
				return true;
			}else {
				$errors['credentials'] = "Error Uploading New Blog!";
			}
		}
	}
}


function getUserposts() {
	global $db, $user;
	$user_id = $user['id'];
	$query = mysqli_query($db, "SELECT * FROM posts WHERE author_id = '$user_id' ORDER BY id DESC ");
	return $query;
}

function getposts() {
	global $db;
	$query = mysqli_query($db, "SELECT id,title,image,post,created_at FROM posts WHERE status = 'active' ORDER BY id DESC ");
	if (mysqli_num_rows($query) != 0) {
		return $query;
	}
}

function getoldpost() {
	global $db, $edit;
	$query = mysqli_query($db, "SELECT title, image, status, post, FROM posts WHERE id = '$edit' ");
	return $query;

}

function editpost($request) {
	global $db, $errors, $user;
	if (empty(filter_var($request{'title'}, FILTER_SANITIZE_STRING))) {
		$errors['title'] = "Your Article Needs A Title";
	}else{
		$title = filter_var($request{'title'}, FILTER_SANITIZE_STRING) ;
	}
	if (empty($request['image']['name'])) {
		$errors['image'] = "Please choose an image file!";
	}elseif (!getimagesize($request['image']['tmp_name'])) {
		$errors['image'] = "Please choose a valid image";
	}else{
		$random = rand(10, 10000);
		$string = str_shuffle('ABCDEFGHIzxcvbnmkljhdsa'.$random);
		$test = explode(".", $request['image']['name']);
		$extension = end($test);
		$imageName = $string.'.'.$extension;
	}
	if (empty($request['status'])) {
		$errors['status'] = 'Please choose an option!';
	}else{
		$status = $request['status'];
	}
	if (empty(filter_var($request{'post'}, FILTER_SANITIZE_STRING))) {
		$errors['post'] = "Write your article.";
	}else{
		$post = filter_var($request{'post'}, FILTER_SANITIZE_STRING);
	}
	if (empty($errors)) {
		$user_id = $user['id'];
		if (move_uploaded_file($request['image']['tmp_name'], 'img/'.$imageName)) {
			$query = mysqli_query($db, "INSERT INTO  posts (author_id,title,image,status,post) VALUES ('$user_id','$title','$imageName','$status','$post') WHERE id = '$edit' ");
			if (mysqli_affected_rows($db) != 0) {
				return true;
			}else {
				$errors['credentials'] = "Error Uploading New Blog!";
			}
		}
	}
}


?>