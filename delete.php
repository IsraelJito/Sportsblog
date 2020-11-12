<?php 
require('function.php');
$db = dbconnect();
$delete = $_GET['id'];
if (!empty($delete)) {
	$query = mysqli_query($db, "DELETE FROM posts WHERE id = '$delete' ");
	echo mysqli_affected_rows($query);
// 	if (mysqli_affected_rows($query) != 0) {
// 		return true;
// 		header('Location: viewpost.php');
// 	}else {
// 		echo "ERROR DELETING YOUR POST** <a herf='viewpost.php'>TRY AGAIN!</a>";
// 	}
// }else {
// 	header('Location: viewpost.php');
}

 ?>