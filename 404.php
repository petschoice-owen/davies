<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */

get_header(); ?>
<body <?php body_class(); ?>>
	<?php include 'top-navigation.php'; ?>
	<main class="page-legal page-404">
        <section class="hero hero-title">
            <div class="container container-narrow">
				<h1 class="text-center"><strong><?php the_field('404_title', 'option'); ?></strong></h1>
            </div>
        </section>
        <section class="legal content-section">
            <div class="container container-narrow">
                <div class="wrapper text-center">
					<?php the_field('404_content', 'option'); ?>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>