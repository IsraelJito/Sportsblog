<?php 
require('header2.php'); 
if (isset($_POST['submit'])) {
    if (profile_pic($_FILES)) {
        $success = "profile picture successfully uploaded!";
    }
} 


?>


<div class="page-content">
    <section class="content-section">
        <div style="padding: 5px;">
            <div style="height: 200px; width: 200px; border-radius: 50%; background-color: #ccc;">
                <img src="<?= $_FILES['profile_pic']['tmp_name'] ?>" alt="" style="height:100%; width:100%; border-radius: 50%; object-fit: cover;">
            </div>
            <form method="post" action="" enctype="multipart/form-data">
                <input type="file" name="profile_pic" id="profile_pic" oninput="work()">
                <div style="display: none;" id="submit">
                    <input type="submit" name="submit" value="save"  class="profile_pic_buttons">
                    <input type="submit" name="cancel" class="profile_pic_buttons" value="cancel" onclick="profile_pic_cancel()">
                </div>
            </form>
            <?php if (!empty($success)) {?>
                <span style="color: green;"><?= $success?></span>
           <?php } ?>
        </div>
        
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
                                <div style="height: 350px;">
                                    <img src="img/<?= $post['image']?>" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
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

    <script>
        function work (){
            var but = document.querySelector('#profile_pic').value;
            if (but != "") {
                document.querySelector('#submit').style.display = "block"; 
            }
        }

        function profile_pic_cancel() {
            var but = document.querySelector('#profile_pic').value;
            if (but !=  "") {
                but = "";
            }else {

            }
        }

    </script>


    <?php require('footer.php'); ?>