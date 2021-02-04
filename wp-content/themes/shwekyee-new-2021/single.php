<?php get_header(); ?>
<?php get_template_part('partials/inner-banner'); ?>
    <main>
        <div class="bg-gray-pink pd60">
            <?php if ( have_posts() ) { ?>
                <?php while ( have_posts() ) { the_post(); 
                    $id = $post->ID;
                    $blog_title = $post->post_title;
                    $blog_image = get_the_post_thumbnail_url($id);   
                    $blog_content = $post->post_content; 
                    $day = get_the_date('d', $id);
                    $month = get_the_date('M', $id);
                ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="blog-detail">
                                    <div class="social-share d-flex justify-content-start mb-3">
                                        <!-- <div class="fb-share-button" data-href="https://www.facebook.com/shwekyeemyanmar/" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fshwekyeemyanmar%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">မျှဝေမယ်</a></div> -->
                                    </div>
                                    <div class="img-date">
                                        <img src="<?php echo $blog_image; ?>" alt="<?php echo $blog_title; ?>" class="w-100" data-aos="zoom-out" data-aos-easing="ease" data-aos-delay="200" data-aos-offset="0"> 
                                        <div class="b-date" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="400" data-aos-offset="0">
                                            <span class="day"><?php echo $day; ?>
                                                <span class="month"><?php echo $month; ?></span>
                                            </span>
                                        </div>
                                    </div> 
                                <div class="blog-content" data-aos="fade-in" data-aos-easing="ease" data-aos-delay="800" data-aos-offset="0">
                                    <?php echo apply_filters('the_content', $blog_content); ?>
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