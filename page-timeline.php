<?php
/**
*** Template Name: Timeline Page
**/
?>
<?php get_header(); ?>
<body <?php body_class(); ?>>
    <?php include 'top-navigation.php'; ?>
    <main class="page-timeline">
        <section class="hero hero-title">
            <div class="container container-narrow">
                <h1 class="text-center"><strong><?php the_title(); ?></strong></h1>
            </div>
        </section>
        <section class="timeline-section">
            <div class="container container-narrow">
                <div class="timeline">

                    <?php if( have_rows('timeline_item') ):
                        while( have_rows('timeline_item') ) : the_row(); ?>

                            <div class="timeline-item">
                                <?php if( get_sub_field('timeline_year') ): ?>
                                    <div class="timeline-year">
                                        <p class="year"><?php the_sub_field('timeline_year'); ?></p>
                                    </div>
                                <?php endif; ?>
                                
                                <div class="timeline-content">
                                    <div class="content-wrapper">

                                        <?php if( have_rows('timeline_content') ):
                                            while ( have_rows('timeline_content') ) : the_row();

                                                if( get_row_layout() == 'content_image' ):
                                                    $image = get_sub_field('image'); ?>
                                                    <div class="image">
                                                        <img src="<?php echo $image; ?>" alt="" />
                                                    </div>

                                                <?php elseif( get_row_layout() == 'content_text' ): ?>
                                                    <div class="text">

                                                        <?php if( have_rows('content') ):
                                                            while ( have_rows('content') ) : the_row();

                                                                if( get_row_layout() == 'heading' ):
                                                                    $heading = get_sub_field('heading_text'); ?>
                                                                    <div class="title text-center">
                                                                        <h4><b><?php echo $heading; ?></b></h4>
                                                                    </div>
                                                                    
                                                                <?php elseif( get_row_layout() == 'text_editor' ): 
                                                                    $text_editor = get_sub_field('text_editor_text'); ?>
                                                                    <div class="content">
                                                                        <?php echo $text_editor; ?>
                                                                    </div>

                                                                <?php endif;
                                                            endwhile;
                                                            else :
                                                        endif; ?>
                                                    </div>

                                                <?php endif;
                                            endwhile;
                                            else :
                                        endif; ?>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile;
                        else :
                    endif; ?>

                </div>
            </div>
        </section>
        <?php include 'cta-section.php'; ?>
    </main>
<?php get_footer(); ?>