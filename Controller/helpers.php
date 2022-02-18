<?php

if (!defined('ABSPATH')) exit; //Exit if accessed directly

function serma_random_baby_name_register_style($style, $deps = array(), $inline_css = '')
{
    $default_path = SERMA_RANDOM_BABY_NAME_URL . 'assets/css/';

    wp_enqueue_style('serma-random-baby-name-' . $style, $default_path . $style . '.css', $deps);

    if (!empty($inline_css)) wp_add_inline_style('serma-random-baby-name-' . $style, $inline_css);
}

function serma_random_baby_name_register_script($script, $deps = array(), $footer = false, $inline_scripts = '', $version = SERMA_RANDOM_BABY_NAME_VERSION)
{
    $handle = "serma-random-baby-name-{$script}";
    wp_enqueue_script($handle, SERMA_RANDOM_BABY_NAME_URL . 'assets/js/' . $script . '.js', $deps, $version, $footer);
    if (!empty($inline_scripts)) wp_add_inline_script($handle, $inline_scripts);
}