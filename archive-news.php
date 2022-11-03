<?php
/**
*** The template for displaying News page
**/
?>
<?php get_header(); ?>
<style>
	/* .ajax-load-more-wrap .alm-btn-wrap {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        padding: 0;
    	margin: 0;
	}
	.ajax-load-more-wrap .alm-load-more-btn.btn-brand {
		height: auto !important;
		display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: -webkit-fit-content;
        width: -moz-fit-content;
        width: fit-content;
        padding: 25px 45px !important;
        margin: 30px auto;
        font-family: "HelveticaNeue Bold" !important;
        font-size: 18px !important;
        line-height: 1.2 !important;
        color: #fff;
        text-transform: uppercase;
        background-color: #ac8f63 !important;
        border: none;
        -webkit-box-shadow: 0 0 5px 0 rgba(0,0,0,.5);
        box-shadow: 0 0 5px 0 rgba(0,0,0,.5);
        border-radius: 4px;
        -webkit-transition: all .25s ease-in-out;
        -o-transition: all .25s ease-in-out;
        transition: all .25s ease-in-out;
	}
	.ajax-load-more-wrap .alm-load-more-btn.btn-brand:hover,
    .ajax-load-more-wrap .alm-load-more-btn.btn-brand:focus {
		color: #fff;
        background-color: #90754c !important;
        outline: none !important;
        box-shadow: 0 0 5px 0 rgba(0,0,0,.5);
	}
    .ajax-load-more-wrap .alm-load-more-btn.btn-brand::before {
        opacity: 0 !important;
        -webkit-transition: all .25s ease-in-out;
        -o-transition: all .25s ease-in-out;
        transition: all .25s ease-in-out;
    }
    .ajax-load-more-wrap .alm-load-more-btn.btn-brand.done {
		display: none !important;
	}
    .ajax-load-more-wrap .alm-load-more-btn.btn-brand.loading {
		color: transparent !important;
	}
    .ajax-load-more-wrap .alm-load-more-btn.btn-brand.loading::before {
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto;
        background: url(/wp-content/themes/tastybone/assets/images/custom-loading.gif) no-repeat center center;
        background-size: 30px;
        background-color: transparent;
        opacity: 1 !important;
	}

    @media (max-width: 991px) {
        .ajax-load-more-wrap .alm-load-more-btn.btn-brand {
            padding: 18px 30px !important;
        }
    } */
</style>
<body <?php body_class(); ?>>
    <?php include 'top-navigation.php'; ?>
    <main class="page-news">
        <section class="hero hero-title">
            <div class="container">
                <h1 class="text-center"><strong><?php the_field('news_page_title', 'option'); ?></strong></h1>
                <h3 class="text-center">No Posts Yet</h3>
            </div>
        </section>
        <?php if ( have_posts() ) :
            $args = array(
                'post_type' => 'news',
                'post_status' => 'publish',
                'posts_per_page' => -1, 
                'orderby' => 'date', 
                'order' => 'DESC',
            );
            $news = new WP_Query( $args ); ?>
            <section class="news-events">
                <div class="container">
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
        <section class="news-events content-section">
            <div class="container">
                <div class="items no-items">
                    <h3>No Posts Yet</h3>
                </div>
            </div>
        </section>
        <?php endif; wp_reset_query(); ?>        
        <?php include 'cta-section.php'; ?>
    </main>
<?php get_footer(); ?>