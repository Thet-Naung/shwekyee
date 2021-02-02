<?php get_header(); ?>
<?php get_template_part('partials/inner-banner'); ?>
<main id="product-page" class="bg-gray-pink pd60">
  <div class="container">
    <div class="product-list">
      <?php if ( have_posts() ) { ?>
          <div class="row">
            <?php while ( have_posts() ) { the_post(); 
              $id = $posts->ID; 
              $p_image = get_the_post_thumbnail_url($id);    
              $p_title = $post->post_title;
              $p_link = get_permalink($id);
            ?>
              <div class="col-md-3 col-sm-6 mb-4">
                <a href="<?php echo $p_link; ?>" title="<?php echo $p_title; ?>">
                    <div class="card h-100">
                        <img src="<?php echo $p_image; ?>" alt="<?php echo $p_title; ?>" class="w-100">
                        <div class="card-body">
                            <h4 class="slide-title text-center"><?php echo $p_title; ?></h4>
                        </div>
                    </div>
                </a>
              </div>
            <?php } ?>
          </div>
      <?php } ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>