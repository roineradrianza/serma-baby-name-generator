<?php

/**
 * SerMadre Baby Template Controller
 *
 *
 * @version 1.0.0
 * @author roineradrianza
 *
 *
 */

class SERMA_RANDOM_BABY_NAME_TEMPLATE
{

    public static function load_template($template_name, $serma_random_baby_name_vars = [])
    {
        ob_start();
        extract($serma_random_baby_name_vars);
        include self::locate_template($template_name, $serma_random_baby_name_vars);
        return apply_filters("serma_random_baby_name_{$template_name}", ob_get_clean(), $serma_random_baby_name_vars);
    }

    public static function show_template($template_name, $serma_random_baby_name_vars = [])
    {
        return self::load_template($template_name, $serma_random_baby_name_vars);
    }

    public static function locate_template($template_name, $serma_random_baby_name_vars = [])
    {
        $template_name = '/Views/' . $template_name . '.php';
        $template_name = apply_filters('serma_random_baby_name_template_name', $template_name, $serma_random_baby_name_vars);
        $template = apply_filters('serma_random_baby_name_template_file', SERMA_RANDOM_BABY_NAME, $template_name) . $template_name;

        return (locate_template($template_name)) ? locate_template($template_name) : $template;

    }
    
    public static function render_view($styles = [], $scripts = [], $template = '', $vars = [])
    {
        foreach ($styles as $style) {
            serma_random_baby_name_register_style($style);
        }
        foreach ($scripts as $script) {
            serma_random_baby_name_register_script($script);
        }
        return self::show_template($template, $vars);
    }

}
