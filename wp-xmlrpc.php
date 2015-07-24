<?php
/**
 * @author  Sylvain Gogel <sgogel@ecedi.fr>
 * @package Wordpress
 * @license http://opensource.org/licenses/MIT MIT
 *
 * Plugin Name: wp-xmlrpc
 * Description: Disable xmlrpc api
 * Version: 1.0.1
 * Author: Sylvain Gogel <sgogel@ecedi.fr>
 * Author URI: http://ecedi.fr
 */

/**
 *
 * @since 1.0
 */
add_filter('xmlrpc_enabled', '__return_false');
