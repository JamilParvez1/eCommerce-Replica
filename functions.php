<?php

// Enqueue scripts and styles.
function auto_scripts()
{
    wp_enqueue_style(
        "splide",
        get_template_directory_uri() . "/css/splide.min.css",
        [],
        null
    );

    wp_enqueue_style(
        "slick",
        get_template_directory_uri() . "/css/slick.css",
        [],
        null
    );
    wp_enqueue_style(
        "slick",
        get_template_directory_uri() . "/css/slick-theme.css",
        [],
        null
    );
    wp_enqueue_style(
        "slick",
        get_template_directory_uri() . "/css/slick.min.css",
        [],
        null
    );
    wp_enqueue_style(
        "bootstrapcss",
        get_template_directory_uri() . "/css/bootstrap.min.css",
        [],
        null
    );
    wp_enqueue_style(
        "styles",
        get_template_directory_uri() . "/css/style.css",
        [],
        null
    );
    wp_enqueue_style(
        "mediacss",
        get_template_directory_uri() . "/css/media.css",
        [],
        null
    );

    wp_enqueue_script(
        "font-awesome-icons",
        "https://kit.fontawesome.com/aef4f9c3b0.js",
        [],
        false,
        true
    );


}
add_action("wp_enqueue_scripts", "auto_scripts");

function Prt($arr, $msg = "")
{
    echo "<pre>";
    if ($msg != "") {
        echo $msg;
    }
    print_r($arr);
    echo "</pre>";
}

function add_script()
{
    wp_register_script(
        "minjs",
        get_template_directory_uri() . "/js/jquery-3.6.3.min.js",
        ["jquery"],
        1.1,
        true
    );
    wp_enqueue_script("minjs");

    wp_register_script(
        "bootstrap",
        get_template_directory_uri() . "/js/bootstrap.bundle.min.js",
        ["jquery"],
        1.1,
        true
    );
    wp_enqueue_script("bootstrap");

    wp_register_script(
        "slickjs",
        get_template_directory_uri() . "/js/slick.min.js",
        ["jquery"],
        1.1,
        true
    );
    wp_enqueue_script("slickjs");

    wp_register_script(
        "splide",
        get_template_directory_uri() . "/js/splide.min.js",
        ["jquery"],
        1.1,
        true
    );
    wp_enqueue_script("splide");

    wp_register_script(
        "custom",
        get_template_directory_uri() . "/js/custom.js",
        ["jquery"],
        1.1,
        true
    );
    wp_enqueue_script("custom");
}

function my_custom_menu()
{
    register_nav_menus([
        "my-custom-menu" => _("Left Menu"),
    ]);
}
add_action("init", "my_custom_menu");

function my_custom_right_menu()
{
    register_nav_menus([
        "my-custom-menu-right" => _("Right Menu"),
        "menu_class" => "nav-item",
    ]);
}
add_action("init", "my_custom_right_menu");

add_action("after_setup_theme", "cxc_add_post_thumbnail_supports", 99);
function cxc_add_post_thumbnail_supports()
{
    add_theme_support("post-thumbnails");
}

add_filter("rwmb_meta_boxes", "your_prefix_register_meta_boxes");

add_action("wp_enqueue_scripts", "add_script");

add_theme_support("menus");

function product_post_type()
{
    $labels = [
        "name" => _x("Products", "Post Type General Name", "text_domain"),
        "singular_name" => _x(
            "product",
            "Post Type Singular Name",
            "text_domain"
        ),
        "menu_name" => __("Product", "text_domain"),
        "name_admin_bar" => __("Product", "text_domain"),
        "parent_item_colon" => __("Parent product:", "text_domain"),
        "all_items" => __("All Products", "text_domain"),
        "add_new_item" => __("Add New product", "text_domain"),
        "add_new" => __("Add New", "text_domain"),
        "new_item" => __("New product", "text_domain"),
        "edit_item" => __("Edit product", "text_domain"),
        "update_item" => __("Update product", "text_domain"),
        "view_item" => __("View product", "text_domain"),
        "search_items" => __("Search product", "text_domain"),
        "not_found" => __("Not found", "text_domain"),
        "not_found_in_trash" => __("Not found in Trash", "text_domain"),
        "items_list" => __("Items list", "text_domain"),
        "items_list_navigation" => __("Items list navigation", "text_domain"),
        "filter_items_list" => __("Filter items list", "text_domain"),
    ];
    $args = [
        "label" => __("Product", "text_domain"),
        "description" => __("product post type.", "text_domain"),
        "labels" => $labels,
        "supports" => ["title", "editor", "thumbnail"],
        "taxonomies" => [
            "categories",
            "hex size",
            "thread size",
            "height",
            "color",
        ],
        "hierarchical" => false,
        "public" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "menu_position" => 5,
        "menu_icon" => "dashicons-pressthis",
        "show_in_admin_bar" => true,
        "show_in_nav_menus" => true,
        "can_export" => true,
        "has_archive" => true,
        "exclude_from_search" => false,
        "publicly_queryable" => true,
        "capability_type" => "page",
    ];
    register_post_type("product", $args);
}
add_action("init", "product_post_type", 0);

