<?php

/**
 * Plugin Name: events-api
 * Description: JSON-based REST API for WordPress, developed as part of GSoC 2013.
 * Author: Ryan McCue
 * Author URI: http://ryanmccue.info/
 * Version: 0.9
 * Plugin URI: https://github.com/rmccue/WP-API
 */

function events_api_init( $server ) {
    global $events_api_event;

    require_once dirname( __FILE__ ) . '/class-events-api-event.php';
    $events_api_event = new Events_API_Event( $server );
    $events_api_event->register_filters();
}
add_action( 'wp_json_server_before_serve', 'events_api_init' );
