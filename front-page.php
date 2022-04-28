<?php
    // Calling Header
    get_header();
?>
      <main>
    <div class="page-section features">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="d-flex flex-row">
              <div class="img-fluid mr-3">
                <img src="<?php echo get_template_directory_uri()."/assets/img/icon.png"; ?>" style="width:50px;" alt="">
              </div>
              <div>
                <h5>Awesome Wordpress Theme</h5>
                <p>This theme is built from scratch with all features in place.</p>
              </div>
            </div>
          </div>
  
          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="d-flex flex-row">
              <div class="img-fluid mr-3">
                <img src="<?php echo get_template_directory_uri()."/assets/img/icon.png"; ?>" style="width:50px;" alt="">
              </div>
              <div>
                <h5>Awesome Wordpress Theme</h5>
                <p>This theme is built from scratch with all features in place.</p>
              </div>
            </div>
          </div>
  
          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="d-flex flex-row">
              <div class="img-fluid mr-3">
                <img src="<?php echo get_template_directory_uri()."/assets/img/icon.png"; ?>" style="width:50px;" alt="">
              </div>
              <div>
                <h5>Awesome Wordpress Theme</h5>
                <p>This theme is built from scratch with all features in place.</p>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  
    <div class="page-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 py-3 wow fadeInRight">
            <h2 class="title-section">We're <span class="marked">Awesome</span> People</h2>
            <div class="divider"></div>
            <p>lorem ipsum </p>
            <div class="img-place mb-3">
              <img src="../assets/img/testi_image.png" alt="">
            </div>
            <a href="#" class="btn btn-primary">More Details</a>
            <a href="#" class="btn btn-outline border ml-2">Success Stories</a>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  
    <div class="page-section counter-section">
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="col-lg-4">
            <p>Total Project</p>
            <h2>$<span class="number" data-number="816"></span></h2>
          </div>
          <div class="col-lg-4">
            <p>Happy Clients</p>
            <h2>$<span class="number" data-number="164"></span></h2>
          </div>
          <div class="col-lg-4">
            <p>Branches</p>
            <h2><span class="number" data-number="8"></span></h2>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  
    <div class="page-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 py-3 wow fadeInLeft">
            <h2 class="title-section">We're <span class="marked">here for </span>You</h2>
            <div class="divider"></div>
            <p class="mb-5">lorem ipsum</p>
            <a href="#" class="btn btn-primary">More Details</a>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  

    
  
    <div class="page-section bg-light">
      <div class="container">
        
        <div class="owl-carousel wow fadeInUp" id="testimonials">
          <?php
            $the_query = new WP_Query(array(
              'post_status' => 'publish',
              'post_type'   => 'slider'
            ));

            if($the_query->have_posts()){
              while($the_query->have_posts()){
                $the_query->the_post();
                ?>
                  <div class="item">
                    <div class="row align-items-center">
                      <div class="col-md-6 py-3">
                        <div class="testi-image">
                          <?php
                            echo get_the_post_thumbnail(null, 'image_for_slider', null);
                          ?>
                        </div>
                      </div>
                      <div class="col-md-6 py-3">
                        <div class="testi-content">
                          <p>
                            <?php
                                the_content();
                            ?>
                          </p>
                          <div class="entry-footer">
                            <strong>
                              <?php
                                  echo ucwords(get_the_author());
                              ?>
                            </strong> </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php
              }
            }
          ?>

  
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  
    <div class="page-section border-top">
      <div class="container">
        <div class="text-center wow fadeInUp">
          <div class="subhead">Our Awesome Blog</div>
          <h2 class="title-section">latest <span class="marked">Posts Weekly</span></h2>
          <div class="divider mx-auto"></div>
        </div>
        <div class="row my-5 card-blog-row">
            <?php
              $posts = get_posts();
              foreach($posts as $index => $post){
               // print_r($post);
                if($index == 0){
                  ?>
                    <div class="col-md-6 col-lg-3 py-3 wow fadeInUp">
                      <div class="card-blog">
                        <div class="header">
                          <div class="entry-footer">
                            <div class="post-author">
                              <?php
                               echo ucwords(get_userdata($post->post_author)->display_name);
                              ?>
                            </div>
                            <a href="#" class="post-date">
                              <?php
                                echo date_format(date_create($post->post_date), 'd M Y');
                              ?>
                            </a>
                          </div>
                        </div>
                        <div class="body">
                          <div class="post-title"><a href="<?php the_permalink(); ?>">
                            <?php
                              $post->post_title;
                            ?>
                          </a></div>
                        </div>
                        <div class="footer">
                          <a href="<?php the_permalink(); ?>">Read More <span class="mai-chevron-forward text-sm"></span></a>
                        </div>
                      </div>
                    </div>
                  <?php
                }else{
                  ?>
                    <div class="col-md-6 col-lg-3 py-3 wow fadeInUp">
                      <div class="card-blog">
                        <div class="header">
                          <div class="avatar">
                            <img src="<?php echo get_template_directory_uri()."/assets/img/person/person_1.jpg"; ?>" alt="">
                          </div>
                          <div class="entry-footer">
                            <div class="post-author">
                              <?php
                               echo ucwords(get_userdata($post->post_author)->display_name);
                              ?>
                            </div>
                            <a href="#" class="post-date">
                              <?php
                                echo date_format(date_create($post->post_date), 'd M Y');
                              ?>
                            </a>
                          </div>
                        </div>
                        <div class="body">
                          <div class="post-title"><a href="<?php the_permalink(); ?>">
                          <?php
                              $post->post_title;
                            ?>
                        </a></div>
                          <div class="post-excerpt">
                            <?php
                              the_excerpt();
                              //echo substr($post->post_content, 0, 100);
                            ?>
                          </div>
                        </div>
                        <div class="footer">
                          <a href="<?php the_permalink(); ?>">Read More <span class="mai-chevron-forward text-sm"></span></a>
                        </div>
                      </div>
                    </div>
                  <?php
                } 
              }
            ?>
        </div>
  
        <div class="text-center">
          <a href="<?php echo site_url('/blog'); ?>" class="btn btn-outline-primary rounded-pill">Discover More</a>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  
    <div class="page-section client-section">
      <div class="container-fluid">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 justify-content-center">
          <div class="item wow zoomIn">
            <img src="<?php echo get_template_directory_uri()."/assets/img/clients/airbnb.png"; ?>" alt="">
          </div>
          <div class="item wow zoomIn">
            <img src="<?php echo get_template_directory_uri()."/assets/img/clients/google.png"; ?>" alt="">
          </div>
          <div class="item wow zoomIn">
            <img src="<?php echo get_template_directory_uri()."/assets/img/clients/stripe.png"; ?>" alt="">
          </div>
          <div class="item wow zoomIn">
            <img src="<?php echo get_template_directory_uri()."/assets/img/clients/paypal.png"; ?>" alt="">
          </div>
          <div class="item wow zoomIn">
            <img src="<?php echo get_template_directory_uri()."/assets/img/clients/mailchimp.png"; ?>" alt="">
          </div>
        </div>
      </div> <!-- .container-fluid -->
    </div> <!-- .page-section -->
  </main>

   
<?php
    //Calling Footer
    get_footer();

?>