function product_categories_taxonomy()
{
    $labels = [
        "name" => _x("Categories", "Taxonomy General Name", "text_domain"),
        "singular_name" => _x(
            "categories",
            "Taxonomy Singular Name",
            "text_domain"
        ),
        "menu_name" => __("Categories", "text_domain"),
        "all_items" => __("All Items", "text_domain"),
        "parent_item" => __("Parent Item", "text_domain"),
        "parent_item_colon" => __("Parent Item:", "text_domain"),
        "new_item_name" => __("New Item Name", "text_domain"),
        "add_new_item" => __("Add New Item", "text_domain"),
        "edit_item" => __("Edit Item", "text_domain"),
        "update_item" => __("Update Item", "text_domain"),
        "view_item" => __("View Item", "text_domain"),
        "separate_items_with_commas" => __(
            "Separate items with commas",
            "text_domain"
        ),
        "add_or_remove_items" => __("Add or remove items", "text_domain"),
        "choose_from_most_used" => __(
            "Choose from the most used",
            "text_domain"
        ),
        "popular_items" => __("Popular Items", "text_domain"),
        "search_items" => __("Search Items", "text_domain"),
        "not_found" => __("Not Found", "text_domain"),
        "items_list" => __("Items list", "text_domain"),
        "items_list_navigation" => __("Items list navigation", "text_domain"),
    ];
    $args = [
        "labels" => $labels,
        "hierarchical" => true,
        "public" => true,
        "show_ui" => true,
        "show_admin_column" => true,
        "show_in_nav_menus" => true,
        "show_tagcloud" => true,
    ];
    register_taxonomy("categories", ["product"], $args);
}
add_action("init", "product_categories_taxonomy", 0);

function product_hex_size_taxonomy()
{
    $labels = [
        "name" => _x("Hex Size", "Taxonomy General Name", "text_domain"),
        "singular_name" => _x(
            "hex size",
            "Taxonomy Singular Name",
            "text_domain"
        ),
        "menu_name" => __("Hex Size", "text_domain"),
        "all_items" => __("All Items", "text_domain"),
        "parent_item" => __("Parent Item", "text_domain"),
        "parent_item_colon" => __("Parent Item:", "text_domain"),
        "new_item_name" => __("New Item Name", "text_domain"),
        "add_new_item" => __("Add New Item", "text_domain"),
        "edit_item" => __("Edit Item", "text_domain"),
        "update_item" => __("Update Item", "text_domain"),
        "view_item" => __("View Item", "text_domain"),
        "separate_items_with_commas" => __(
            "Separate items with commas",
            "text_domain"
        ),
        "add_or_remove_items" => __("Add or remove items", "text_domain"),
        "choose_from_most_used" => __(
            "Choose from the most used",
            "text_domain"
        ),
        "popular_items" => __("Popular Items", "text_domain"),
        "search_items" => __("Search Items", "text_domain"),
        "not_found" => __("Not Found", "text_domain"),
        "items_list" => __("Items list", "text_domain"),
        "items_list_navigation" => __("Items list navigation", "text_domain"),
    ];
    $args = [
        "labels" => $labels,
        "hierarchical" => true,
        "public" => true,
        "show_ui" => true,
        "show_admin_column" => true,
        "show_in_nav_menus" => true,
        "show_tagcloud" => true,
    ];
    register_taxonomy("hex size", ["product"], $args);
}
add_action("init", "product_hex_size_taxonomy", 0);

