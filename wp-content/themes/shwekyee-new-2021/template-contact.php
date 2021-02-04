<?php 
// Template Name: Contact Us
get_header(); 
$general = get_field('general_setting','option');
$map = get_field('map','option');
?>
<?php get_template_part('partials/inner-banner'); ?>

<main class="main-page">
    <div class="bg-gray-pink pd60">
        <div class="container">
            <section class="contact-info">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <h2 data-aos="zoom-out-up" data-aos-easing="ease" data-aos-delay="200" data-aos-offset="0">General Inquiry</h2>
                        <div class="media" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="400" data-aos-offset="0">
                            <i class="fas fa-phone-square-alt"></i>
                            <div class="media-body">
                                (95) <?php echo contact_link($general['contact_number'], 'tel:') ?>
                            </div>
                        </div>
                        <div class="media" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="600" data-aos-offset="0">
                            <i class="fas fa-envelope"></i>
                            <div class="media-body">
                                <?php echo contact_link($general['contact_email'], 'mailto:') ?>
                            </div>
                        </div>
                        <h2 data-aos="zoom-out-up" data-aos-easing="ease" data-aos-delay="800" data-aos-offset="0">Our Location</h2>
                        <div class="media" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="1000" data-aos-offset="0">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="media-body">
                                <p><?php echo $general['contact_address']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <h2 data-aos="zoom-out-up" data-aos-easing="ease" data-aos-delay="200" data-aos-offset="0">Request Information</h2>
                    </div>
                </div>
            </section>
            <?php
            /*
            |--------------------------------------------------------------
            | Google Map Section
            |--------------------------------------------------------------
            |
            */
            ?>
            <section class="map-section section-wrap">
                <div id="site-map"></div>
            </section>
        </div>
    </div>
</main>

<script>
var map;
function initMap() {
    var location = {lat: <?php echo $map['lat'] ?>,lng: <?php echo $map['lng'] ?> };
    	map = new google.maps.Map(document.getElementById('site-map'), {
    	center: location,
        zoom: 16,
    });
    var contentString = '<div id="content">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<h1 id="firstHeading" class="firstHeading"><?php echo bloginfo('name'); ?></h1>'+
        '<div id="bodyContent">'+
        '<p><?php echo ($site_info['contact_address']) ? $site_info['contact_address'] : ''; ?></p>'+
        '</div>'+
        '</div>';

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });
    var marker = new google.maps.Marker({
        position: location,
        map:map,
        icon : '<?php echo ASSET_URL; ?>images/map.png',
        animation: google.maps.Animation.BOUNCE
    });
    marker.addListener('click', function() {
        infowindow.open(map, marker);
    });
    marker.addListener('click', function() {
    map.setZoom(18);
    map.setCenter(marker.getPosition());
    });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC44n4EJxputPRoWzorOaszqW-dFoVN8UE&callback=initMap" async defer></script>
<?php get_footer(); ?>