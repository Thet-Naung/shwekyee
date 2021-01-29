<?php get_header(); ?>
<?php get_template_part('partials/inner-banner'); ?>

<?php 
    $taxonomies = get_terms( array(
        'taxonomy' => array('product-category','product-type'),
        'hide_empty' => false,
    ) );
    //var_dump($taxonomies);
?>


<?php
 $taxonomies = get_terms( array(
    'taxonomy' => array('product-category','product-type'),
    'hide_empty' => false,
) );
//        var_dump($args); die;
$the_query = new WP_Query( $args ); 
//        $found_posts_all_terms += $the_query->found_posts; 
if ( $the_query->have_posts() ) {
    while ($the_query->have_posts()) { $the_query->the_post(); 
        var_dump($post);
    }
     wp_reset_postdata();
}            

endforeach;endif;
    
?>
<?php get_footer(); ?>