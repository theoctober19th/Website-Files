<?php
/**
Template Name: Left Sidebar
 *
 * @package gridsby
 */

get_header(); ?>

<div class="grid grid-pad">
	<div class="col-9-12 content-wrapper push-right">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
    
                <?php while ( have_posts() ) : the_post(); ?>
    
                    <?php get_template_part( 'content', 'page' ); ?>
    
                    <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || '0' != get_comments_number() ) :
                            comments_template();
                        endif;
                    ?>
    
                <?php endwhile; // end of the loop. ?>
    
            </main><!-- #main -->
        </div><!-- #primary -->
    </div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
