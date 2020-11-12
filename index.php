<?php require('header.php'); ?>



<div class="page-content">
    <section id="featured" class="content-section">
        <div class="section-heading">
            <h1>Football<br><em>Update</em></h1>
            <p>Praesent pellentesque efficitur magna, 
                <br>sed pellentesque neque malesuada vitae.
            </p>
        </div>
        <div class="section-content">
            <div class="owl-carousel owl-theme">

                <?php 
                $posts = getposts();
                while ($post = mysqli_fetch_assoc($posts)) {?>
                    <div class="item">
                    <div class="image">
                        <img src="img/<?= $post['image']?>" alt="" style="max-width: 90%; max-height: 100%;">
                        <div class="featured-button button">
                            <a href="#projects">View post</a>
                        </div>
                    </div>
                    <div class="text-content">
                        <h4><?= $post['title']?></h4>
                        <span><?= $post['created_at']?></span>
                        <p><?= $post['post']?></p>
                    </div>
                </div> 
               
               <?php }
                 ?>
               

            </div>
        </div>
    </section>



    <section id="blog" class="content-section">
        <div class="section-heading">
            <h1>Blog<br><em>Entries</em></h1>
            <p>Curabitur hendrerit mauris mollis ipsum vulputate rutrum. 
                <br>Phasellus luctus odio eget dui imperdiet.</p>
            </div>
            <div class="section-content">
                <div class="tabs-content">
                    <div class="wrapper">
                        <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                          <li><a href="#tab1" class="active">July 2018</a></li>
                          <li><a href="#tab2">June 2018</a></li>
                          <li><a href="#tab3">May 2018</a></li>
                          <li><a href="#tab4">April 2018</a></li>
                      </ul>
                      <section id="first-tab-group" class="tabgroup">
                        <div id="tab1">
                            <ul>
                                <li>
                                    <div class="item">
                                        <img src="img/blog_1.jpg" alt="">
                                        <div class="text-content">
                                            <h4>Integer ultrices augue</h4>
                                            <span>25 July 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <img src="img/blog_2.jpg" alt="">
                                        <div class="text-content">
                                            <h4>Cras commodo odio ut</h4>
                                            <span>16 July 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <img src="img/blog_3.jpg" alt="">
                                        <div class="text-content">
                                            <h4>Sed at massa turpis</h4>
                                            <span>10 July 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="tab2">
                            <ul>
                                <li>
                                    <div class="item">
                                        <img src="img/blog_3.jpg" alt="">
                                        <div class="text-content">
                                            <h4>Sed at massa turpis</h4>
                                            <span>30 June 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <img src="img/blog_1.jpg" alt="">
                                        <div class="text-content">
                                            <h4>Lorem ipsum dolor sit</h4>
                                            <span>24 June 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <img src="img/blog_2.jpg" alt="">
                                        <div class="text-content">
                                            <h4>Cras commodo odio ut</h4>
                                            <span>12 June 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="tab3">
                            <ul>
                                <li>
                                    <div class="item">
                                        <img src="img/blog_2.jpg" alt="">
                                        <div class="text-content">
                                            <h4>Cras commodo odio ut</h4>
                                            <span>26 May 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <img src="img/blog_1.jpg" alt="">
                                        <div class="text-content">
                                            <h4>Lorem ipsum dolor sit</h4>
                                            <span>22 May 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <img src="img/blog_3.jpg" alt="">
                                        <div class="text-content">
                                            <h4>Integer ultrices augue</h4>
                                            <span>8 May 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="tab4">
                            <ul>
                                <li>
                                    <div class="item">
                                        <img src="img/blog_1.jpg" alt="">
                                        <div class="text-content">
                                            <h4>Lorem ipsum dolor sit</h4>
                                            <span>26 April 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>                                
                                <li>
                                    <div class="item">
                                        <img src="img/blog_3.jpg" alt="">
                                        <div class="text-content">
                                            <h4>Integer ultrices augue eu</h4>
                                            <span>24 April 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="item">
                                        <img src="img/blog_2.jpg" alt="">
                                        <div class="text-content">
                                            <h4>Cras commodo odio ut</h4>
                                            <span>20 April 2018</span>
                                            <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>

                                            <div class="accent-button button">
                                                <a href="#contact">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section> 
                </div>
            </div>
        </div>
    </section>



    <section id="projects" class="content-section">
        <div class="section-heading">
            <h1><em>Gallery</em></h1>
            <p>We sell all Jersey, 
                <br>Contact us to get your favorite Jersey.</p>
            </div>
            <div class="section-content">
                <div class="masonry">
                    <div class="row">
                        <div class="item">
                            <div class="col-md-8">
                                <a href="img/portfolio_big_1.jpg" data-lightbox="image"><img src="img/portfolio_1.jpg" alt="image 1"></a>
                            </div>
                        </div>
                        <div class="item second-item">
                            <div class="col-md-4">
                                <a href="img/portfolio_big_2.jpg" data-lightbox="image"><img src="img/portfolio_2.jpg" alt="image 2"></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-4">
                                <a href="img/portfolio_big_3.jpg" data-lightbox="image"><img src="img/portfolio_3.jpg" alt="image 3"></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-4">
                                <a href="img/portfolio_big_4.jpg" data-lightbox="image"><img src="img/portfolio_4.jpg" alt="image 4"></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-8">
                                <a href="img/portfolio_big_5.jpg" data-lightbox="image"><img src="img/portfolio_5.jpg" alt="image 5"></a>
                            </div>
                        </div>
                    </div>
                    <div class="accent-button button">
                        <a href="#contact">Contact us</a>
                    </div>
                </div>
            </div>            
        </section>
        <section id="video" class="content-section">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h1>Live Matches!.</h1>
                        <p>Praesent pellentesque efficitur magna, sed pellentesque neque malesuada vitae.</p>
                    </div>
                    <div class="text-content">
                      <!--   <p>In eget ipsum sed lorem vehicula luctus. Curabitur non dolor rhoncus, hendrerit justo sit amet, vestibulum turpis. Pellentesque id auctor tellus, vel ultricies augue. Duis condimentum aliquet blandit. Fusce rhoncus et eros ut pharetra. Phasellus convallis ultricies ligula ac gravida.</p> -->
                  </div>
                  <div class="accent-button button">
                    <a href="#blog">Continue Reading</a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="box-video">
                    <div class="bg-video" style="background-image: url(img/juvebarca.jpg);">
                        <div class="bt-play">Play</div>
                    </div>
                    <div class="video-container">
                        <iframe width="100%" height="520" src="https://www.youtube.com/embed/j-_7Ub-Zkow?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="content-section">

