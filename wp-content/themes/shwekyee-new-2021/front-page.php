<?php get_header(); ?>
<?php 
    $h = get_fields();
    $service_gp = $h['service_group'];
    $best_seller_gp = $h['best_seller_group'];
    $seller_title = $best_seller_gp['title'];
    $best_seller = $best_seller_gp['best_seller'];
    $premium_product = $h['premium_product_group'];
    $product_title = $premium_product['title'];
    $products = $premium_product['Product'];
    $latest_blog = $h['blog_group'];
    $blog_title = $latest_blog['title'];
    $blogs = $latest_blog['blog'];
    $client_gp = $h['client_group'];
    $client_title = $client_gp['title'];
    $clients = $client_gp['client'];
    $social_media = get_field('social_media_links', 'option');
    $facebook = $social_media['facebook'];
    $youtube_group = $h['youtube_group'];
    $youtube_title = $youtube_group['title'];
    $youtube_link = $youtube_group['youtube_link'];
?>
<!-- service -->
<section class="hm-service pd80">
    <div class="container">
        <?php if ($service_gp) { ?>
            <div class="row">
                <?php foreach ($service_gp as $service) { 
                    $s_image = $service['image'];
                    $s_title = $service['title'];
                    $s_content = $service['content'];    
                ?>
                    <div class="col-md-4 col-12">
                        <div class="service-box">
                            <img src="<?php echo $s_image; ?>" alt="<?php echo $s_title; ?>">
                            <h3 class="inner-title"><?php echo $s_title; ?></h3>
                            <?php echo apply_filters('the_content', $s_content); ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>
<!-- best seller -->
<section class="best-seller pd60 bg-gray-pink">
    <div class="container">
        <?php if ($seller_title) { echo "<h2 class='primary-heading'>". $seller_title ."</h2>"; } ?>
        <?php if ($best_seller) { ?>
            <div class="seller">
                <div class="swiper-container best-seller-slide">
                    <div class="swiper-wrapper">
                        <?php foreach ($best_seller as $seller) {
                            $id = $seller->ID; 
                            $s_image = get_the_post_thumbnail_url($id);    
                            $s_title = $seller->post_title;
                            $s_link = get_permalink($id);
                            $star = get_field('best_seller', $id);
                        ?>
                            <div class="swiper-slide">
                                <a href="<?php echo $s_link; ?>" title="<?php echo $s_title; ?>">
                                    <div class="card h-100">
                                        <img src="<?php echo $s_image; ?>" alt="<?php echo $s_title; ?>">
                                        <div class="card-body">
                                            <h4 class="slide-title"><?php echo $s_title; ?></h4>
                                            <div class="star-rating">
                                                <span style="width: <?php echo $star; ?>"></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next seller-next"></div>
                <div class="swiper-button-prev seller-prev"></div>
                <div class="btn-space text-center">
                    <a href="#" class="btn btn-1 hover-filled-slide-up"><span>View All</span></a>
                </div>
            </div>  
        <?php } ?>
    </div>
</section>

<!-- premium product -->
<section class="premium-product pd60">
    <div class="container">
        <?php if ($product_title) { echo "<h2 class='secondary-heading'>". $product_title ."</h2>"; } ?>
        <?php if ($products) { ?>
            <div class="product-box">
                <div class="swiper-container product-slide">
                    <div class="swiper-wrapper">
                        <?php foreach ($products as $product) {
                            $id = $product->ID; 
                            $p_image = get_the_post_thumbnail_url($id);    
                            $p_title = $product->post_title;
                            $p_link = get_permalink($id);
                        ?>
                            <div class="swiper-slide">
                                <a href="<?php echo $p_link; ?>" title="<?php echo $p_title; ?>">
                                    <div class="card">
                                        <img src="<?php echo $p_image; ?>" alt="<?php echo $p_title; ?>" class="w-100">
                                        <div class="card-body">
                                            <h4 class="pp-title"><?php echo $p_title; ?></h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next product-next"></div>
                <div class="swiper-button-prev product-prev"></div>
                <div class="btn-space text-center">
                    <a href="#" class="btn btn-1 hover-filled-slide-up"><span>View All</span></a>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<!-- blog -->
<section class="latest-blog pd60">
    <div class="container">
        <?php if ($blog_title) { echo "<h2 class='primary-heading'>". $blog_title ."</h2>"; } ?>
        <?php if ($blogs) { ?>
            <div class="blog-box">
                <div class="swiper-container blog-slide">
                    <div class="swiper-wrapper">
                        <?php foreach ($blogs as $blog) {
                            $id = $blog->ID; 
                            $b_image = get_the_post_thumbnail_url($id);    
                            $b_title = $blog->post_title;
                            $b_link = get_permalink($id);
                            $day = get_the_date('d');
                            $month = get_the_date('M');
                        ?>
                            <div class="swiper-slide">
                                <a href="<?php echo $b_link; ?>" title="<?php echo $b_title; ?>">
                                    <div class="card">
                                        <div class="img-date">
                                            <img src="<?php echo $b_image; ?>" alt="<?php echo $b_title; ?>" class="w-100">
                                            <div class="b-date">
                                                <div class="day"><?php echo $day; ?></div>
                                                <div class="month"><?php echo $month; ?></div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <a href="<?php echo $b_link; ?>" title="<?php echo $b_title; ?>"><h4 class="blog-title"><?php echo $b_title; ?></h4></a>
                                            <a href="<?php echo $b_link; ?>" title="<?php echo $b_title; ?>" class="text-green">Learn More</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next blog-next"></div>
                <div class="swiper-button-prev blog-prev"></div>
                <div class="btn-space text-center">
                    <a href="#" class="btn btn-1 hover-filled-slide-up"><span>View All</span></a>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<!-- Testimonial -->
<section class="testimonial bg-gray-pink pd60">
    <div class="container">
        <?php if ($client_title) { echo "<h2 class='primary-heading'>". $client_title ."</h2>"; } ?>
        <?php if ($clients) { ?>
            <div class="client-box">
                <div class="swiper-container client-slide">
                    <div class="swiper-wrapper">
                        <?php foreach ($clients as $client) {
                            $id = $client->ID; 
                            $thumb = get_post_thumbnail_id($id);
                            $c_images = wp_get_attachment_image_url($thumb);
                            $c_image = aq_resize($c_images, 70, 70, true, true);
                            $c_title = $client->post_title;
                            $c_content = $client->post_content;
                            $c_text = get_field('client', $id);
                        ?>
                            <div class="swiper-slide h-100">
                                <a href="<?php echo $c_link; ?>" title="<?php echo $c_title; ?>">
                                    <div class="card">
                                        <img src="<?php echo $c_image; ?>" alt="<?php echo $c_title; ?>">
                                        <div class="client-content">
                                            <?php echo $c_content; ?>
                                        </div>
                                        <h5><?php echo $c_title; ?></h5>
                                        <p><?php echo $c_text; ?></p>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next client-next"></div>
                <div class="swiper-button-prev client-prev"></div>
            </div>
        <?php } ?>
    </div>
</section>

<!-- youtube -->
<section class="youtube-section pd60"> 
    <?php if ($youtube_title) { echo "<h2 class='y-title mb-5'>". $youtube_title ."</h2>"; } ?>
    <img src="/wp-content/uploads/2021/01/youtube-icon.png" alt="youtube icon">
    <div class="mt-4">
        <a href="<?php echo $youtube_link; ?>" title="Youtube Link" target="_blank">Our Process (Opens Youtube)</a>
    </div>
</section>

<!-- facebook -->
<section class="follow-facebook">
    <a href="<?php echo $facebook; ?>" class="btn btn-fb" target="_blank">Follow Us @ facebook</a>
</section>

<?php get_footer(); ?>