<?php
/**
*** Template Name: Contact Page
**/
?>
<?php get_header(); ?>
<body <?php body_class(); ?>>
    <?php include 'top-navigation.php'; ?>
    <main class="page-contact">
        <section class="hero hero-title">
            <div class="container container-narrow">
                <h1 class="text-center"><strong><?php the_title(); ?></strong></h1>
            </div>
        </section>
        <section class="contact content-section">
            <div class="container container-narrow">
                <div class="wrapper">
                    <?php the_content(); ?>
                    <div class="form contact-form">
                        <?php echo do_shortcode(('[contact-form-7 id="'.get_field('contact_page_form').'"]')); ?>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'cta-section.php'; ?>
    </main>
<?php get_footer(); ?>