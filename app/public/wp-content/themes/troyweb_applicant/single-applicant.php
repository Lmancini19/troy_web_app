<?php
/**
 * The template for displaying all single posts of the 'applicant' custom post type.
 *
 * @package YourTheme
 * @since YourTheme 1.0
 */

get_header(); // Includes header.php
?>

<main id="primary" class="site-main container">
    <?php
    // Start the loop to fetch the post data.
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                 
    <div class="page-content">
        <div class="title-section">
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
            ?>
        </div> <!-- .title-section -->

    <?php
    // Display other fields like species, skills, and about me
    $species = get_field('species');
    $skills = get_field('skills');
    $about_me = get_field('about_me');
    $image = get_field('image');
    ?>

    <div class="first-section-container large-body-copy">
        <div class="row">
            <div class="image col-md-6 order-md-1">
                <?php if ($image) : ?>
                    <div class="acf-image">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid">
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-md-6 order-md-2">
                <div class="acf">
                    <div class="row">
                        <div class="col-12">
                            <?php if ($species) : ?>
                                <div class="acf-species">
                                    <h2>Species:</h2>
                                    <p><?php echo esc_html($species); ?></p>
                                </div><!-- .acf-species -->
                            <?php endif; ?>
                        </div>

                        <div class="col-12">
                            <?php if ($skills && is_array($skills)) : ?>
                                <div class="acf-skills">
                                    <h2>Skills:</h2>
                                    <div class="skills-list">
                                        <?php 
                                        // Chunk the skills array into groups of 3 items
                                        $chunked_skills = array_chunk($skills, 3); 
                    
                                        // Loop through each chunk
                                        foreach ($chunked_skills as $chunk) {
                                            echo '<div class="skill-group">';
                                            foreach ($chunk as $skill) {
                                                echo '<span class="skill-item">' . esc_html($skill->name) . '</span>';
                                            }
                                            echo '</div>'; // Closing skill-group
                                        }
                                         ?>
                                    </div><!-- .skills-list -->
                                </div><!-- .acf-skills -->
                            <?php endif; ?>
                        </div><!-- .col-12 -->
                    </div><!-- .row -->
                </div><!-- .acf -->
            </div><!-- .col-md-6 -->
        </div><!-- .row -->

        <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
                <div class="about-me">
                    <?php if ($about_me) : ?>
                        <h2>About Me:</h2>
                        <p><?php echo esc_html($about_me); ?></p>
                    <?php endif; ?>
                </div><!-- .about-me -->
            </div><!-- .col-md-6 -->
        </div><!-- .row -->
    </div> <!-- .first-section-container -->

    <h2 class="core-values-h2">Core Values:</h2>
    <section class="core-values-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 core-value">
                    <div class="core-value-image">
                        <img src="http://troywebapp.local/wp-content/uploads/2024/06/tw-value-bekind.png" alt="Text that reads 'Be Kind'">
                    </div>
                    <div class="core-value-caption">
                        <h2>Be Kind</h2>
                        <p>Everything starts with kindness and sharing with others</p>
                    </div>
                </div>
                <div class="col-md-4 core-value">
                    <div class="core-value-image">
                        <img src="http://troywebapp.local/wp-content/uploads/2024/06/tw-value-beflex.png" alt="Text that reads 'Be Flexible'">
                    </div>
                    <div class="core-value-caption">
                        <h2>Be Flexible</h2>
                        <p>Responsive to change, adapting to new things as they arise</p>
                    </div>
                </div>
                <div class="col-md-4 core-value">
                    <div class="core-value-image">
                        <img src="http://troywebapp.local/wp-content/uploads/2024/06/tw-value-kickass.png" alt="Text that reads 'Kick Ass'">
                    </div>
                    <div class="core-value-caption">
                        <h2>Kick Ass!</h2>
                        <p>Creating strong work with attention to every detail</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="row experience-section">
    <div class="col-md-6 order-md-2">
        <img src="http://troywebapp.local/wp-content/uploads/2024/06/code-image.png" alt="Image of a computer screen with code displayed">
    </div>
    <div class="col-md-6 order-md-1">
        <div class="experience-content">
            <h2>Experience:</h2>
            <ul class="experience-list large-body-copy">
                <li>Web Development</li>
                <li>Database Design</li>
                <li>Tech Project Lead</li>
                <li>WordPress Expert</li>
            </ul>
        </div>
    </div>
    </section>
    </div><!-- .page-content -->
    </article><!-- #post-<?php the_ID(); ?> -->
    <?php
        endwhile;
    else :
        echo 'No posts found.';
    endif;
    ?>
</main><!-- #primary -->

<?php get_footer(); // Includes footer.php ?>