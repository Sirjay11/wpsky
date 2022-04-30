<?php
    // Calling Header
    get_header();


    while(have_posts())
    {
        the_post();
        ?>
              <main>
                    <div class="page-section">
                    <div class="container">
                        <div class="row align-items-center">
                        <div class="col-lg-12 py-3 pr-lg-5">
                            <h2 class="title-section">We're <span class="marked">Dynamic</span> Team of Creatives People</h2>
                            <div class="divider"></div>
                            <p>We provide marketing services to startups & small business to looking for partner for their digital media, design & dev lead generation & communication.</p>
                            <a href="#" class="btn btn-primary">More Details</a>
                            <a href="#" class="btn btn-outline border ml-2">Success Stories</a>
                        </div>
                        </div>
                    </div> <!-- .container -->
                    </div> <!-- .page-section -->
                </main>
        <?php
    }

    //Calling Footer
    get_footer();

?>