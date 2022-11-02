<?php
/**
*** Template Name: Home Page
**/
?>
<?php get_header(); ?>
<body <?php body_class(); ?>>
    <?php include 'top-navigation.php'; ?>
    <main class="page-home">
        <section class="hero hero-slider slider">
            <div class="custom-slider-wrapper">
                <div class="custom-slider">
                    <?php
                        if( have_rows('hero_slider') ):
                        while( have_rows('hero_slider') ) : the_row();
                            $heading = get_sub_field('heading'); 
                            $description = get_sub_field('description'); 
                            $background_image = get_sub_field('background_image'); ?>
                            <div class="slide-item">
                                <div class="slide-background" style="background-image: url(<?php echo $background_image; ?>);"></div>
                                <div class="container">
                                    <div class="slide-content">
                                        <div class="wrapper">
                                            <div class="slide-heading"><?php echo $heading; ?></div>
                                            <p class="slide-description"><?php echo $description; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                        else :
                        endif;
                    ?>
                </div>
            </div>
        </section>
        <section class="featured">
            <div class="container">
                <div class="wrapper">
                    <div class="wrapper-column text">
                        <?php the_field('featured_text_content'); ?>
                    </div>
                    <div class="wrapper-column image">
                        <div class="image-holder">
                            <img src="<?php the_field('featured_image'); ?>" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="range">
            <div class="container">
                <div class="section-title"><?php the_field('range_title'); ?></div>
                <div class="wrapper">
                    <div class="wrapper-column text">
                        <?php the_field('range_text_content'); ?>
                    </div>
                    <div class="wrapper-column checklist">
                        <ul>
                            <?php
                                if( have_rows('range_list') ):
                                while( have_rows('range_list') ) : the_row();
                                    $list_item = get_sub_field('list_item'); ?>
                                    <li><?php echo $list_item; ?></li>
                                <?php endwhile;
                                else :
                                endif;
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="button-holder">
                    <a href="/shop" class="button-white-outline">View Shop</a>
                </div>
            </div>
        </section>
        <?php if ( have_posts() ) :
            $args = array(
                'post_type' => 'testimonial',
                'post_status' => 'publish',
                'posts_per_page' => 3, 
                'orderby' => 'date', 
                'order' => 'DESC',
            );
            $testimonial = new WP_Query( $args ); ?>
            <section class="testimonials testimonials-slider">
                <div class="container">
                    <div class="section-title"><?php the_field('testimonials_title'); ?></div>
                    <div class="custom-slider">
                        <?php while ( $testimonial->have_posts() ) : $testimonial->the_post(); ?> 
                            <?php $featured_img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full' ); ?>
                            <div class="slide-item">
                                <div class="wrapper">
                                    <div class="wrapper-column image">
                                        <div class="image-holder">
                                            <img src="<?php echo $featured_img[0]; ?>" alt="testimonial-image" />
                                        </div>
                                    </div>
                                    <div class="wrapper-column text">
                                        <div class="quote"><?php the_content(); ?></div>
                                        <p class="author"><span class="name"><?php the_title(); ?>, </span><span class="location"><?php the_field('testimonial_location'); ?></span></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </section>
        <?php else : ?>
            <!-- <div class="page-404">
                <section class="404">
                    <div class="container">
                        <div class="content">
                            <h2><?php the_field('404_content_text', 'option'); ?></h2>
                            <div class="button-holder">
                                <a href="<?php the_field('404_content_button_link_1', 'option'); ?>" class="btn-brand btn-arrow-right"><?php the_field('404_content_button_text_1', 'option'); ?></a>
                                <a href="<?php the_field('404_content_button_link_2', 'option'); ?>" class="btn-brand btn-arrow-right"><?php the_field('404_content_button_text_2', 'option'); ?></a>
                            </div>
                        </div>
                    </div>
                    <img src="<?php the_field('404_content_image', 'option'); ?>" class="image-dog" alt="" />
                </section>
            </div> -->
        <?php endif; wp_reset_query(); ?>
        <?php if ( have_posts() ) :
            $args = array(
                'post_type' => 'news',
                'post_status' => 'publish',
                'posts_per_page' => 3, 
                'orderby' => 'date', 
                'order' => 'DESC',
            );
            $news = new WP_Query( $args ); ?>
            <section class="news-events">
                <div class="container">
                    <div class="section-title"><?php the_field('news_title'); ?></div>
                    <div class="items">
                        <?php while ( $news->have_posts() ) : $news->the_post(); ?> 
                            <?php $featured_img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full' ); ?>
                            <div class="item">
                                <div class="wrapper">
                                    <a href="<?php the_permalink(); ?>" class="image-link">
                                        <img src="<?php echo $featured_img[0]; ?>" alt="Featured Image" />
                                    </a>
                                    <p class="date"><?php the_time( 'jS F Y' );?></p>
                                    <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <p><?php echo the_excerpt(); ?></p>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </section>
        <?php else : ?>
            <!-- <div class="page-404">
                <section class="404">
                    <div class="container">
                        <div class="content">
                            <h2><?php the_field('404_content_text', 'option'); ?></h2>
                            <div class="button-holder">
                                <a href="<?php the_field('404_content_button_link_1', 'option'); ?>" class="btn-brand btn-arrow-right"><?php the_field('404_content_button_text_1', 'option'); ?></a>
                                <a href="<?php the_field('404_content_button_link_2', 'option'); ?>" class="btn-brand btn-arrow-right"><?php the_field('404_content_button_text_2', 'option'); ?></a>
                            </div>
                        </div>
                    </div>
                    <img src="<?php the_field('404_content_image', 'option'); ?>" class="image-dog" alt="" />
                </section>
            </div> -->
        <?php endif; wp_reset_query(); ?>
    </main>
<?php get_footer(); ?>