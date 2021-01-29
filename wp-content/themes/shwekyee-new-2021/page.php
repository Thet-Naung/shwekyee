<?php get_header(); ?>
<?php get_template_part('partials/inner-banner'); ?>
<?php if ( is_page(SK_CAREER_PAGE) ) { ?>
    <main class="career-pg">
        <div class="bg-gray-pink pd60">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
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
<?php }else { ?>
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