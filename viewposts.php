<?php require('header2.php'); ?>

<div class="page-content">
	<section class="content-section">
		<h2 style="display: block; text-align: center;">My Posts</h2>
		<table id="table">
			<tr>
				<th>S/N</th>
				<th>Image</th>
				<th>Title</th>
				<th>Post</th>
				<th>Status</th>
				<th>Date Created</th>
				<th>Action</th>
			</tr>

			<?php 
			$posts = getUserposts();
			$i = 1;
			while ($post = mysqli_fetch_assoc($posts)) {

				?>
				<tr>
					<td><?= $i++?></td>
					<td><img src="img/<?= $post['image']?>" style="max-width: 90%; max-height: 100%;"></td>
					<td><?= $post['title']?></td>
					<td><?= $post['post']?></td>
					<td><?= $post['status']?></td>
					<td><?= $post['created_at']?></td>
					<td><a href="delete.php?id=<?= $post['id'] ?>" style="background: red; padding: 5px;">Delete!</a><br><br><a href="edit.php?id=<?= $post['id'] ?>" style="background: blue; padding: 5px;">Edit!</a></td>
				</tr>

				<?php
                        // if ($i == 5) {
                        // 	break;
                        // }
			} ?>
		</table>
	</section>
</div>

<?php require('footer.php'); ?>