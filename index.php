<?php
/* Template Name: Homepage */
?>

<?php get_header(); ?>



  <!-- BANNER SEC START -->
  <section class="banner">
    <div class="container">
      <div class="banner-outer">
        <div class="banner-tag">
          <img src="<?php echo get_template_directory_uri() .
              "/images/banner-tag.png"; ?>" alt="" />
        </div>
        <div class="banner-heading">
          <h1>Elevate Your Wheels with Premium Accessories</h1>
        </div>
        <div class="banner-moto">
          <p>Experience a New Level of Style and Performance with Our Wheel Accessories</p>
        </div>
        <div class="banner-btn">
          <a href="<?php echo home_url() . "/products"; ?>">Shop Now</a>
          <a href="<?php echo home_url() . "/welcome"; ?>">Sign Up</a>
        </div>
        <div class="banner-wheel-img">
          <img src="<?php echo get_template_directory_uri() .
              "/images/banner-wheel.png"; ?>" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- BANNER SEC END -->

  <!-- QUALITY SEC START -->
  <section class="quality">
    <div class="container">
      <div class="quality-outer">
        <div class="quality-tag">
          <h2>Get Rolling with WAG's Top Quality Wheel Products</h2>
        </div>
        <div class="quality-desc">
          <p>Since December Of 1990 Wheel Accessories Of GA Has Proudly Established A Solid Reputation Of Providing The
            Automotive Aftermarket As Well As OEM Quality Products, Great Customer Service, And Competitive Pricing.</p>
        </div>
      </div>
      <div class="quality-product">
        <!-- customer 1 -->
        <div class="quality-customer">
          <img src="<?php echo get_template_directory_uri() .
              "/images/value.png"; ?>" alt="" />
          <h3>Our Valued Customer</h3>
          <p>Our Reliable Vendors And Our Dedicated Staff Continue To Be The Foundation For Our Ongoing Success In This
            Competitive Market.</p>
        </div>
        <!-- customer 2 -->
        <div class="quality-customer">
          <img src="<?php echo get_template_directory_uri() .
              "/images/gurantee.png"; ?>" alt="" />
          <h3>Guarantee Product Quality</h3>
          <p>Everything We Offer From Lug Nuts To Wheel Locks To Wheel Adapters And Everyhthing In Between Has Our Stamp
            Of Approval And With That, Our Promise Of Quality Products.</p>
        </div>
        <!-- customer 3 -->
        <div class="quality-customer">
          <img src="<?php echo get_template_directory_uri() .
              "/images/staff.png"; ?>" alt="" />
          <h3>Our Staff</h3>
          <p>From Our Efficient And Dependable Warehouse Personnel To Our Courteous And Knowledgeable Sales Team, We
            Work To Ensure Complete Customer Satisfaction.</p>
        </div>
        <!-- customer 4 -->
        <div class="quality-customer">
          <img src="<?php echo get_template_directory_uri() .
              "/images/dependable.png"; ?>" alt="" />
          <h3>Dependable Service</h3>
          <p>High Quality, Dependable Service, Competitive Pricing And Reliable Delivery - All Features You An Count On
            From Wheel Accessories Of GA.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- QUALITY SEC END -->

  <!-- PRODUCT SEC START -->
  <section class="product">
    <div class="container">
      <div class="product-outer">
        <div class="product-heading">
          <h2>Products</h2>
        </div>
        <div class="product-btn">
          <a href="<?php echo home_url() . "/products"; ?>">See All</a>
        </div>
      </div>
      <div class="product-slider">
        <div class="splide" role="group" aria-label="Splide Basic HTML Example">
          <div class="splide__track">
            <ul class="splide__list">
              <!-- nuts 1 -->
              <li class="splide__slide">
                <div class="nuts-img">
                  <img src="<?php echo get_template_directory_uri() .
                      "/images/nuts.png"; ?>" alt="" />
                </div>
                <div class="nut-btn">
                  <a href="#" class="stretched-link">Lug Nuts</a>
                  <i class="fa-solid fa-chevron-right"></i>
                </div>
              </li>
              <!-- nuts 2 -->
              <li class="splide__slide">
                <div class="nuts-img">
                  <img src="<?php echo get_template_directory_uri() .
                      "/images/factory-nuts.png"; ?>" alt="" />
                </div>
                <div class="nut-btn">
                  <a href="#" class="stretched-link">Factory Lug Nuts</a>
                  <i class="fa-solid fa-chevron-right"></i>
                </div>
              </li>
              <!-- nuts 3 -->
              <li class="splide__slide">
                <div class="nuts-img">
                  <img src="<?php echo get_template_directory_uri() .
                      "/images/spline-drive.png"; ?>" alt="" />
                </div>
                <div class="nut-btn">
                  <a href="#" class="stretched-link">Spline Drive</a>
                  <i class="fa-solid fa-chevron-right"></i>
                </div>
              </li>
              <!-- nuts 4 -->
              <li class="splide__slide">
                <div class="nuts-img">
                  <img src="<?php echo get_template_directory_uri() .
                      "/images/wheel-locks.png"; ?>" alt="" />
                </div>
                <div class="nut-btn">
                  <a href="#" class="stretched-link">Wheel Locks</a>
                  <i class="fa-solid fa-chevron-right"></i>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- PRODUCT SEC END -->

  <!-- OFFER SEC START -->
  <section class="offer">
    <div class="container">
      <div class="offer-bg">
        <div class="offer-data">
          <p>Special Offer</p>
          <h2>Get Upto 15% Off This Weekday On All Items</h2>
          <a href="<?php echo home_url() . "/products"; ?>">Shop Now</a>
        </div>
      </div>
    </div>
  </section>
  <!-- OFFER SEC END -->

  <?php get_footer();
?>
