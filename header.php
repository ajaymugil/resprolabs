<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package resprolabs
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/foundation.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/components.css">
        <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>


            <header class="row header site-header">
                <div class="medium-12 large-4 columns logo">
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                    <h2 class="site-description"><?php bloginfo('description'); ?></h2>
                </div> <!-- Logo -->

                <div class="medium-12 large-8 columns primary-menu-wrapper">
                    <nav id="site-navigation" class="primary-menu" role="navigation">
                        <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                    </nav><!-- Nav Ends -->
                </div>  <!-- Primary Menu Wrapper Ends -->
            </header> <!--  Header Ends -->





