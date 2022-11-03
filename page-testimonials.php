<?php
/**
*** Template Name: Testimonials Page
**/
?>
<?php get_header(); ?>
<body <?php body_class(); ?>>
    <?php include 'top-navigation.php'; ?>
    <main class="page-testimonials">
        <section class="hero hero-title">
            <div class="container container-narrow">
                <h1 class="text-center"><strong><?php the_title(); ?></strong></h1>
                <div class="description"><?php the_content(); ?></div>
            </div>
        </section>        
        <?php if ( have_posts() ) :
            $args = array(
                'post_type' => 'testimonial',
                'post_status' => 'publish',
                'posts_per_page' => -1, 
                'orderby' => 'date', 
                'order' => 'DESC',
            );
            $testimonial = new WP_Query( $args ); ?>
            <section class="testimonials content-section">
                <div class="items">
                    <?php while ( $testimonial->have_posts() ) : $testimonial->the_post(); ?> 
                        <?php $featured_img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full' ); ?>
                        <div class="item-testimonial">
                            <div class="container container-narrow">
                                <div class="wrapper">
                                    <div class="wrapper-column image">
                                        <div class="image-holder">
                                            <img src="<?php echo $featured_img[0]; ?>" alt="testimonial-image" />
                                        </div>
                                    </div>
                                    <div class="wrapper-column text">
                                        <p class="quote"><?php the_content(); ?></p>
                                        <p class="author"><span class="name"><?php the_title(); ?>, </span><span class="location"><?php the_field('testimonial_location'); ?></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            </section>
        <?php else : ?>
        <section class="testimonials content-section">
            <div class="container container-narrow">
                <div class="items no-items">
                    <h3 class="text-center">No Posts Yet</h3>
                </div>
            </div>
        </section>
        <?php endif; wp_reset_query(); ?>        
        <?php include 'cta-section.php'; ?>
    </main>
<?php get_footer(); ?>