<?php

/**
 * Template for displaying search forms in Anna Lite
 *
 */ 

if ( anna_lite_is_sidebar_area() == true ) : ?>

    <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
        <div><label class="screen-reader-text" for="s"><?php esc_html_e( 'Search', 'anna-lite') ?></label>
            <input type="text" value="" name="s" id="s" />
            <input type="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'anna-lite') ?>" />
        </div>
    </form>

<?php else : ?>
    
    <form role="search" method="get" id="header-searchform" action="<?php echo esc_url(home_url('/')); ?>">
		<input type="text" placeholder="<?php esc_attr_e( 'Type here & click enter.',"anna-lite" ) ?>" name="s" id="header-s" autocomplete="off" />
    </form>
    <i class="fa fa-times searchform-close-button"></i>
    
<?php endif; ?>