    <div class="footer-section">
        <div class="footer-top">
            <div class="container">
                <div class="logo-holder">
                    <?php if( get_field('theme_footer_logo', 'option') ): ?>
                        <img src="<?php the_field('theme_footer_logo', 'option'); ?>" alt="Davies Pet Food" />
                    <?php endif; ?>
                </div>
                <div class="contact">
                    <?php if( get_field('theme_footer_address', 'option') ): ?>
                        <p><?php the_field('theme_footer_address', 'option'); ?></p>
                    <?php endif; ?>
                    <ul>
                        <?php if( get_field('theme_footer_telephone', 'option') ): ?>
                            <li><span>Tel: </span><a href="tel:<?php the_field('theme_footer_telephone', 'option'); ?>"><?php the_field('theme_footer_telephone', 'option'); ?></a></li>
                            <p></p>
                        <?php endif; ?>
                        <?php if( get_field('theme_footer_fax', 'option') ): ?>
                            <li><span>Fax: </span><a href="tel:<?php the_field('theme_footer_fax', 'option'); ?>"><?php the_field('theme_footer_fax', 'option'); ?></a></li>
                            <p></p>
                        <?php endif; ?>
                        <?php if( get_field('theme_footer_freephone', 'option') ): ?>
                            <li><span>Freephone: </span><a href="tel:<?php the_field('theme_footer_freephone', 'option'); ?>"><?php the_field('theme_footer_freephone', 'option'); ?></a></li>
                            <p></p>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container-fluid">
                <?php wp_nav_menu( array( 
                    'theme_location'    => 'footer_menu',
                    'container'         => 'ul',
                    'menu_class'        => 'links',    
                )); ?>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>

    <!-- Cart Page -->
    <?php if ( is_page( 'cart' ) || is_cart() ) { ?>
        <script>
            var $ = jQuery;

            // add the restricted shipping zone message
            $(document).ready(function() {
                if ( $('.cart_totals').length ) {
                    $('<div class="restricted-message-wrapper"><p class="restricted-message">Apologies, the provided address is currently not within our delivery range. We only accept orders within the UK mainland - for orders outside this region, please contact the sales office.</p></div>').insertAfter('.cart_totals');
                }
            });

            $(document).ready(function() {
                // validate shipping zone on page load
                var shippingMethod = $('#shipping_method').text().trim();
                if ( shippingMethod.includes("Restricted Zone") ) {
                    // console.log("restricted zone");
                    $('body').addClass('restricted-zone');
                }
                else {
                    // console.log("UK Mainland");
                    $('body').removeClass('restricted-zone');
                }

                // hide/show proceed to checkout button
                if ( $('.woocommerce-shipping-methods').length ) {
                    $('.wc-proceed-to-checkout').show();
                }
                else {
                    $('.wc-proceed-to-checkout').hide();
                }
            });

            $('body').on('updated_cart_totals', function() {
                // console.log('updated_cart_totals triggered');
                
                // validate shipping zone on change address
                var shippingMethod = $('#shipping_method').text().trim();

                if ( shippingMethod.includes("Restricted Zone") ) {
                    // console.log("restricted zone");
                    $('body').addClass('restricted-zone');
                }
                else {
                    // console.log("UK Mainland");
                    $('body').removeClass('restricted-zone');
                }

                // hide/show proceed to checkout button
                if ( $('.woocommerce-shipping-methods').length ) {
                    $('.wc-proceed-to-checkout').show();
                }
                else {
                    $('.wc-proceed-to-checkout').hide();
                }
            });
        </script>
    <?php } ?>

    <!-- Checkout Page -->
    <?php if ( is_page( 'checkout' ) || is_checkout() ) { ?>
        <script>
            var $ = jQuery;
            // console.log("checkout - test");

            // add the restricted shipping zone message
            $(document).ready(function() {
                if ( $('.woocommerce-checkout-review-order').length ) {
                    $('<div class="restricted-message-wrapper"><p class="restricted-message">Apologies, the provided address is currently not within our delivery range. We only accept orders within the UK mainland - for orders outside this region, please contact the sales office.</p></div>').insertAfter('.woocommerce-checkout-review-order');
                }
            });

            // validate shipping zone on page load
            $(document).ready(function() {
                var shippingMethod = $('#shipping_method').text().trim();
                if ( shippingMethod.includes("Restricted Zone") ) {
                    // console.log("on load - restricted zone");
                    $('body').addClass('restricted-zone');
                }
                else {
                    // console.log("on load - UK Mainland");
                    $('body').removeClass('restricted-zone');
                }
            });

            // validate shipping zone on change address
            $('body').on('updated_checkout', function() {
                // console.log('updated_checkout triggered');

                var shippingMethod = $('#shipping_method').text().trim();

                if ( shippingMethod.includes("Restricted Zone") ) {
                    // console.log("restricted zone");
                    $('body').addClass('restricted-zone');
                }
                else {
                    // console.log("UK Mainland");
                    $('body').removeClass('restricted-zone');
                }
            });

            // validate shipping zone on change postcode
            $('#billing_postcode, #shipping_postcode').on('focusout, blur', function() {
                // console.log('updated_checkout triggered');
                $(document.body).trigger('update_checkout');
            });
        </script>
    <?php } ?>
</body>
</html>