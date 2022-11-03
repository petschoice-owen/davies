<?php
/**
 * The template for displaying any single news post.
 *
 */
 
get_header(); ?>
<body <?php body_class(); ?>>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php include 'top-navigation.php'; ?>
			<main class="page-single-news">
				<section class="single-news">
					<div class="container container-narrow">
						<div class="back">
							<a href="#">Back</a>
						</div>
						<div class="article-intro">
							<?php $featured_img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full' ); ?>
							<?php 
								if ($featured_img) {
									echo '<div class="featured-image"><img src="'. $featured_img[0] .' " alt="Featured Image" /> </div>';
								}
							?>
							<p class="date"><?php the_time( 'jS F Y' );?></p>
							<h4 class="title"><?php the_title(); ?></h4>
						</div>
						<div class="article-content">
							<?php the_content(); ?>
						</div>
					</div>
				</section>
				<?php include 'cta-section.php'; ?>
			</main>
		<?php endwhile; ?>
		<?php else : ?>
		<!-- <article class="post error">
			<h1 class="404">Nothing has been posted like that yet</h1>
		</article> -->
	<?php endif; ?>
<?php get_footer(); ?>
