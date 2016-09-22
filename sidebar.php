<?php
/**
 * The sidebar containing the secondary widget area
 *
 * Displays on posts and pages.
 *
 * If no active widgets are in this sidebar, hide it completely.
 *
 * @package WordPress
 */

if ( is_active_sidebar( 'sidebar_widget' ) ) : ?>
	<?php dynamic_sidebar( 'sidebar_widget' ); ?>
<?php endif; ?>