<!--                 <div style="
                -webkit-animation: animate-preloader 1s linear infinite;
            animation: animate-preloader 1s linear infinite;
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
        }">Job vacancy for an upcoming talented writter!</div> -->
              <!--   <div id="map">
                
                	How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click "Share" and choose "Embed map" tab
                           4. Copy only URL and paste it within the src="" field below
                   
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1197183.8373802372!2d-1.9415093691103689!3d6.781986417238027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb96f349e85efd%3A0xb8d1e0b88af1f0f5!2sKumasi+Central+Market!5e0!3m2!1sen!2sth!4v1532967884907" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div> -->
                <div id="contact-content">
                    <div class="section-heading">
                        <h1>Contact<br><em>Jito</em></h1>
                        <p>To Join us or Place an order,
                            <br>Please Leave us a message.</p>

                        </div>
                        <div class="section-content">
                            <form id="contact" action="#" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                      <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-4">
                                  <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                                </fieldset>
                            </div>
                            <div class="col-md-4">
                              <fieldset>
                                <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." required="">
                            </fieldset>
                        </div>
                        <div class="col-md-12">
                          <fieldset>
                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                        </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="btn">Send Message Now</button>
                    </fieldset>
                </div>
            </div>
        </form>
    </div>
</div>
</section>



<?php require('footer.php'); ?>