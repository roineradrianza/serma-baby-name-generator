<?php
/*
Plugin Name: Generador Aleatorio de Nombres de Bebé - Ser Madre
Description: Este plugin muestra un formulario para generar aleatoriamente un nombre de bebé por género, la primera letra del nombre, la longitud del nombre y la popularidad del nombre. Utilice el shortcode [serma-random-baby-name-generator-wp]
Version: 1.0.0
Requires at least: 5.1
Requires PHP: 7.2
Author: Ser Madre
Developer: Roiner Adrianza
Author URI: http://sermadre.com
License: GPL v2
 */

use Controller\SERMA_BABY_NAME_GENERATOR;

if (!defined('ABSPATH')) {
    exit;
}
//Exit if accessed directly
define('SERMA_RANDOM_BABY_NAME_FILE', __FILE__);
define('SERMA_RANDOM_BABY_NAME', dirname(SERMA_RANDOM_BABY_NAME_FILE));
define('SERMA_RANDOM_BABY_NAME_URL', plugin_dir_url(SERMA_RANDOM_BABY_NAME_FILE));
define('SERMA_RANDOM_BABY_NAME_DB_VERSION', '1.0');
define('SERMA_RANDOM_BABY_NAME_VERSION', '1.0.0');

define('SERMA_RANDOM_BABY_NAME_ENV', false);

if (SERMA_RANDOM_BABY_NAME_ENV) {
    @ini_set('display_errors', 1);
}

require_once SERMA_RANDOM_BABY_NAME . "/Models/Main.php";
require_once SERMA_RANDOM_BABY_NAME . "/Controller/Main.php";
require_once SERMA_RANDOM_BABY_NAME . "/Shortcodes/Main.php";


register_activation_hook(__FILE__, array('SERMA_BABY_NAME_GENERATOR', 'install'));

register_uninstall_hook(__FILE__, array('SERMA_BABY_NAME_GENERATOR', 'uninstall'));
