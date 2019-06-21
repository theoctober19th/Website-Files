<?php
/**
 * @package gridsby
 */
?>


	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title( sprintf( '<h1 class="entry-title"><span class="title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></span></h1>' ); ?>

			<?php if ( 'post' == get_post_type() ) : ?>
			
            <div class="entry-meta">
                <span class="meta-block"><i class="fa fa-list"></i> <?php the_category(); ?></span>
                <span class="meta-block"><?php echo get_avatar( get_the_author_meta('email'), get_the_author() ); ?><?php the_author(); ?></span>
                <span class="meta-block"><i class="fa fa-clock-o"></i> <?php the_time( get_option( 'date_format' ) ); ?></span>
			</div><!-- .entry-meta --> 
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
        	<?php the_post_thumbnail( 'large', array( 'class' => 'archive-image' ) ); ?>
			<?php
				/* translators: %s: Name of current post */
				if ( 'option2' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_content' ) ) ) :
				the_content( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'gridsby'  ) );
				else :
				the_excerpt(); 
				endif; 
			?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'gridsby' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
        
        <footer class="entry-footer">
			<a href="<?php echo get_permalink( ); ?>"> 
				<button class="read-more"> 
            		
            			<?php echo esc_html( get_theme_mod( 'gridsby_read_more', __( 'Read More', 'gridsby' ) )) ?>   
            		
            	</button> 
            </a> 
		</footer><!-- .entry-footer -->

	</article><!-- #post-## -->
