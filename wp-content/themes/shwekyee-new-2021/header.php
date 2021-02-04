<?php global $THEME_OPTIONS; ?>
<!doctype html>
<!--[if lt IE 7 ]>	<html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>		<html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>		<html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>		<html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="en"  class="no-js">
<!--<![endif]-->
<head>
<meta charset="UTF-8">
<title><?php wp_title(''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
<?php if ( file_exists(TEMPLATEPATH .'/favicon.png') ) : ?>
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.png">
<?php endif; ?>
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/my_MM/sdk.js#xfbml=1&version=v9.0" nonce="igy0HVWn"></script>
<?php $body_classes = join( ' ', get_body_class() ); ?>
<body class="<?php if( !is_search() )echo $body_classes; ?>">
<?php 
$site_info = get_field('general_setting','option');
if ($site_info['logo']) {
    $logo = $site_info['logo'];
} else {
    $logo = ASSET_URL.'images/logo.png';
}
?>
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-4"> 
                <?php if ($logo) { ?>
                    <a href="<?php echo WP_HOME; ?>" title="<?php bloginfo('name'); ?>" class="logo-name">
                        <img src="<?php echo WP_HOME.$logo; ?>" class="img-fluid main-logo" alt="<?php bloginfo('name'); ?>">
                    </a>
                <?php } ?>
            </div>
            <div class="col-sm-10 col-8">
                <div class="menu-bar">
                    <div class="top-bar">
                        <ul>
                            <li class="open-hour">
                                <span>Hours: Open:</span><span class="badge badge-default"><?php echo $site_info['open_hour']; ?></span>
                            </li>
                            <li class="hotline">
                                <a href="tel:<?php echo $site_info['hotline_number']; ?>"><span>Hot Line: <?php echo $site_info['hotline_number']; ?></span></a>
                            </li>
                        </ul>
                    </div>
                    <nav class="stellarnav clearfix">
                        <?php  
                        wp_nav_menu(array(
                            'theme_location' => 'main',
                            'menu' => 'main-menu',
                            'depth' => 0,
                            'menu_class' => 'menu',
                            'container' => '',
                            'container_class' => ''
                        ));
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<?php if (is_front_page()) { ?>
    <div class="home-slide">
        <?php
            echo do_shortcode('[smartslider3 slider="2"]');
        ?>
    </div>   
<?php } ?>