function product_thread_size_taxonomy()
{
    $labels = [
        "name" => _x("Thread Size", "Taxonomy General Name", "text_domain"),
        "singular_name" => _x(
            "thread size",
            "Taxonomy Singular Name",
            "text_domain"
        ),
        "menu_name" => __("Thread Size", "text_domain"),
        "all_items" => __("All Items", "text_domain"),
        "parent_item" => __("Parent Item", "text_domain"),
        "parent_item_colon" => __("Parent Item:", "text_domain"),
        "new_item_name" => __("New Item Name", "text_domain"),
        "add_new_item" => __("Add New Item", "text_domain"),
        "edit_item" => __("Edit Item", "text_domain"),
        "update_item" => __("Update Item", "text_domain"),
        "view_item" => __("View Item", "text_domain"),
        "separate_items_with_commas" => __(
            "Separate items with commas",
            "text_domain"
        ),
        "add_or_remove_items" => __("Add or remove items", "text_domain"),
        "choose_from_most_used" => __(
            "Choose from the most used",
            "text_domain"
        ),
        "popular_items" => __("Popular Items", "text_domain"),
        "search_items" => __("Search Items", "text_domain"),
        "not_found" => __("Not Found", "text_domain"),
        "items_list" => __("Items list", "text_domain"),
        "items_list_navigation" => __("Items list navigation", "text_domain"),
    ];
    $args = [
        "labels" => $labels,
        "hierarchical" => true,
        "public" => true,
        "show_ui" => true,
        "show_admin_column" => true,
        "show_in_nav_menus" => true,
        "show_tagcloud" => true,
    ];
    register_taxonomy("thread size", ["product"], $args);
}
add_action("init", "product_thread_size_taxonomy", 0);

function product_height_taxonomy()
{
    $labels = [
        "name" => _x("Height", "Taxonomy General Name", "text_domain"),
        "singular_name" => _x(
            "height",
            "Taxonomy Singular Name",
            "text_domain"
        ),
        "menu_name" => __("Height", "text_domain"),
        "all_items" => __("All Items", "text_domain"),
        "parent_item" => __("Parent Item", "text_domain"),
        "parent_item_colon" => __("Parent Item:", "text_domain"),
        "new_item_name" => __("New Item Name", "text_domain"),
        "add_new_item" => __("Add New Item", "text_domain"),
        "edit_item" => __("Edit Item", "text_domain"),
        "update_item" => __("Update Item", "text_domain"),
        "view_item" => __("View Item", "text_domain"),
        "separate_items_with_commas" => __(
            "Separate items with commas",
            "text_domain"
        ),
        "add_or_remove_items" => __("Add or remove items", "text_domain"),
        "choose_from_most_used" => __(
            "Choose from the most used",
            "text_domain"
        ),
        "popular_items" => __("Popular Items", "text_domain"),
        "search_items" => __("Search Items", "text_domain"),
        "not_found" => __("Not Found", "text_domain"),
        "items_list" => __("Items list", "text_domain"),
        "items_list_navigation" => __("Items list navigation", "text_domain"),
    ];
    $args = [
        "labels" => $labels,
        "hierarchical" => true,
        "public" => true,
        "show_ui" => true,
        "show_admin_column" => true,
        "show_in_nav_menus" => true,
        "show_tagcloud" => true,
    ];
    register_taxonomy("height", ["product"], $args);
}
add_action("init", "product_height_taxonomy", 0);

function product_color_taxonomy()
{
    $labels = [
        "name" => _x("Color", "Taxonomy General Name", "text_domain"),
        "singular_name" => _x("Color", "Taxonomy Singular Name", "text_domain"),
        "menu_name" => __("Color", "text_domain"),
        "all_items" => __("All Items", "text_domain"),
        "parent_item" => __("Parent Item", "text_domain"),
        "parent_item_colon" => __("Parent Item:", "text_domain"),
        "new_item_name" => __("New Item Name", "text_domain"),
        "add_new_item" => __("Add New Item", "text_domain"),
        "edit_item" => __("Edit Item", "text_domain"),
        "update_item" => __("Update Item", "text_domain"),
        "view_item" => __("View Item", "text_domain"),
        "separate_items_with_commas" => __(
            "Separate items with commas",
            "text_domain"
        ),
        "add_or_remove_items" => __("Add or remove items", "text_domain"),
        "choose_from_most_used" => __(
            "Choose from the most used",
            "text_domain"
        ),
        "popular_items" => __("Popular Items", "text_domain"),
        "search_items" => __("Search Items", "text_domain"),
        "not_found" => __("Not Found", "text_domain"),
        "items_list" => __("Items list", "text_domain"),
        "items_list_navigation" => __("Items list navigation", "text_domain"),
    ];
    $args = [
        "labels" => $labels,
        "hierarchical" => true,
        "public" => true,
        "show_ui" => true,
        "show_admin_column" => true,
        "show_in_nav_menus" => true,
        "show_tagcloud" => true,
    ];
    register_taxonomy("color", ["product"], $args);
}
add_action("init", "product_color_taxonomy", 0);

