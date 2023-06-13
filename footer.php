<!-- FOOTER SEC START -->
<footer>
    <div class="container">
      <div class="hear">
        <div class="hear-outer">
          <div class="hear-data">
            <h2>We Would Love To Hear From You!</h2>
          </div>
          <div class="hear-form">
            <input class="form-control" placeholder="Name" />
            <input class="form-control" placeholder="Email" />
            <input class="form-control" placeholder="Phone" />
            <textarea name="" id="" placeholder="Query"></textarea>
            <a href="#">Send</a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-outer">
      <div class="container">
        <div class="footer-heading">
          <h2>We're Passionate About Wheels, And It Shows In Everything We Do</h2>
        </div>
        <div class="footer-inner">
          <div class="footer-data">

            <p>From our extensive range of high-quality products to our exceptional customer service, we're committed to
              providing our customers with the best possible experience. Shop with confidence at WAG and discover why
              we're the go-to choice for wheel accessory enthusiasts worldwide.</p>
            <div class="footer-btn">
              <a href="#">Catalog <img src="<?php echo get_template_directory_uri() .
                  "/images/arrow-down-foot.png"; ?>" alt="" /></a>
            </div>
          </div>
          <div class="footer-menu">
            <div class="footer-links">
              <h3>Quiks Links</h3>
              <a href="#">About</a>
              <a href="#">Products</a>
              <a href="#">Order Form</a>
              <a href="<?php echo home_url() . "/welcome"; ?>">Sign Up</a>
            </div>
            <div class="footer-links">
              <h3>Support</h3>
              <a href="#">FAQ's</a>
              <a href="#">Policies</a>
              <a href="#">Contact</a>
            </div>
            <div class="footer-links">
              <h3>Contact</h3>
              <a href="#"><i class="fa-solid fa-phone" style="color: #db241b"></i> (800) 292 3462</a>
              <a href="#"><i class="fa-solid fa-location-dot" style="color: #db241b"></i> 194 Hickory Springs Industries
                Dr. Canton, GA 30115</a>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <p>copyright © 2023 WAG - all rights reserved</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- FOOTER SEC END -->

  <?php wp_footer(); ?>


  </body>
</html>