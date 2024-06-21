<?php
/**
 * The template for displaying the footer.
 *
 * @package TroyWeb Applicant
 */
?>

<footer id="colophon" class="site-footer bg-light text-dark py-4" role="contentinfo">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="footer-logo mb-3">
                    <?php
                    // Get the custom logo ID set via the WordPress Customizer
                    $custom_logo_id = get_theme_mod('custom_logo');
                    // Retrieve the image URL using the logo ID
                    $logo_image = wp_get_attachment_image_src($custom_logo_id, 'full');
                    // Check if a logo is set
                    if ($logo_image) :
                    ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="custom-logo-link" rel="home">
                            <img src="<?php echo esc_url($logo_image[0]); ?>" class="custom-logo img-fluid" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                        </a>
                    <?php endif; ?>
                </div><!-- .footer-logo -->
            </div>
            <div class="col-md-6 text-md-end">
                <div class="footer-social-icons">
                    <ul class="social-icons list-inline mb-0">
                        <li class="list-inline-item"><a href="#" target="_blank" rel="noopener noreferrer" style="color: #474852;"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" rel="noopener noreferrer" style="color: #474852;"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" rel="noopener noreferrer" style="color: #474852;"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" rel="noopener noreferrer" style="color: #474852;"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div><!-- .footer-social-icons -->
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</footer><!-- #colophon -->


