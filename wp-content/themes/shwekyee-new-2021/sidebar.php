<div class="sidebar">
    <div  class="latest-post">
        <h3>Latest Blog</h3>
        <?php 
            $args = array(
                'post_type'   => 'post',
                'posts_per_page' => 3,
                'orderby' => 'DESC'
            );
            
            $blogs = get_posts( $args );
        ?>
        <?php if ($blogs) { ?>
            <ul>
                <?php foreach ($blogs as $blog) { 
                    $id = $blog->ID;
                    $thumb = get_post_thumbnail_id($id);
                    $b_images = wp_get_attachment_image_url($thumb);
                    $b_image = aq_resize($b_images, 98, 98, true, true, true);
                    $b_title = $blog->post_title;   
                    $b_date = get_the_date('M d, Y', $id);
                    $b_link = get_permalink($id);
                ?>
                    <li>
                        <div class="media d-flex align-items-center">
                            <div class="s-image-box">
                                <img src="<?php echo $b_image; ?>" alt="<?php echo $b_title; ?>">
                                <div class="s-image-overlay"></div>
                            </div>
                            <div class="media-body">
                                <span><?php echo $b_date; ?></span>
                                <p><a href="<?php echo $b_link; ?>" title="<?php echo $b_title; ?>"><?php echo $b_title; ?></a></p>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>

    <div  class="latest-post mt-5">
        <h3>Latest Activity</h3>
        <?php 
            $args = array(
                'post_type'   => 'activity',
                'posts_per_page' => 3,
                'orderby' => 'DESC'
            );
            
            $activities = get_posts( $args );
        ?>
        <?php if ($activities) { ?>
            <ul>
                <?php foreach ($activities as $activity) { 
                    $id = $activity->ID;
                    $thumb = get_post_thumbnail_id($id);
                    $a_images = wp_get_attachment_image_url($thumb);
                    $a_image = aq_resize($a_images, 98, 98, true, true, true);
                    $a_title = $activity->post_title;   
                    $a_date = get_the_date('M d, Y', $id);
                    $a_link = get_permalink($id);
                ?>
                    <li>
                        <div class="media d-flex align-items-center">
                            <div class="s-image-box">
                                <img src="<?php echo $a_image; ?>" alt="<?php echo $a_title; ?>">
                                <div class="s-image-overlay"></div>
                            </div>
                            <div class="media-body">
                                <span><?php echo $a_date; ?></span>
                                <p><a href="<?php echo $a_link; ?>" title="<?php echo $a_title; ?>"><?php echo $a_title; ?></a></p>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>
</div>