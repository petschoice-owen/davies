<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?php global $wp;
    $current_url = home_url(add_query_arg(array(), $wp->request)); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Davies Pet Food" />
    <meta name="author" content="Pets Choice Ltd" />
    <meta name="format-detection" content="telephone=no" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png">
    <title><?php if (is_front_page()) { bloginfo('name'); ?> | <?php bloginfo('description'); } else { wp_title(''); } ?></title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" />
    <link rel="canonical" href="<?php echo $current_url; ?>" />
	<?php wp_head(); ?>
</head>