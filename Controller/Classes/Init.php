<?php

new SERMA_BABY_NAME_GENERATOR();

/**
 * SerMadre Baby Init Controller
 *
 *
 * @version 1.0.0
 * @author roineradrianza
 *
 *
 */

class SERMA_BABY_NAME_GENERATOR
{

	/**
	 * __construct method
	 */
    public function __construct()
    {
    } // end __construct()

    public static function install()
    { // create the database table if it doesn't exist already (on plugin activation)

        if (!self::check_table('serma_baby_name')) {
            SERMA_BABY_NAMES_MODEL::create_table();
        }

    }

    public static function uninstall()
    {

        global $wpdb;

        $qs1 =
        'DROP TABLE `' . $wpdb->prefix . 'serma_baby_name`;';
        $wpdb->query($qs1);

    }

    public static function check_table($tableName)
    {
        global $wpdb;

        $qs = "SHOW TABLES LIKE '" . $wpdb->prefix . $tableName . "'";
        $rows = $wpdb->get_results($qs, ARRAY_A);
        $exists = false;
        if (count($rows)) {
            $exists = true;
        }

        return $exists;
    }


}