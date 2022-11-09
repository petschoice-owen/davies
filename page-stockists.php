<?php
/**
*** Template Name: Stockists Page
**/ 
?>
<?php get_header(); ?>
<body <?php body_class(); ?>>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php include 'top-navigation.php'; ?>
			<main class="page-stockists">
				<section class="hero hero-title">
					<div class="container container-narrow">
						<h1 class="text-center"><strong><?php the_title(); ?></strong></h1>
					</div>
				</section>
				<section class="stockists content-section">
					<div class="container container-narrow">
						<div class="wrapper">
							<?php the_content(); ?>
						</div>
					</div>
				</section>
				<?php include 'cta-section.php'; ?>
			</main>
		<?php endwhile; ?>
		<?php else : ?>
	<?php endif; ?>
<?php get_footer(); ?>
