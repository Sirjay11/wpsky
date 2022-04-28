<footer class="page-footer">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-6 py-3">
          <h3>Test<span class="text-primary">Website.</span></h3>
          <p>Something about this website.</p>

          <p><a href="#" >some@gmail.com</a></p>
          <p><a href="#">+00 1111 2222 3333</a></p>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Check More </h5>
          <ul class="footer-menu">
          <?php
              $categories = get_categories();
              foreach($categories as $category){
                echo "<li><a href='".get_category_link($category->term_id)."'>". $category->name."</a></li>";
              }

              wp_reset_postdata();
            ?>
          </ul>
        </div>
        <div class="col-lg-3 py-3">
              <h5>Explore</h5>
              <?php
                $args = array(
                  'theme_location'=> 'secondary',
                  'menu_class'    => 'footer-menu' // will add in ul
                );

                wp_nav_menu($args);
              ?>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 py-2">
          <p id="copyright">&copy; 2022 <a href="https://asda.com/">TestWebsite</a>. All rights reserved</p>
        </div>
      </div>
    </div> <!-- .container -->
  </footer> <!-- .page-footer -->

<?php
    wp_footer();
?>

</body>
</html>