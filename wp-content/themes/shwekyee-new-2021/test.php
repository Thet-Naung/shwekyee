<?php get_header(); ?>
<?php get_template_part('partials/inner-banner'); ?>
<?php

$terms = get_terms('product-type', array('orderby' => 'date', 'order' => 'ASC'));
foreach( $terms as $term ) {
$args = array(
    'post_type' => 'product',
    'tax_query' => array(
        'relation' => 'AND',
        array(
            'taxonomy' => 'product-type',
            'field'    => 'slug',
            'terms'    => array( $term->slug ),
        ),
        array(
            'taxonomy' => 'product-category',
            'field'    => 'term_id',
            'terms'    =>  array( 13, 9, 8, 14, 10, 11, 7, 12 ),
            'operator' => 'IN',
        ),
    ),
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
    echo '<h3>'.$term->name.'</h3>';
    while ($the_query->have_posts()) { $the_query->the_post(); 
        
        var_dump($post);
    }
} 
} 

?>

<?php get_footer(); ?>