    <?php 
        $general = get_field('general_setting', 'option');
        $foot_logo = $general['footer_logo'];
        $address = $general['contact_address'];
        $phone = $general['contact_number'];
        $email = $general['contact_email'];
    ?>
    <footer class="pd60">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="footer-content text-center">
                        <img src="<?php echo $foot_logo ?>" alt="<?php bloginfo('name'); ?>" class="img-fluid">
                        <p class="mt-3"><?php echo $address; ?></p>
                        <div class="mt-3">
                            <span>Phone: </span><?php contact_link($phone, 'tel:'); ?>
                        </div>
                        <div class="mt-3">
                            <span>Email: </span><?php contact_link($email, 'mailto:'); ?>
                        </div>
                    </div>
                    <hr/>
                </div>
            </div>
            <div class="copyright-container">
                <p>
                    <a href="//www.b360mm.com/contact/" target="_blank" title="B360 Website Development Service in Yangon, Myanmar">
                        Transformed by <span class="service-owner"> B360</span> Tech
                    </a> 
                    <img src="<?php echo ASSET_URL.'images/b360-copyright.png'; ?>" class="img-fluid service-owner-logo" alt="B360 Website Development Service in Yangon, Myanmar">
                    <span>Company Limited</span>
                </p>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>