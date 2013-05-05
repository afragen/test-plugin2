<?php
/*
Plugin Name: Test Plugin2
Plugin URI: https://github.com/afragen/test-plugin2/
Description: This plugin is used for testing functionality of Github updating of plugins.
Version: 0.4
Author: Andy Fragen
License: GNU General Public License v2
License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

function my2_github_plugin_updater() {

	if ( ! function_exists( 'github_plugin_updater_register' ) )
		return false;

	github_plugin_updater_register( array(
		'owner'	=> 'afragen',
		'repo'	=> 'test-plugin2',
		'slug'	=> 'test-plugin2/test-plugin2.php', // defaults to the repo value ('repo/repo.php')
	) );
}
add_action( 'plugins_loaded', 'my2_github_plugin_updater' );
