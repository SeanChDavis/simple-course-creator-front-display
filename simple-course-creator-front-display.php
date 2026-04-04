<?php
/**
 * Plugin Name: Simple Course Creator - Front Display
 * Plugin URI: https://github.com/seanchdavis/simple-course-creator-front-display
 * Description: On the blog home, archives, and search results, indicate that posts are part of a course.
 * Version: 1.0.6
 * Author: Sean Davis
 * Author URI: https://github.com/seanchdavis/
 * License: GPL2
 * Requires at least: 3.8
 * Tested up to: 6.9.1
 * Text Domain: scc_front_display
 * Domain Path: /languages/
 *
 * This plugin is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This plugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, see http://www.gnu.org/licenses/.
 *
 * @package Simple Course Creator
 * @category Output
 * @author Sean Davis
 * @license GNU GENERAL PUBLIC LICENSE Version 2 - /license.txt
 */


// No accessing this file directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Retired: functionality is built into Simple Course Creator 2.0.0.
if ( defined( 'SCC_VERSION' ) && version_compare( SCC_VERSION, '2.0.0', '>=' ) ) {
	return;
}
