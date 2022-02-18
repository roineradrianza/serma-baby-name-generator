<?php

new SERMA_BABY_RANDOM_NAMES_GENERATOR();

/**
 * SerMadre Baby Names Controller
 *
 *
 * @version 1.0.0
 * @author roineradrianza
 *
 *
 */
class SERMA_BABY_RANDOM_NAMES_GENERATOR extends SERMA_BABY_NAMES_MODEL
{

    public function __construct()
    {
        add_action( 'wp_ajax_nopriv_serma_baby_generate_random_name', "SERMA_BABY_RANDOM_NAMES_GENERATOR::generate_name" );
        add_action( 'wp_ajax_serma_baby_generate_random_name', "SERMA_BABY_RANDOM_NAMES_GENERATOR::generate_name" );
        add_action( 'rest_api_init', function () {
            register_rest_route( "serma-random-baby-name-generator/v1", "/generate", array(
              'methods' => 'POST',
              'callback' => "SERMA_BABY_RANDOM_NAMES_GENERATOR::generate_name_api_rest"
            ) );
          } 
        );
    }

    public static function generate_name() {
        $data = !empty($_POST) ? $_POST : json_decode(file_get_contents("php://input"), true);
        $results = self::get_random_baby_name($data);
        wp_send_json( $results );
    }

    public static function generate_name_api_rest() {
        $data = $_POST;
        $results = self::get_random_baby_name($data);
        return new WP_REST_Response( $results );
    }
} // end class