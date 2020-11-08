<?php
/**
 * Plugin Name:     Woocommerce Request For Reviews
 * Plugin URI:      https://github.com/abhishek-pokhriyal/woocommerce-request-for-reviews
 * Description:     A WooCommerce extension that helps you request your customers to review products.
 * Author:          ColoredCow
 * Author URI:      https://coloredcow.com
 * Text Domain:     woocommerce-request-for-reviews
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Woocommerce_Request_For_Reviews
 */

add_filter(
	'query_vars',
	function( $vars ) {
		$vars[] = 'wcrr-review';
		return $vars;
	},
	0
);

add_action(
	'init',
	function() {
		add_rewrite_rule( 'add-review\/([a-z0-9]+)[\/]?$', 'index.php?wcrr-review=$matches[1]', 'top' );
	},
	10,
	0
);

add_action(
	'parse_request',
	function( $query ) {
		global $wp;

		if ( ! $wp->query_vars['wcrr-review'] ) {
			return;
		}

		$review_hash = $wp->query_vars['wcrr-review'];

		// 1. Find the order associated with the hash.
		// 2. Load the review form.
	}
);
