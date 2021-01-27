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
                                    <div class="img-date">
                                        <img src="<?php echo $blog_image; ?>" alt="<?php echo $blog_title; ?>" class="w-100"> 
                                        <div class="b-date">
                                            <span class="day"><?php echo $day; ?>
                                                <span class="month"><?php echo $month; ?></span>
                                            </span>
                                        </div>
                                    </div>
                                <div class="blog-content">
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