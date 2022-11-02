<?php
/**
*** Template Name: About Page
**/
?>
<?php get_header(); ?>
<body <?php body_class(); ?>>
    <?php include 'top-navigation.php'; ?>
    <main class="page-about">
        <section class="hero hero-title">
            <div class="container">
                <h1 class="text-center"><strong><?php the_title(); ?></strong></h1>
            </div>
        </section>
        <section class="about content-section">
            <div class="container container-narrow">
                <div class="wrapper">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
        <?php include 'cta-section.php'; ?>
    </main>
<?php get_footer(); ?>