add_action("wp_ajax_filter_results", "filter_results");
add_action("wp_ajax_nopriv_filter_results", "filter_results");

function filter_results()
{
    $categories = $_POST["categories"]; // Updated to handle an array of categories
    $hex_size = $_POST["hex size"];
    $thread_size = $_POST["thread size"];
    $height = $_POST["height"];
    $color = $_POST["color"];

    // Build your custom query based on the selected filters
    $args = [
        "post_type" => "product",
        "tax_query" => [
            "relation" => "OR",
            [
                "taxonomy" => "categories", // Updated to match your taxonomy slug
                "field" => "slug",
                "terms" => $categories,
            ],
            [
                "taxonomy" => "hex size", // Updated to match your taxonomy slug
                "field" => "slug",
                "terms" => $categories,
            ],
            [
                "taxonomy" => "thread size", // Updated to match your taxonomy slug
                "field" => "slug",
                "terms" => $categories,
            ],
            [
                "taxonomy" => "height", // Updated to match your taxonomy slug
                "field" => "slug",
                "terms" => $categories,
            ],
            [
                "taxonomy" => "color", // Updated to match your taxonomy slug
                "field" => "slug",
                "terms" => $categories,
            ],
        ],
    ];
    $query = new WP_Query($args);

    // Process and display the filtered results
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            // Output the content of each post as desired
            ?>
            <div class="product-block">
                <div class="product-block-image">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="products-cart-block">
                    <div class="cart-info">
                        <a href="#"><h6><?php the_title(); ?></h6></a>
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
                    </div>
                    <div class="cart-thumbnail">
                        <a href="#"><img src="<?php echo get_template_directory_uri() .
                            "/images/cart.png"; ?>" alt=""></a>
                    </div>
                </div>
            </div>
            <?php
        }
        wp_reset_postdata();
    } else {
        echo "No results found";
    }
    die(); // Important: Always terminate the AJAX request with die()
}

add_action("wp_ajax_show_all_products", "show_all_products");
add_action("wp_ajax_nopriv_show_all_products", "show_all_products");

function show_all_products()
{
    $selection = $_POST["selection"];
    // Build your custom query based on the selected filters
    $args = [
        "post_type" => "product",
        "posts_per_page" => 9,
    ];
    $query = new WP_Query($args);

    // Process and display the filtered results
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            // Output the content of each post as desired
            ?>
            <div class="product-block">
                <div class="product-block-image">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="products-cart-block">
                    <div class="cart-info">
                        <a href="#"><h6><?php the_title(); ?></h6></a>
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
                    </div>
                    <div class="cart-thumbnail">
                        <a href="#"><img src="<?php echo get_template_directory_uri() .
                            "/images/cart.png"; ?>" alt=""></a>
                    </div>
                </div>
            </div>
            <?php
        }
        wp_reset_postdata();
    } else {
        echo "No results found";
    }
    die(); // Important: Always terminate the AJAX request with die()
}

add_action("wp_ajax_delete_products_from_cart", "delete_products_from_cart");
add_action(
    "wp_ajax_nopriv_delete_products_from_cart",
    "delete_products_from_cart"
);

