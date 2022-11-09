<?php 
    if ( is_page( array( 'davies-stockists' ) ) ) { // either in about us, or contact, or management page is in view ?>
        <section class="cta">
            <div class="container">
                <div class="wrapper">
                    <div class="wrapper-item">
                        <?php
                            if( have_rows('cta_news', 'option') ):
                            while( have_rows('cta_news', 'option') ) : the_row();
                                $cta_news_title = get_sub_field('cta_news_title', 'option'); 
                                $cta_news_url = get_sub_field('cta_news_url', 'option'); 
                                $cta_news_icon = get_sub_field('cta_news_icon', 'option'); ?>
                                <a href="<?php echo $cta_news_url; ?>" class="cta-link">
                                    <div class="text">
                                        <h5><b><?php echo $cta_news_title; ?></b></h5>
                                    </div>
                                    <div class="image">
                                        <img src="<?php echo $cta_news_icon; ?>" alt="" />
                                    </div>
                                </a>
                            <?php endwhile;
                            else :
                            endif;
                        ?>
                    </div>
                    <div class="wrapper-item">
                        <?php
                            if( have_rows('cta_shop', 'option') ):
                            while( have_rows('cta_shop', 'option') ) : the_row();
                                $cta_shop_title = get_sub_field('cta_shop_title', 'option'); 
                                $cta_shop_url = get_sub_field('cta_shop_url', 'option'); 
                                $cta_shop_icon = get_sub_field('cta_shop_icon', 'option'); ?>
                                <a href="<?php echo $cta_shop_url; ?>" class="cta-link">
                                    <div class="text">
                                        <h5><b><?php echo $cta_shop_title; ?></b></h5>
                                    </div>
                                    <div class="image">
                                        <img src="<?php echo $cta_shop_icon; ?>" alt="" />
                                    </div>
                                </a>
                            <?php endwhile;
                            else :
                            endif;
                        ?>
                    </div>
                    <div class="wrapper-item">
                        <?php
                            if( have_rows('cta_testimonials', 'option') ):
                            while( have_rows('cta_testimonials', 'option') ) : the_row();
                                $cta_testimonials_title = get_sub_field('cta_testimonials_title', 'option'); 
                                $cta_testimonials_url = get_sub_field('cta_testimonials_url', 'option'); 
                                $cta_testimonials_icon = get_sub_field('cta_testimonials_icon', 'option'); ?>
                                <a href="<?php echo $cta_testimonials_url; ?>" class="cta-link">
                                    <div class="text">
                                        <h5><b><?php echo $cta_testimonials_title; ?></b></h5>
                                    </div>
                                    <div class="image">
                                        <img src="<?php echo $cta_testimonials_icon; ?>" alt="" />
                                    </div>
                                </a>
                            <?php endwhile;
                            else :
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </section>
    <?php } else { ?>
        <section class="cta">
            <div class="container">
                <div class="wrapper">
                    <div class="wrapper-item">
                        <?php
                            if( have_rows('cta_stockist', 'option') ):
                            while( have_rows('cta_stockist', 'option') ) : the_row();
                                $cta_stockist_title = get_sub_field('cta_stockist_title', 'option'); 
                                $cta_stockist_url = get_sub_field('cta_stockist_url', 'option'); 
                                $cta_stockist_icon = get_sub_field('cta_stockist_icon', 'option'); ?>
                                <a href="<?php echo $cta_stockist_url; ?>" class="cta-link">
                                    <div class="text">
                                        <h5><b><?php echo $cta_stockist_title; ?></b></h5>
                                    </div>
                                    <div class="image">
                                        <img src="<?php echo $cta_stockist_icon; ?>" alt="" />
                                    </div>
                                </a>
                            <?php endwhile;
                            else :
                            endif;
                        ?>
                    </div>
                    <div class="wrapper-item">
                        <?php
                            if( have_rows('cta_shop', 'option') ):
                            while( have_rows('cta_shop', 'option') ) : the_row();
                                $cta_shop_title = get_sub_field('cta_shop_title', 'option'); 
                                $cta_shop_url = get_sub_field('cta_shop_url', 'option'); 
                                $cta_shop_icon = get_sub_field('cta_shop_icon', 'option'); ?>
                                <a href="<?php echo $cta_shop_url; ?>" class="cta-link">
                                    <div class="text">
                                        <h5><b><?php echo $cta_shop_title; ?></b></h5>
                                    </div>
                                    <div class="image">
                                        <img src="<?php echo $cta_shop_icon; ?>" alt="" />
                                    </div>
                                </a>
                            <?php endwhile;
                            else :
                            endif;
                        ?>
                    </div>
                    <div class="wrapper-item">
                        <?php
                            if( have_rows('cta_testimonials', 'option') ):
                            while( have_rows('cta_testimonials', 'option') ) : the_row();
                                $cta_testimonials_title = get_sub_field('cta_testimonials_title', 'option'); 
                                $cta_testimonials_url = get_sub_field('cta_testimonials_url', 'option'); 
                                $cta_testimonials_icon = get_sub_field('cta_testimonials_icon', 'option'); ?>
                                <a href="<?php echo $cta_testimonials_url; ?>" class="cta-link">
                                    <div class="text">
                                        <h5><b><?php echo $cta_testimonials_title; ?></b></h5>
                                    </div>
                                    <div class="image">
                                        <img src="<?php echo $cta_testimonials_icon; ?>" alt="" />
                                    </div>
                                </a>
                            <?php endwhile;
                            else :
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </section>
    <?php }
?>