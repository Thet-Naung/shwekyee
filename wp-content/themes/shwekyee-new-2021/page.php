<?php get_header(); ?>
<?php get_template_part('partials/inner-banner'); ?>
    <main class="default-pg">
        <div class="bg-gray-pink pd60">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <!-- <?php //if ($post->post_title) { ?>
                            <h2 class="post-main-title my-5"><?php //echo $post->post_title; ?></h2>
                        <?php //} ?> -->
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
<?php get_footer(); ?>