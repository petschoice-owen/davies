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
</body>
</html>