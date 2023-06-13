<?php
/* Template Name: Order Form */

ob_start(); // Start output buffering
?>

<?php get_header("custom"); ?>

<!-- ORDER TABLE START -->
<section class="order">
    <div class="container">
        <div class="order-form-heading">
            <div class="order-head">
                <h2>order form</h2>
            </div>
            <div class="order-search">
                <input class="" id="" type="text" placeholder="Search for item" aria-label="" />
                <a href="#"><i class="fas fa-search"></i></a>
            </div>
        </div>
        <!-- TABLE START -->
        <div class="table-outer table-responsive">
            <div class="table-inner">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th colspan="1">Sr No.</th>
                            <th colspan="3">Item</th>
                            <th colspan="2">Model</th>
                            <th colspan="2">Quantity</th>
                            <th colspan="3">Description</th>
                            <th colspan="1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- ROW-1 -->

                        <?php // Check if the cookie exists
                        if (isset($_COOKIE["cart_order"])) {
                            // Get the cookie value
                            $cookie_value = $_COOKIE["cart_order"];
                            // Try to decode the cookie value as a JSON object
                            $items = json_decode($cookie_value, true);
                            // Check if the decoding was successful
                            if (is_array($items)) {
                                // The cookie is in the correct format, so print the items
                                $i = 1;
                                foreach ($items as $item) {
                        ?>
                                    <tr class="">
                                        <td class="align-top" colspan="2" scope="row"><?php echo $i; ?></td>
                                        <td class="align-top" colspan="2"><?php echo get_the_title($item)?></td>
                                        <td class="align-top" colspan="2">1102</td>
                                        <td class="align-top" colspan="2">
                                            <span class="quantity">1</span>
                                            <input type="number" min="1" class="edit-quantity" style="display: none;" value="12" />
                                        </td>
                                        <td class="align-top" colspan="2">
                                            <div class="table-desc">
                                                <?php
                                                $product_taxonomies = wp_get_post_terms($item, 'thread size');
                                                // Loop through the taxonomies
                                                foreach ($product_taxonomies as $taxonomy) {
                                                    // Output the taxonomy name
                                                ?>
                                                    <p>Thread: <?php echo $taxonomy->name; ?></p>
                                                <?php
                                                    echo '<br>';
                                                }
                                                ?>

                                                <?php
                                                $product_taxonomies = wp_get_post_terms($item, 'height');
                                                // Loop through the taxonomies
                                                foreach ($product_taxonomies as $taxonomy) {
                                                    // Output the taxonomy name
                                                ?>
                                                    <p>Height: <?php echo $taxonomy->name; ?></p>
                                                <?php
                                                    echo '<br>';
                                                }
                                                ?>

                                                <?php
                                                $product_taxonomies = wp_get_post_terms($item, 'color');
                                                // Loop through the taxonomies
                                                foreach ($product_taxonomies as $taxonomy) {
                                                    // Output the taxonomy name
                                                ?>
                                                    <p><?php echo $taxonomy->name; ?></p>
                                                <?php
                                                    echo '<br>';
                                                }
                                                ?>
                                            </div>
                                        </td>
                                        <td colspan="2">
                                            <div class="table-edit-outer">
                                                <div class="table-edit">
                                                    <!-- <a href="#"><img src="<?php echo get_template_directory_uri() . "/images/edit.png"; ?>" alt="" /></a> -->
                                                    <a href="#" class="edit-button"><img src="<?php echo get_template_directory_uri() . "/images/edit.png"; ?>" alt="Edit" /></a>


                                                </div>
                                                <div class="table-edit">
                                                    <a href="#" class="delete-button" data-item="<?php echo $item; ?>"><img src="<?php echo get_template_directory_uri() . "/images/deletel.png"; ?>" alt="Delete" /></a>
                                                </div>
                                            </div>
                                        </td>
                                        <?php $i++; ?>
                                    </tr>
                        <?php
                                }
                            } else {
                                // The cookie is not in the correct format, so print an error message
                                echo "Invalid cookie format.";
                            }
                        } else {
                            // The cookie does not exist, so print a message
                            echo "No items in the order form.";
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- TABLE END -->
        <div class="response_get">

        </div>

        <div class="form-btn">
            <a href="#">Add Item <i class="fas fa-plus"></i></a>
        </div>
    </div>
</section>
<!-- ORDER TABLE END -->

<!-- SHIPPING DETAIL SEC START -->
<section class="shipping-detail">
    <div class="container">
        <div class="order-form-heading">
            <div class="order-head">
                <h2>Shipping Detail</h2>
            </div>
        </div>
        <div class="shipping-outer">
            <div class="container">
                <div class="shipping-form">
                    <!-- NAME -->
                    <div class="form-customer-name margin">
                        <div class="first-name">
                            <label for="">First Name</label>
                            <input type="text">
                        </div>
                        <div class="last-name">
                            <label for="">Last Name</label>
                            <input type="text">
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="form-customer-name margin">
                        <div class="email">
                            <label for="">Email</label>
                            <input type="email">
                        </div>
                    </div>
                    <!-- COMPANY NAME -->
                    <div class="form-customer-name margin">
                        <div class="company">
                            <label for="">Company Name</label>
                            <input type="text">
                        </div>
                    </div>
                    <!-- PHONE NUMBER -->
                    <div class="form-customer-name margin">
                        <div class="company">
                            <label for="">Phone Number</label>
                            <input type="text">
                        </div>
                    </div>
                    <!-- ADDRESS -->
                    <div class="form-customer-name text">
                        <div class="address">
                            <label for="">Address</label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- SHIPPING DETAIL SEC END -->

<?php get_footer(); ?>

<?php ob_end_flush();?>
