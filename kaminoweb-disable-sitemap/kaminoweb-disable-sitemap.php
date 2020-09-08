<?php
/**
* Plugin Name:       Disable WordPress Sitemap
* Plugin URI:        https://github.com/kaminoweb
* Description:       Disable native WordPress XML sitemap
* Version:           0.1
* Requires at least: 5.5
* Author:            Kaminoweb Inc
* Author URI:        https://kaminoweb.com/
* License:           GPLv2
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function kaminoweb_disable_sitemap() {
         remove_action( 'init', 'wp_sitemaps_get_server' );
}

add_action( 'init', 'kaminoweb_disable_sitemap');

