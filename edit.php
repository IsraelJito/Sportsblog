<?php 
require('header2.php');
$edit = $_GET['id'];
$query = mysqli_query($db, "SELECT * FROM posts WHERE id = '$edit' ";)

if ($_POST['submit']) {
	if (editpost($_POST)) {
		header('Location: viewpost.php');
	}
}
 ?>

<div class="page-content">
		<div>
			<h2 style="display: block; text-align: center;">Edit Post!</h2>
			<div>
				<?php if (!empty($errors['credentials'])) { ?>
					<span style="color: red; text-align: center; display: block;"><?= $errors['credentials']; ?></span>
				<?php } ?>
				<?php if (!empty($success)) { ?>
					<span style="color: green; text-align: center; display: block;"><?= $success; ?></span>
				<?php } ?>
				<form id="uploadform" method="post" action="" enctype="multipart/form-data">
					<?php if (!empty($errors['title'])) { ?>
						<br><span style="color: red;"><?= $errors['title']; ?></span>
					<?php } ?>
					<label for="title">Blog Title</label>
					<input type="text" name="title" id="title" placeholder="Blog Title..">
					<div id="post_image_viewer">
						<img src="" style="width: 100%; height: 100%; border-radius: 50%;">
					</div>
					<?php if (!empty($errors['image'])) { ?>
						<br><span style="color: red;"><?= $errors['image']; ?></span>
					<?php } ?>
					<label for="image">Image</label>
					<input type="file" name="image" id="image" placeholder="Blog Image.." oninput="display()">
					<?php if (!empty($errors['status'])) { ?>
						<br><span style="color: red;"><?= $errors['status']; ?></span>
					<?php } ?>
					<select name="status">
						<option value="active">Publish</option>
						<option value="inactive">Save as draft</option>
					</select>
					<br>
					<?php if (!empty($errors['post'])) { ?>
						<span style="color: red;"><?= $errors['post']; ?></span>
					<?php } ?>
					<label for="post">Blog Posts</label>
					<textarea type="text" name="post" id="post" placeholder="Blog Post.."></textarea>
					<input type="submit" name="submit" value="submit">
				</form>
			</div>
		</div>
	</div>

<?php require('footer.php') ?>