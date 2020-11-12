<?php require('header2.php'); ?>

    <div class="page-content">
        <section class="content-section">
            <h2>Welcome <?= $user['name'] ?></h2>
            <section id="first-tab-group" class="tabgroup">
                <div id="tab1">
                    <ul>

                        <?php 
                        $posts = getUserposts();
                        $i = 0;
                        while ($post = mysqli_fetch_assoc($posts)) {?>
                        <li style="list-style: none; padding: 20px; margin-bottom: 50px;">
                            <div class="item">
                                <img src="img/<?= $post['image']?>" alt="" style="max-width: 70%;">
                                <div class="text-content">
                                    <h4><?= $post['title']?></h4>
                                    <span><?= $post['created_at']?></span>
                                    <p><?= $post['post']?></p>

                                    <div>
                                        <a href="edit.php">Edit Post</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                        
                    </ul>
                </div>
            </section>
            
        </div>


        <?php require('footer.php'); ?>