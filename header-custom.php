<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo get_the_title(); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gs tatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700&display=swap" rel="stylesheet" />
  <?php wp_head(); ?>
</head>
<body>
<!-- HEADER SEC START -->
<header class="product-header">
    <!-- header top start -->
    <div class="header-top">
      <div class="container">
        <div class="header-outer">
          <div class="top-header-left">
            <ul>
              <li>
                <a href="#"><i class="fa-solid fa-phone" style="color: #db241b"></i> (800) 292 3462</a>
              </li>
              <li>
                <a href="#"><i class="fa-solid fa-location-dot" style="color: #db241b"></i> 194 Hickory Springs
                  Industries Dr. Canton, GA 30115</a>
              </li>
            </ul>
          </div>
          <div class="top-header-right">
            <div class="header-search">
              <form role="search">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
              </form>
              <a href="#">
                <i class="fa-solid fa-magnifying-glass" style="color: #e5241b"></i>
              </a>
            </div>
            <div class="header-catolog">
              <a href="#">Catalog <img src="<?php echo get_template_directory_uri() .
                  "/images/arrow-down.png"; ?>" alt="" /></a>
            </div>
            <div class="header-user">
              <img src="<?php echo get_template_directory_uri() .
                  "/images/account-s.png"; ?>" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- header top end -->

    <!--  header bottom start -->
    <div class="header-bottom-outer">
      <div class="container">
        <div class="header-menu">
          <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <div class="top-header-logo">
                <a href="#"><img src="<?php echo get_template_directory_uri() .
                    "/images/header-logo.png"; ?>" alt=""></a>
              </div>
              <div class="hamburger navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                id="hamburger-1">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
              </div>

              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <?php wp_nav_menu([
                      "theme_location" => "my-custom-menu",
                      "menu_class" => "navbar-nav",
                      "container" => "div",
                      "container_class" => "collapse navbar-collapse",
                  ]); ?>
                  <li class="nav-item header-logo">
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() .
                        "/images/header-logo.png"; ?>" alt="" /></a>
                  </li>
                  <?php wp_nav_menu([
                      "theme_location" => "my-custom-menu-right",
                      "menu_class" => "navbar-nav",
                      "container" => "div",
                      "container_class" => "collapse navbar-collapse custom-class",
                  ]); ?>
                </ul>
                <div class="header-top">
                  <div class="container">
                    <div class="header-outer">
                      <div class="top-header-left">
                        <ul>
                          <li>
                            <a href="#"><i class="fa-solid fa-phone" style="color: #db241b"></i> (800) 292 3462</a>
                          </li>
                          <li>
                            <a href="#"><i class="fa-solid fa-location-dot" style="color: #db241b"></i> 194 Hickory
                              Springs
                              Industries Dr. Canton, GA 30115</a>
                          </li>
                        </ul>
                      </div>
                      <div class="top-header-right">
                        <div class="header-search">
                          <form role="search">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                          </form>
                          <a href="#">
                            <i class="fa-solid fa-magnifying-glass" style="color: #e5241b"></i>
                          </a>
                        </div>
                        <div class="header-catolog">
                          <a href="#">Catalog <img src="<?php echo get_template_directory_uri() .
                              "/images/arrow-down.png"; ?>" alt="" /></a>
                        </div>
                        <div class="header-user">
                          <img src="<?php echo get_template_directory_uri() .
                              "/images/account-b.png"; ?>" alt="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <!--  header bottom end -->
  </header>
  <!-- HEADER SEC END -->
</body>
</html>