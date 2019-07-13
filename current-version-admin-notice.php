<?php
/**
 * Plugin Name: Current Version Admin Notice
 * Plugin URI:
 * Description: Shows the current WordPress version number in an admin notice on the Updates page, even when an update is available.
 * Version: 1.0.0
 * Author: Corey Salzano
 * Author URI: https://profiles.wordpress.org/salzano
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

add_action( 'admin_notices', 'salzano_current_version_admin_notice' );

function salzano_current_version_admin_notice() {
	$admin_page = get_current_screen();
	if( ! empty( $admin_page->base ) && 'update-core' == $admin_page->base ) {
		  ?>
  <div class="notice notice-info is-dismissible"><p><?php printf( __( 'This site is running WordPress %s.' ), get_bloginfo( 'version', 'display' ) ); ?></p></div>
  <?php
	}
}
