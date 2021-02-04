<?php get_header(); ?>
<?php get_template_part('partials/inner-banner'); ?>
<?php if ( have_posts() ) { ?>
<main>
    <div class="list-blog latest-blog pd60">
        <div class="container">
            <div class="row">
                <?php 
                $a = 1;
                while ( have_posts() ) { the_post(); 
                    $id = $post->ID; 
                    $a_image = get_the_post_thumbnail_url($id);    
                    $a_title = $post->post_title;
                    $a_link = get_permalink($id);
                    $day = get_the_date('d', $id);
                    $month = get_the_date('M', $id);
                ?>
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <a href="<?php echo $a_link; ?>" title="<?php echo $a_title; ?>">
                            <div class="card h-100" data-aos="zoom-out-down" data-aos-easing="ease" data-aos-delay="<?php echo $a*2 ?>00" data-aos-offset="0">
                                <div class="img-date">
                                    <img src="<?php echo $a_image; ?>" alt="<?php echo $a_title; ?>" class="w-100">
                                    <div class="b-date">
                                        <span class="day"><?php echo $day; ?>
                                            <span class="month"><?php echo $month; ?></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="<?php echo $a_link; ?>" title="<?php echo $a_title; ?>"><h4 class="blog-title"><?php echo $a_title; ?></h4></a>
                                    <a href="<?php echo $a_link; ?>" title="<?php echo $a_title; ?>" class="text-green">Learn More</a>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php $a++; } ?>
            </div>
        </div>
    </div>
</main>
<?php } ?>
<?php get_footer(); ?>