<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com">

  <title>Test Website</title>

   <?php
    wp_head();
   ?>

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-float">
      <div class="container">
        <a href="<?php echo site_url('/') ?>" class="navbar-brand">Test<span class="text-primary">Website.</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <?php
                $args = array(
                    'theme_location'  => 'primary',
                    'conatiner_class' => '',
                    'add_li_class'    => 'nav-item',
                    'menu_class'      => 'navbar-nav ml-lg-4 pt-3 pt-lg-0',

                );

                wp_nav_menu($args);
          ?>
        </div>
      </div>
    </nav>


   <?php
    if(is_front_page()){
        ?>
            <div class="page-banner home-banner">
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                    <div class="col-lg-12 py-3 wow fadeInUp">
                        <h1 class="mb-4">Awesome Wordpress Theme</h1>
                        <p class="text-lg mb-5">This theme is built from scratch with all features in place.</p>

                        <a href="#" class="btn btn-primary border text-white">More Info</a>
                    </div>
                    </div>
                </div>
            </div>
        <?php
    }elseif(is_archive()){
    ?>
        <div class="container mt-5">
            <div class="page-banner">
                <div class="row justify-content-center align-items-center h-100">
                <div class="col-md-6">
                    <nav aria-label="Breadcrumb">
                    <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">
                            <?php
                                if(is_author()){
                                    echo "Author Archive";
                                }elseif(is_day()){
                                    echo "Day Archive";
                                }elseif(is_month()){
                                    echo "Month Archive";
                                }elseif(is_year()){
                                    echo "Year Archive";
                                }elseif(is_category()){
                                    echo "Category Archive";
                                }elseif(is_tag()){
                                    echo "Tag Archive";
                                }
                            ?>
                        </li>
                    </ul>
                    </nav>
                    <h1 class="text-center">
                        <?php
                             if(is_author()){
                                echo "Author Archive";
                            }elseif(is_day()){
                                echo "Day Archive";
                            }elseif(is_month()){
                                echo "Month Archive";
                            }elseif(is_year()){
                                echo "Year Archive";
                            }elseif(is_category()){
                                
                                $catName = single_cat_title();
                                echo ucwords($catName);
                            }elseif(is_tag()){
                                 $tagName = single_tag_title();
                                echo ucwords($tagName);
                            }
                            
                        ?>
                    </h1>
                </div>
                </div>
            </div>
        </div>
    <?php
    }
    elseif(is_search()){
    ?>
        <div class="container mt-5">
            <div class="page-banner">
                <div class="row justify-content-center align-items-center h-100">
                <div class="col-md-6">
                    <nav aria-label="Breadcrumb">
                    <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">
                            <?php
                                echo "Search results for:"
                            ?>
                        </li>
                    </ul>
                    </nav>
                    <h1 class="text-center">
                        <?php
                            the_search_query();
                        ?>
                    </h1>
                </div>
                </div>
            </div>
        </div>
    <?php
    }elseif(!is_single()){
        ?>
            <div class="container mt-5">
                <div class="page-banner">
                    <div class="row justify-content-center align-items-center h-100">
                    <div class="col-md-6">
                        <nav aria-label="Breadcrumb">
                        <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">
                                <?php
                                    echo single_post_title();
                                ?>
                            </li>
                        </ul>
                        </nav>
                        <h1 class="text-center">
                            <?php
                                echo single_post_title();
                            ?>
                        </h1>
                    </div>
                    </div>
                </div>
            </div>
        <?php
    }
   ?>