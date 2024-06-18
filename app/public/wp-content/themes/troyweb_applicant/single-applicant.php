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

                    <div class="page-content">
                        <?php
                        // Display background image with overlay
                        $background_image = get_field('background_image');
                        if ($background_image) :
                            echo '<div class="background-image" style="background-image: url(' . esc_url($background_image['url']) . ');">';
                            
                            // Get the title and split it by ': ' to add line break
                            $title = get_the_title();
                            $title_parts = explode(': ', $title);
                            
                            if (count($title_parts) > 1) {
                                // Output the title with line break
                                echo '<h1 class="title-overlay">' . esc_html($title_parts[0]) . ':</h1>';
                                echo '<h1 class="title-overlay">' . esc_html($title_parts[1]) . '</h1>';
                            } else {
                                // Output the full title if there's no ': ' separator
                                echo '<h1 class="title-overlay">' . esc_html($title) . '</h1>';
                            }
                            
                            echo '</div>'; // background-image 
                                echo '<div class="circle">';
                                echo '</div>'; // circle 
                        endif;

                        // Display other fields like species, skills, and about me
                        $species = get_field('species');
                        $skills = get_field('skills');
                        $about_me = get_field('about_me');
                        $image = get_field('image');
                        ?>

                        <div class="large-body-copy applicant-details">
                            <div class="acf">
                                <?php if ($image) : 
                                    echo '<div class="acf-image">';
                                    echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">'; 
                                    echo '</div>'; 
                                endif; ?>
                                
                                <div class="acf-copy">
                                    <div class="acf-species">
                                        <?php if ($species) : ?>
                                            <h2>Species:</h2>
                                            <p><?php echo esc_html($species); ?></p>
                                        <?php endif; ?>
                                    </div>

                                    <div class="acf-skills">
                                        <?php if ($skills && is_array($skills)) : ?>
                                            <h2>Skills:</h2>
                                            <div class="skills-list">
                                                <?php foreach ($skills as $skill) : ?>
                                                    <span class="skill-item"><?php echo esc_html($skill->name); ?></span>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="acf-about-me">
                                        <?php if ($about_me) : ?>
                                            <h2>About Me:</h2>
                                            <p><?php echo esc_html($about_me); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div><!-- .acf-copy -->
                            </div><!-- .acf -->
                        </div><!-- .applicant-details -->
                    </div><!-- .page-content -->
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