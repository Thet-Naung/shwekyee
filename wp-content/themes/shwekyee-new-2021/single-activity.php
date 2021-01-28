<?php get_header(); ?>
<?php get_template_part('partials/inner-banner'); ?>
    <main>
        <div class="bg-gray-pink pd60">
            <?php if ( have_posts() ) { ?>
                <?php while ( have_posts() ) { the_post(); 
                    $id = $post->ID;
                    $activity_title = $post->post_title;
                    $activity_image = get_the_post_thumbnail_url($id);   
                    $activity_content = $post->post_content; 
                    $day = get_the_date('d', $id);
                    $month = get_the_date('M', $id);
                    $a_csr = get_field('csr', $id);
                ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="blog-detail">
                                    <div class="social-share d-flex justify-content-start mb-3">
                                        <!-- <div class="fb-share-button" data-href="https://www.facebook.com/shwekyeemyanmar/" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fshwekyeemyanmar%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">မျှဝေမယ်</a></div> -->
                                    </div>
                                    <div class="img-date">
                                        <img src="<?php echo $activity_image; ?>" alt="<?php echo $activity_title; ?>" class="w-100"> 
                                        <div class="b-date">
                                            <span class="day"><?php echo $day; ?>
                                                <span class="month"><?php echo $month; ?></span>
                                            </span>
                                        </div>
                                    </div>
                                <div class="csr-content">
                                    <?php echo apply_filters('the_content', $activity_content); ?>
                                    <?php if ( $a_csr ) { ?>
                                        <?php foreach ( $a_csr as $csr ) { 
                                            $c_content = $csr['content'];
                                            $galleries = $csr['gallery'];    
                                        ?>
                                            <div class="csr-box mb-4">
                                                <div class="csr">
                                                    <?php echo $c_content; ?>
                                                    <?php if ( $galleries ) { ?>
                                                        <div class="row">
                                                            <?php foreach ( $galleries as $gallery ) { ?>
                                                                <div class="col-md-4">
                                                                    <div class="csr-image-box">
                                                                        <a href="<?php echo $gallery; ?>" data-fancybox="gallery">
                                                                            <img src="<?php echo $gallery; ?>" alt="<?php echo $activity_title; ?>" class="img-fluid">
                                                                            <div class="img-overlay"><i class="fas fa-plus"></i></div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <?php get_sidebar(); ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </main>
<?php get_footer(); ?>