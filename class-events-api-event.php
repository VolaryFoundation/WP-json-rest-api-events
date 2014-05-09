<?php

class Events_API_Event extends WP_JSON_CustomPostType {
	protected $base = '/events';
	protected $type = 'events';
	public function register_routes( $routes ) {
		$routes = parent::register_routes($routes);
		return $routes;
	}
}
