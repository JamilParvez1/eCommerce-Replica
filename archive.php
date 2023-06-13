<?php
/* Template Name: Archive Products */
?>

<?php
    get_header('custom');
?>


<div class="container">

<br /><br /><br /><br /><br /><br /><br />


<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$data= new WP_Query(array(
    'post_type'=>'product', // your post type name
    'posts_per_page' => 3, // post per page
    'paged' => $paged,
));

if($data->have_posts()) :
    while($data->have_posts())  : $data->the_post();
            the_title();
            echo "<br>";
    endwhile;

    $total_pages = $data->max_num_pages;

    if ($total_pages > 1){

        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text'    => __('« prev'),
            'next_text'    => __('next »'),
        ));
    }
    ?>    
<?php else :?>
<h3><?php _e('404 Error&#58; Not Found', ''); ?></h3>
<?php endif; ?>
<?php wp_reset_postdata();?>




<div id="filtered-results">
  <!-- Your initial content or results will be displayed here -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>
  jQuery(function($) {
    $('#filter-form').on('change', function(e) {
      e.preventDefault();
      var category = $('#category-filter').val();
      $.ajax({
        url: "http://localhost/wag/wp-admin/admin-ajax.php",
        type: 'POST',
        data: {
          action: 'filter_results',
          category: category
        },
        success: function(response) {
          $('#filtered-results').html(response);
        }
      });
    });
  });
</script>

</div>

<?php
    get_footer();
?>