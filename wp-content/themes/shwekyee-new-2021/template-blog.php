<?php 
// Template Name: Blog
get_header(); 

?>
<?php get_template_part('partials/inner-banner'); ?>

<main class="main-page">
    <section class="list-blog latest-blog pd60">
        <div class="container">
            <?php 
                $args = array(
                    'post_type'   => 'post',
                    'posts_per_page' => -1,
                    'orderby' => 'DESC'
                );
                
                $blogs = get_posts( $args );
            ?>
            <?php if ($blogs) { ?>
                <div class="row">
                    <?php 
                    $b = 1;
                    foreach ($blogs as $blog) {
                        $id = $blog->ID; 
                        $b_image = get_the_post_thumbnail_url($id);    
                        $b_title = $blog->post_title;
                        $b_link = get_permalink($id);
                        $day = get_the_date('d', $id);
                        $month = get_the_date('M', $id);
                    ?>
                        <div class="col-lg-4 col-md-6 col-12 mb-4">
                            <a href="<?php echo $b_link; ?>" title="<?php echo $b_title; ?>">
                                <div class="card h-100" data-aos="zoom-out-down" data-aos-easing="ease" data-aos-delay="<?php echo $b*2 ?>00" data-aos-offset="0">
                                    <div class="img-date">
                                        <img src="<?php echo $b_image; ?>" alt="<?php echo $b_title; ?>" class="w-100">
                                        <div class="b-date">
                                            <span class="day"><?php echo $day; ?>
                                                <span class="month"><?php echo $month; ?></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <a href="<?php echo $b_link; ?>" title="<?php echo $b_title; ?>"><h4 class="blog-title"><?php echo $b_title; ?></h4></a>
                                        <a href="<?php echo $b_link; ?>" title="<?php echo $b_title; ?>" class="text-green">Learn More</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php $b++; } ?>
                </div>
            <?php } ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>