<?php 
// Template Name: About Us
get_header(); 

$ab = get_fields();
$ab_img = $ab['about_image'];
$history = $ab['history_group'];
$h_title = $history['title'];
$h_content = $history['content'];
$mission = $ab['mission_group'];
$m_title = $mission['title'];
$m_content = $mission['content'];
$vision = $ab['vision_group'];
$v_title = $vision['title'];
$v_content = $vision['content'];
$certificate = $ab['certificate_group'];
$c_title = $certificate['title'];
$c_content = $certificate['content'];

?>
<?php get_template_part('partials/inner-banner'); ?>

<main class="main-page">
    <section class="ab-history bg-gray-pink pd60">
        <div class="container">
            <div class="history">
                <?php if ($history) { ?>
                    <div class="row">
                        <div class="col-12">
                            <h1 class="primary-heading"><?php echo $h_title; ?></h1>
                        </div>
                        <div class="col-md-6">
                            <img src="<?php echo $ab_img; ?>" alt="Shwekyee About Image" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <?php echo apply_filters('the_content', $h_content); ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <section class="ab-goal pd60">
        <div class="container">
            <?php if ($mission) { ?>
                <div class="ab-box">
                    <h3><?php echo $m_title; ?></h3>
                    <?php echo apply_filters('the_content', $m_content); ?>
                </div>
            <?php } ?>
            <?php if ($vision) { ?>
                <div class="ab-box">
                    <h3><?php echo $v_title; ?></h3>
                    <?php echo apply_filters('the_content', $v_content); ?>
                </div>
            <?php } ?>
            <?php if ($certificate) { ?>
                <div class="ab-box">
                    <h3><?php echo $c_title; ?></h3>
                    <?php echo apply_filters('the_content', $c_content); ?>
                </div>
            <?php } ?>
        </div>
    </section>
    <section class="testimonial bg-gray-pink pd60">
        <div class="container">
            <h2 class="primary-heading">What Our Clients Say</h2>
            <?php 
                $args = array(
                    'post_type'   => 'testimonials',
                    'posts_per_page' => -1,
                    'orderby' => 'DESC'
                );
                
                $clients = get_posts( $args );
            ?>
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
</main>
<?php get_footer(); ?>