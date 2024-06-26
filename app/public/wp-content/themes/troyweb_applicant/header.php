<?php
/**
 * The template for displaying the header.
 *
 * @package TroyWeb Applicant
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="masthead" class="site-header" role="banner">
        <div class="container">
            <div class="row align-items-center">
                <!-- Site Branding / Logo Section -->
                <div class="col-md-auto">
                    <div class="site-branding">
                        <?php if (get_theme_support('custom-header')) : ?>
                            <?php
                            $custom_header = get_theme_support('custom-header');
                            $header_image = get_header_image();
                            ?>
                            <?php if ($header_image) : ?>
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="custom-header-link" rel="home">
                                    <!-- Adjusting header image size using inline style -->
                                    <img src="<?php echo esc_url($header_image); ?>" class="custom-header-image" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" style="height: auto; max-width: 100%;">
                                </a>
                            <?php else : ?>
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="site-title"><?php bloginfo('name'); ?></a>
                            <?php endif; ?>
                        <?php else : ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="site-title"><?php bloginfo('name'); ?></a>
                        <?php endif; ?>
                    </div>
                </div>

                
                <!-- Navigation Section -->
                <div class="col">
                    <nav id="site-navigation" class="main-navigation navbar navbar-expand-lg navbar-light" role="navigation">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primary-menu" aria-controls="primary-menu" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'troyweb-applicant'); ?>">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="primary-menu">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'menu_class' => 'navbar-nav ms-auto',
                            ));
                            ?>
                        </div>
                    </nav>
                </div>

                <!-- Header Buttons Section -->
                <div class="col-auto">
                    <div class="header-buttons d-flex align-items-center">
                        <a href="#" class="menu-item">About</a>
                        <a href="#" class="menu-item">Development</a>
                        <a href="#" class="menu-item">Projects</a>
                        <a href="#" class="button">Contact Me</a>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->

    <div id="content" class="site-content">
