<?php get_header(); ?>
<?php get_template_part('partials/inner-banner'); ?>
<main id="product-page" class="bg-gray-pink pd60">
<div class="product-list">
  <div class="container">
  <?php
    $product_category = get_queried_object();
      $terms = get_terms('product-type', array('orderby' => 'date', 'order' => 'ASC'));
        foreach( $terms as $term ) {
          $args = array(
              'post_type' => 'product',
              'tax_query' => array(
                  'relation' => 'AND',
                  array(
                      'taxonomy' => 'product-type',
                      'field'    => 'slug',
                      'terms'    => array( $term->slug ),
                  ),
                  array(
                      'taxonomy' => 'product-category',
                      'field'    => 'slug',
                      'terms'    =>  array( $product_category->slug ),
                      'operator' => 'IN',
                  ),
              ),
          );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) {
              echo '<div class="mb-5">';
              echo '<h3 class="primary-heading">'.$term->name.'</h3>'; 
              echo '<div class="row">';
              while ($the_query->have_posts()) { $the_query->the_post(); 
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
            <?php
              }
            echo '</div>';
            echo '</div>';
      } 
    } 

  ?>
  </div>
</div>
</main>
<?php get_footer(); ?>