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

//==========================================================================//
// This file is part of JSON Rest API Events.                               //
//                                                                          //
// JSON Rest API Events is Copyright 2014 Volary Foundation and             //
// Contributors                                                             //
//                                                                          //
// JSON Rest API Events is free software: you can redistribute it and/or    //
// modify it under the terms of the GNU Affero General Public License as    //
// published by the Free Software Foundation, either version 3 of the       //
// License, or  at your option) any later version.                          //
//                                                                          //
// JSON Rest API Events is distributed in the hope that it will be useful,  //
// but  WITHOUT ANY WARRANTY; without even the implied warranty of          //
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU        //
// Affero General Public License for more details.                          //
//                                                                          //
// You should have received a copy of the GNU Affero General Public         //
// License along with JSON Rest API Events.  If not, see                    //
// <http://www.gnu.org/licenses/>.                                          //
//==========================================================================//
