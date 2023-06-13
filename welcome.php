<?php
/* Template Name: Welcome */
?>


<?php get_header("welcome"); ?>


    


<!-- WELCOME SEC STARTS -->
<section class="welcome">
        <div class="welcome-outterwrap">
            <div class="welcome-form-wrap">
                <div class="welcome-form-image">
                    <img src="<?php echo get_template_directory_uri() .
                        "/images/welcome-image.png"; ?>" alt="">
                    <img src="<?php echo get_template_directory_uri() .
                        "/images/White Logo.png"; ?>" alt="">
                </div>
                <div class="welcome-form-heading">
                    <h1>welcome</h1>
                </div>
                <div class="welcome-social-link">
                    <a href="#"><i class="fa-brands fa-google"></i></a>
                    <a href="#"><i class="fa-brands fa-apple"></i></a>
                </div>
                <div class="welcome-form-block">
                    <?php echo do_shortcode("[registration_form]"); ?>
                </div>
            </div>
            <div class="welcome-links-wrap">
                <div class="welcome-content">
                    <div class="welcome-content-image">
                        <img src="<?php echo get_template_directory_uri() .
                            "/images/Contact-Us-bg.png"; ?>" alt="">

                    </div>
                    <div class="welcome-content-menu">
                        <div class="footer-menu">
                            <div class="footer-links">
                                <h3>Quiks Links</h3>
                                <a href="#">About</a>
                                <a href="#">Products</a>
                                <a href="#">Order Form</a>
                                <a href="#">Sign Up</a>
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
                                <a href="#"><i class="fa-solid fa-location-dot" style="color: #db241b"></i> 194 Hickory
                                    Springs Industries
                                    Dr. Canton, GA 30115</a>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="bg-image" src="<?php echo get_template_directory_uri() .
                    "/images/welcome.png"; ?>" alt="">
            </div>
        </div>

    </section>
    <!-- WELCOME SEC ENDS -->





<script>
function goToSignin() {
    window.location.href = '<?php echo esc_url(
        get_permalink(get_page_by_title("welcome back"))
    ); ?>';
}
</script>


