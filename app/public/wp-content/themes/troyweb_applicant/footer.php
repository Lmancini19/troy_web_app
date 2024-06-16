<?php
/**
 * The template for displaying the footer.
 *
 * @package TroyWeb Applicant
 */
?>

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-logo">
        <?php
        $custom_logo_id = get_theme_mod('footer_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
        if ($logo) :
            ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="custom-logo-link" rel="home">
                <img src="<?php echo esc_url($logo[0]); ?>" class="custom-logo" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
            </a>
        <?php endif; ?>
    </div><!-- .footer-logo -->

    <div class="footer-social-icons">
        <ul class="social-icons">
            <li><a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
    </div><!-- .footer-social-icons -->
</footer><!-- #colophon -->

