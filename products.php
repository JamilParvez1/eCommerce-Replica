<?php
/* Template Name: Products */
?>
<?php get_header("custom"); ?>


<!-- BREAD CRUM SEC STARTS -->
<section class="breadcrumb">
    <div class="container">
        <ul>
            <li><a href="#0">products</a></li>
            <li><a href="#0">categories</a></li>
        </ul>
    </div>

</section>
<!-- BREAD CRUM SEC ENDS -->
<!-- PRODUCT SEC STARTS -->
<section class="product-page">
    <div class="container">
        <div class="product-outterwrap">
            <div class="side_bar">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne">
                                Categories
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <ul class="categories">
                                    <?php // Replace 'your_taxonomy_slug' with the slug of your custom taxonomy.


                                    $taxonomy_slug = "categories"; // Get the terms for the custom taxonomy.
                                    $terms = get_terms([
                                        "taxonomy" => $taxonomy_slug,
                                        "hide_empty" => false, // Set to 'true' if you want to exclude empty terms.
                                    ]);
                                    // Check if any terms exist.
                                    if (
                                        !empty($terms) &&
                                        !is_wp_error($terms)
                                    ) {
                                        echo "<ul>"; // Loop through each term and display its name and link.
                                        echo '<form id="filter-form">';
                                        foreach ($terms as $term) {
                                            $term_link = get_term_link($term);
                                            echo '<li>
                                                    <input class="category-filter" type="checkbox" name="' .
                                                $term->name .
                                                '" value="' .
                                                $term->term_id .
                                                '" />
                                                    <a href="javascript:void(0);" >' .
                                                $term->name .
                                                "</a>
                                                </li>";
                                        }
                                        echo "</form>";
                                        echo "</ul>";
                                    }
                                    ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseTwo">
                                Hex Size
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <ul class="categories">
                                    <?php // Replace 'your_taxonomy_slug' with the slug of your custom taxonomy.


                                    $taxonomy_slug = "hex size"; // Get the terms for the custom taxonomy.
                                    $terms = get_terms([
                                        "taxonomy" => $taxonomy_slug,
                                        "hide_empty" => false, // Set to 'true' if you want to exclude empty terms.
                                    ]);
                                    // Check if any terms exist.
                                    if (
                                        !empty($terms) &&
                                        !is_wp_error($terms)
                                    ) {
                                        echo "<ul>"; // Loop through each term and display its name and link.
                                        foreach ($terms as $term) {
                                            $term_link = get_term_link($term);
                                            echo '<li><input class="hex-filter" type="checkbox" name="' .
                                                $term->name .
                                                '" value="' .
                                                $term->term_id .
                                                '" />
                                                <a href="javascript:void(0);">' .
                                                $term->name .
                                                "</a></li>";
                                        }
                                        echo "</ul>";
                                    }
                                    ?>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseThree">
                                Thread Size
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <ul class="categories">
                                    <?php // Replace 'your_taxonomy_slug' with the slug of your custom taxonomy.


                                    $taxonomy_slug = "thread size"; // Get the terms for the custom taxonomy.
                                    $terms = get_terms([
                                        "taxonomy" => $taxonomy_slug,
                                        "hide_empty" => false, // Set to 'true' if you want to exclude empty terms.
                                    ]);
                                    // Check if any terms exist.
                                    if (
                                        !empty($terms) &&
                                        !is_wp_error($terms)
                                    ) {
                                        echo "<ul>"; // Loop through each term and display its name and link.
                                        foreach ($terms as $term) {
                                            $term_link = get_term_link($term);
                                            echo '<li><input class="thread-filter" type="checkbox" name="' .
                                                $term->name .
                                                '" value="' .
                                                $term->term_id .
                                                '" />
                                            <a href="' .
                                                esc_url($term_link) .
                                                '">' .
                                                $term->name .
                                                "</a></li>";
                                        }
                                        echo "</ul>";
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseFour">
                                Height
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <ul class="categories">
                                    <?php // Replace 'your_taxonomy_slug' with the slug of your custom taxonomy.


                                    $taxonomy_slug = "height"; // Get the terms for the custom taxonomy.
                                    $terms = get_terms([
                                        "taxonomy" => $taxonomy_slug,
                                        "hide_empty" => false, // Set to 'true' if you want to exclude empty terms.
                                    ]);
                                    // Check if any terms exist.
                                    if (
                                        !empty($terms) &&
                                        !is_wp_error($terms)
                                    ) {
                                        echo "<ul>"; // Loop through each term and display its name and link.
                                        foreach ($terms as $term) {
                                            $term_link = get_term_link($term);
                                            echo '<li><input class="height-filter" type="checkbox" name="' .
                                                $term->name .
                                                '" value="' .
                                                $term->term_id .
                                                '" />
                                            <a href="' .
                                                esc_url($term_link) .
                                                '">' .
                                                $term->name .
                                                "</a>
                                            </li>";
                                        }
                                        echo "</ul>";
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseFive">
                                Color
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <ul class="categories">
                                    <?php // Replace 'your_taxonomy_slug' with the slug of your custom taxonomy.


                                    $taxonomy_slug = "color"; // Get the terms for the custom taxonomy.
                                    $terms = get_terms([
                                        "taxonomy" => $taxonomy_slug,
                                        "hide_empty" => false, // Set to 'true' if you want to exclude empty terms.
                                    ]);
                                    // Check if any terms exist.
                                    if (
                                        !empty($terms) &&
                                        !is_wp_error($terms)
                                    ) {
                                        echo "<ul>"; // Loop through each term and display its name and link.
                                        foreach ($terms as $term) {
                                            $term_link = get_term_link($term);
                                            echo '<li><input class="color-filter" type="checkbox" name="' .
                                                $term->name .
                                                '" value="' .
                                                $term->term_id .
                                                '" />
                                            <a href="' .
                                                esc_url($term_link) .
                                                '">' .
                                                $term->name .
                                                "</a>
                                            </li>";
                                        }
                                        echo "</ul>";
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="products-gallery-wrap">
                <div class="result-block">
                    <div class="result-items">
                        <?php
                        $posts = get_posts([
                            "posts_per_page" => 9,
                            "post_type" => "product",
                        ]);
                        $product_count = count($posts);
                        ?>
                        <p>showing <span><?php echo $product_count; ?></span> results out of
                            <span><?php echo $product_count; ?></span></p>
                    </div>

                    <div class="item-add">
                        <!-- <p><span>1</span> item added in order form</p> -->
                        <a href="#">Order Form <i class="fas fa-angle-right"></i> </a>
                    </div>

                </div>

                <div class="products-gallery-block">
                    <?php if ($posts): ?>
                    <?php foreach ($posts as $post):

                        setup_postdata($post);
                        $product_id = get_the_ID();
                        ?>


                    <div class="product-block">
                        <div class="product-block-image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="products-cart-block">
                            <div class="cart-info">
                                <a href="<?php echo get_permalink( $product_id ); ?>">
                                    <h6><?php the_title(); ?></h6>
                                    <p id='prod_ID'>Product ID: <?php the_ID(); ?></p>
                                </a>
                                <?php
                                $product_id = get_the_ID();
                                $taxonomy = "hex size";
                                $terms = get_the_terms($product_id, $taxonomy);
                                if ($terms && !is_wp_error($terms)) {
                                    foreach ($terms as $term) {
                                        echo "<p>" . $term->name . " Hex </p>";
                                    }
                                }
                                ?>
                                <!-- <p><?php the_content(); ?></p> -->
                            </div>

                            <div class="cart-thumbnail">
                            <a href="#" class="product-link" data-product-id="<?php echo $product_id; ?>"><img src="<?php echo get_template_directory_uri() .
    "/images/cart.png"; ?>" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <?php
                    endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>

                <nav aria-label="Page navigation">
                    <ul class="pagination    ">
                        <li class="page-item-pn disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item-pn">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- PRODUCT SEC ENDS -->


<?php get_footer(); ?>
