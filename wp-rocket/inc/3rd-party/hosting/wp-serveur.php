<?php

defined( 'ABSPATH' ) || exit;

/**
 * Allow to purge Varnish on WP Serveur websites.
 *
 * @since 2.6.11
 */
add_filter( 'do_rocket_varnish_http_purge', '__return_true' );
// Prevent mandatory cookies on hosting with server cache.
add_filter( 'rocket_cache_mandatory_cookies', '__return_empty_array', PHP_INT_MAX );

/**
 * Changes the text on the Varnish one-click block.
 *
 * @since  3.0
 * @author Remy Perona
 *
 * @param array $settings Field settings data.
 *
 * @return array modified field settings data.
 */
function rocket_wpserveur_varnish_field( $settings ) {
	$settings['varnish_auto_purge']['title'] = sprintf(
		// Translators: %s = Hosting name.
		__( 'Your site is hosted on %s, we have enabled Varnish auto-purge for compatibility.', 'rocket' ),
		'WP Serveur'
	);

	return $settings;
}
add_filter( 'rocket_varnish_field_settings', 'rocket_wpserveur_varnish_field' );

add_filter( 'rocket_display_input_varnish_auto_purge', '__return_false' );
