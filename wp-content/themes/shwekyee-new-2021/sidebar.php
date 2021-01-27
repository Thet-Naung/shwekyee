<div class="sidebar">
    <div  class="latest-post">
        <h3>Latest Post</h3>
        <?php 
            $args = array(
                'post_type'   => 'post',
                'posts_per_page' => -1,
                'orderby' => 'DESC'
            );
            
            $blogs = get_posts( $args );
        ?>
        <?php if ($blogs) { ?>
            <ul>
                <?php foreach ($blogs as $blog) { 
                    $id = $blog->ID;
                    $b_image = get_the_post_thumbnail_url($id);
                    $b_title = $blog->post_title;   
                    $b_date = get_the_date('M d, Y', $id);
                ?>
                    <li>
                        <div class="media">
                            <img src="<?php echo $b_image; ?>" alt="<?php echo $b_title; ?>">
                            <div class="media-body">
                                <span><?php echo $b_date; ?></span>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>
</div>