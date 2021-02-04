<?php get_header(); ?>
<?php get_template_part('partials/inner-banner'); ?>
<?php if ( is_page(SK_CAREER_PAGE) ) { ?>
    <main class="career-pg">
        <div class="bg-gray-pink pd60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                            <h2 class="primary-heading">Career Form</h2>
                        <?php if ($post->post_content) { ?>
                            <article class="main-article">
                                <?php echo apply_filters('the_content', $post->post_content); ?>
                            </article>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php }
elseif ( is_page(SK_ORDER_PAGE) ) { ?>
<?php
    $orders = get_field('order');
?>
    <main class="order-pg">
        <div class="bg-gray-pink pd60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <?php if ($post->post_content) { ?>
                            <article class="main-article" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="200" data-aos-offset="0">
                                <?php echo apply_filters('the_content', $post->post_content); ?>
                            </article>
                        <?php } ?>
                        <?php if ( $orders ) { ?>
                            <?php 
                                $o = 4;
                                foreach ( $orders as $order ) { ?>
                                <div class="order-box" data-aos="fade-out">
                                    <?php echo apply_filters( 'the_content', $order['content'] ); ?>
                                    <img src="<?php echo $order['image']; ?>" alt="Order Image">
                                </div>
                            <?php $o++; } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </main> 
<?php }
else { ?>
    <main class="default-pg">
        <div class="bg-gray-pink pd60">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <?php if ($post->post_title) { ?>
                            <h2 class="post-main-title my-5"><?php echo $post->post_title; ?></h2>
                        <?php } ?>
                        <?php if ($post->post_content) { ?>
                            <article class="main-article">
                                <?php echo apply_filters('the_content', $post->post_content); ?>
                            </article>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php } ?>
<?php get_footer(); ?>