<?php
/**
 * The template for displaying all single posts of the 'applicant' custom post type.
 *
 * @package YourTheme
 * @since YourTheme 1.0
 */

get_header(); // Includes header.php
?>

<main id="primary" class="site-main">
    <div class="container">
        <?php
        // Start the loop to fetch the post data.
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <?php
                        // Display background image with overlay
                        $background_image = get_field('background_image');
                        if ($background_image) :
                            echo '<div class="background-image" style="background-image: url(' . esc_url($background_image['url']) . ');">';
                            echo '<h2 class="title-overlay">' . esc_html(get_the_title()) . '</h2>';
                            echo '</div>';
                        endif;

                        // Display other fields like image, species, skills, and about me
                        $applicant_image = get_field('applicant_image');
                        $species = get_field('species');
                        $skills = get_field('skills');
                        $about_me = get_field('about_me');
                        ?>

                        <div class="applicant-details">
                            <?php if ($applicant_image) : ?>
                                <div class="applicant-image">
                                    <img src="<?php echo esc_url($applicant_image['url']); ?>" alt="<?php echo esc_attr($applicant_image['alt']); ?>">
                                </div>
                            <?php endif; ?>

                            <div class="applicant-info">
                                <?php if ($species) : ?>
                                    <h3>Species</h3>
                                    <p><?php echo esc_html($species); ?></p>
                                <?php endif; ?>

                                <?php if ($skills) : ?>
                                    <h3>Skills</h3>
                                    <ul class="skills-list">
                                        <?php foreach ($skills as $skill) : ?>
                                            <li><?php echo esc_html($skill); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <?php if ($about_me) : ?>
                                    <h3>About Me</h3>
                                    <p><?php echo esc_html($about_me); ?></p>
                                <?php endif; ?>
                            </div><!-- .applicant-info -->
                        </div><!-- .applicant-details -->

                        <?php
                        // Output additional content if needed
                        the_content();
                        ?>
                    </div><!-- .entry-content -->
                </article><!-- #post-<?php the_ID(); ?> -->
                <?php
            endwhile;
        else :
            echo 'No posts found.';
        endif;
        ?>
    </div><!-- .container -->
</main><!-- #primary -->

<?php get_footer(); // Includes footer.php ?>