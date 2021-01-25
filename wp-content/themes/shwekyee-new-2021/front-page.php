<?php get_header(); ?>
<?php 
    $h = get_fields();
    $service_gp = $h['service_group'];
    $best_seller_gp = $h['best_seller_group'];
    $seller_title = $best_seller_gp['title'];
    $best_seller = $best_seller_gp['best_seller'];
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
            <div class="swiper-container best-seller">
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
                                <div class="card">
                                    <img src="<?php echo $s_image; ?>" alt="<?php echo $s_title; ?>">
                                    <div class="card-body">
                                        <h4><?php echo $s_title; ?></h4>
                                        <div class="star-rating">
                                            <span style="width: <?php echo $star; ?>"></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next seller-next"></div>
                <div class="swiper-button-prev seller-prev"></div>
            </div>
        <?php } ?>
    </div>
</section>

<?php get_footer(); ?>