function delete_products_from_cart()
{
    if (isset($_COOKIE["cart_order"]) && isset($_POST["selectedIndex"])) {
        // echo "Index is " . $_POST['selectedIndex'];
        //$_COOKIE['order_menu_cart'] = '[92,88,90]';
        //$_COOKIE['cart_order'] = '[92,88,90]';

        $Cookie_Cart = $_COOKIE["cart_order"];
        $Cookie_Cart_arr = json_decode($Cookie_Cart);

        // echo "<pre>"; print_r($_COOKIE); echo "</pre>";
        //echo "<pre>"; print_r( $Cookie_Cart_arr ); echo "</pre>";

        // Retrieve the cookie value
        $cookieName = "cart_order";
        $cookieValue = $_COOKIE[$cookieName];

        $specificValueToRemove = $_POST["itemToDelete"];
        // Retrieve the cookie value
        $cookieName = "cart_order";
        $cookieValue = $_COOKIE[$cookieName];

        // Split the cookie value into an array
        $cookieValues = explode(",", $cookieValue);
        $cookieValuesChanged = preg_replace("/(\[)|(\])/i", "", $cookieValue);
        $cookieValuesChangedArr = explode(",", $cookieValuesChanged);

        // Find the index of the specific value to remove
        // echo "<pre>"; print_r($cookieValues); echo "</pre>";
        // echo "<pre>"; print_r($cookieValuesChanged); echo "</pre>";
        // echo "<pre>"; print_r($cookieValuesChangedArr); echo "</pre>";
        if (in_array($specificValueToRemove, $cookieValuesChangedArr)) {
            echo "Cart updated";
            $index = array_search(
                $specificValueToRemove,
                $cookieValuesChangedArr
            );
            // echo "<pre>"; print_r($index); echo "</pre>";
            unset($cookieValuesChangedArr[$_POST["selectedIndex"]]);
            // echo "<pre>"; print_r($cookieValuesChangedArr); echo "</pre>";
            $NewCookieValue = "[" . implode(",", $cookieValuesChangedArr) . "]";
            // echo "<pre>"; print_r($NewCookieValue); echo "</pre>";
            setcookie("cart_order", $NewCookieValue, time() + 3600, "/");
            // echo "<pre>"; print_r( $_COOKIE ); echo "</pre>";
        }
    }
}

// Add this code to your theme's functions.php file or create a custom plugin

// Function to create user registration form
function custom_registration_form()
{
    ?>

    <form id="registration-form" method="post">
        <input type="text" class="name" name="username" placeholder="first name">
        <input type="text" class="name" name="l_name" placeholder="last name">
        <input type="text" class="" name="email" placeholder="email">
        <input type=" text" class="" name="phone" placeholder="phone">
        <input type="text" class="" name="company" placeholder="company name">
        <input type="text" class="" name="address" placeholder="Address">
        <input type="password" class="" name="password" placeholder="Password">
        <input type="password" class="" name="confirm_pass" placeholder="Confirm Password">
        <div class="welcome-form-btn">
            <input type="submit" name="submit" value="sign up">
                <span>or</span>
            <input onclick="goToSignin()" value="login">
        </div>
    </form>


    <?php
}
// Hook into the registration form display
add_shortcode("registration_form", "custom_registration_form");

// Function to handle form submission and user registration
function custom_registration()
{
    if (isset($_POST["submit"])) {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $userdata = [
            "user_login" => $username,
            "user_email" => $email,
            "user_pass" => $password,
        ];

        $user_id = wp_insert_user($userdata);

        if (!is_wp_error($user_id)) {
            echo "Registration successful.";
        } else {
            echo "Registration failed.";
        }
    }
}
// Hook into the user registration process
add_action("init", "custom_registration");

// Add this code to your theme's functions.php file or create a custom plugin

// Function to create user login form
function custom_login_form()
{
    ?>

    <form id="login-form" method="post">
        <input type="text" name="username" class="" placeholder="email">
        <input type="password" name="password" class="" placeholder="Password">
        <div class="forget-pass">
            <a href="#">Forgot Password?</a>
        </div>
        <div class="welcome-form-btn">
        <input type="submit" name="login_submit" value="Log In">
            <span>or</span>
            <input onclick="goToSignup()" value="sign up">
        </div>
    </form>

    <?php
}

// Hook into the login form display
add_shortcode("login_form", "custom_login_form");

// Function to handle form submission and user login
function custom_login()
{
    if (isset($_POST["login_submit"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $credentials = [
            "user_login" => $username,
            "user_password" => $password,
        ];

        $user = wp_signon($credentials);

        if (!is_wp_error($user)) {
            echo "Login successful.";
            header(
                "Location: " . esc_url(get_permalink(get_page_by_title("WAG")))
            );
            exit(); // Make sure to exit after the redirect
        } else {
            echo "Login failed.";
        }
    }
}

// Hook into the user login process
add_action("init", "custom_login");

function store_cookie_value($user_login, $user)
{
    if (isset($_COOKIE["user_id"])) {
        $user_id = sanitize_text_field($_COOKIE["user_id"]);
        update_user_meta($user->ID, "cookie_value", $user_id);
    }
}
add_action("wp_login", "store_cookie_value", 10, 2);

?>
