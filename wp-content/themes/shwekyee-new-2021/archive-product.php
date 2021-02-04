<?php get_header(); ?>
<?php get_template_part('partials/inner-banner'); ?>
<main id="product-page" class="bg-gray-pink pd60">
    <div class="container">
        <div class="product-list">
            <?php
                $p_terms = get_terms('product-type', array('orderby' => 'date', 'order' => 'ASC'));
                if ( $p_terms ) {
                foreach ($p_terms as $p_term) {
                $product_post_IDs = get_posts(array(
                'post_type' => 'product',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                    'taxonomy' => 'product-type',
                    'orderby' => 'ASC',
                    'field' => 'slug',
                    'terms' => $p_term->slug
                    )
                ),
                'fields' => 'ids'
                ));
            
                $product_category = wp_get_object_terms($product_post_IDs, 'product-category');
                    echo '<div class="mb-4">';
                    echo '<h2 class="primary-heading" data-aos="zoom-out-up" data-aos-easing="ease" data-aos-delay="400" data-aos-offset="0">'.$p_term->name.'</h2>';   
                    echo '<div class="row d-flex justify-content-center">'; 
                    $p = 1;
                    foreach ( $product_category as $pc ) {
                        $pc_id = $pc->term_id;
                        $pc_name = $pc->name;
                        $pc_images = get_field('image', $pc->taxonomy . '_' . $pc_id);
                        $pc_image = aq_resize($pc_images, 267, 253, true,true,true);
                ?>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12 mb-4">
                        <a href="<?php echo get_term_link($pc->term_id); ?>">
                            <div class="card h-100" data-aos="zoom-out-down" data-aos-easing="ease" data-aos-delay="<?php echo $p*2 ?>00" data-aos-offset="0" >
                                <img src="<?php echo $pc_image; ?>" alt="<?php echo $pc_name; ?>" class="w-100">
                                <div class="card-body">
                                    <h4 class="slide-title text-center"><?php echo $pc_name; ?></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php $p++; } 
                    echo '</div>';
                    echo '</div>'; 
                    ?> 
            <?php }    
            } 
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>