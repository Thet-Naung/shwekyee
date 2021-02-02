<?php get_header(); ?>
<?php get_template_part('partials/inner-banner'); ?>
<?php if ( have_posts() ) { ?>
<?php while ( have_posts() ) { the_post(); 
    $id = $post->ID;
    $p_title = $post->post_title;
    $p_content = $post->post_content;
    $p_field = get_fields($id);
    $p_price = $p_field['price'];
    $p_gallery = $p_field['gallery'];
    $p_facts = $p_field['facts'];    
?>
<main class="single-page">
    <div class="product-detail pd60">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php if ( $p_gallery ) { ?>
                        <!-- Swiper -->
                        <div class="swiper-container gallery-top">
                            <div class="swiper-wrapper">
                                <?php foreach ( $p_gallery as $gallery ) { 
                                    $crop_img = aq_resize($gallery, 800, 600, true, true, true);    
                                ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo $crop_img; ?>" alt="<?php echo $p_title; ?>" class="w-100">
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next swiper-button-white gallery-next"></div>
                            <div class="swiper-button-prev swiper-button-white gallery-prev"></div>
                        </div>
                        <div class="swiper-container gallery-thumbs">
                            <div class="swiper-wrapper">
                                <?php foreach ( $p_gallery as $gallery ) { 
                                    $crop_thumb = aq_resize($gallery, 150, 100, true, true, true)    
                                ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo $crop_thumb; ?>" alt="<?php echo $p_title; ?>" class="w-100">
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="p-detail-content">
                        <?php echo apply_filters('the_content', $p_content); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-fact">
                        <section class="facts">
                            <h2>Price: <?php echo $p_price; ?></h2>
                        </section>
                        
                        <?php if ( $p_facts ) { 
                            foreach ( $p_facts as $p_fact ) {
                        ?>
                            <section class="facts">
                                <h2><?php echo $p_fact['title']; ?></h2>
                                <?php echo apply_filters('the_content', $p_fact['content']); ?>
                            </section>
                        <?php } } ?>
                    </div>
                </div>
            </div>
            <div class="related-product">
                <div class="d-flex justify-content">
                    <h2>Related Product</h2>
                    <!-- Add Arrows -->
                    <div class="p-slide-button">
                        <div class="swiper-button-next p-next"></div>
                        <div class="swiper-button-prev p-prev"></div>
                    </div>
                </div>
                
                <?php 
                    $args = array(
                        'post_type'   => 'product',
                        'posts_per_page' => -1,
                        'orderby' => 'DESC',
                        'tax_query' => array(
                            array(
                                    'taxonomy' => 'product-type',
                                    'field'    => 'name',
                                    'terms'    => 'product'
                            )
                        ),
                    );
                    
                    $products = get_posts( $args );
                    if ( $products ) {
                ?>
                    <div class="product-slide-box">
                        <!-- Swiper -->
                        <div class="swiper-container product-single-slide">
                            <div class="swiper-wrapper">
                                <?php foreach ( $products as $product ) { 
                                    $id = $product->ID;
                                    $p_title = $product->post_title;
                                    $p_image = get_the_post_thumbnail_url($id);
                                    $p_link = get_permalink($id);
                                ?>
                                    <div class="swiper-slide">
                                        <div class="card h100">
                                            <a href="<?php echo $p_link; ?>" title="<?php echo $p_title; ?>">
                                                <div class="card h-100">
                                                    <img src="<?php echo $p_image; ?>" alt="<?php echo $p_title; ?>">
                                                    <div class="card-body">
                                                        <h4 class="slide-title"><?php echo $p_title; ?></h4>
                                                    </div>
                                                </div>
                                            </a>
                                        </div> 
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</main>
<?php } ?>
<?php } ?>
<?php get_footer(); ?>