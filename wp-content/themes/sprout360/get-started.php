<?php
/**
 Template Name: Getting Started
 */

get_header(); ?>

    <section id="primary" class="content-area fluid get-started ">
        <main id="main" class="site-main" role="main">
            <div class="container mx-auto">

                <?php
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', 'page' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                ?>

            </div>

        </main>
        <!-- #main -->
    </section>
    <!-- #primary -->

    <?php
get_footer();
