
<?php 
$general = get_field('general_setting', 'option'); 
$obj = get_queried_object();
$page_banner = get_field('banner', $obj->ID);
?>
<div class="inner-banner" style="background: url(<?php if($page_banner) { echo $page_banner; } else { echo $general['default_banner']; } ?>) no-repeat; background-size: cover; background-position: center;">
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-box">
            <h1>
                <?php if (is_archive()) {
                    if ($obj->label == true) {
                        echo $obj->label;
                    }else {
                        echo $obj->name;
                    }
                }else {
                    echo $obj->post_title; 
                }
                ?>
            </h1>
            <?php 
                if ( is_page() ) {
                    echo apply_filters( 'the_content', $general['banner_text']); 
                }
                else {
                    
                }
            ?>
        </div>
    </div>
</div>
</div>