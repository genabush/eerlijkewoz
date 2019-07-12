<?php

/**
 * PSR-4 class autoloader
 */
require_once 'vendor/autoload.php';


/**
 * Core singleton class
 */
$core = \rst\Core::getInstance();


/**
 * Load scripts and styles
 *
 * @link        http://developer.wordpress.org/reference/functions/wp_enqueue_script
 * @link        http://wp-kama.ru/function/wp_enqueue_script
 *
 * @package     WordPress
 * @subpackage  RSV v3
 * @since       1.0.0
 * @author      Luke Kortunov
 */
function rst_load_assets()
{
    //--- Load scripts and styles only for frontend: -----------------------------
    if (!is_admin()) {
        // Styles
        wp_enqueue_style('app', get_template_directory_uri() . '/assets/dist/css/app.min.css');
        wp_enqueue_style('font', "https://fonts.googleapis.com/css?family=Bitter:400,400i,700|Open+Sans:300,300i,400,600,700&amp;subset=latin-ext");
        wp_enqueue_script('app', get_template_directory_uri() . '/assets/dist/js/app.min.js', [], '1.0.0', true);
    }
}

add_action('wp', 'rst_load_assets');


/**
 * Filter wp_nav_menu container (div)
 *
 * @param array $args - hook will send this parameter to function
 * @return array
 *
 * @package     WordPress
 * @subpackage  RST v3
 * @since       1.0.0
 * @author      Luke Kortunov
 */
function rst_filter_menu($args)
{
    $args['container'] = false;
    return $args;
}

add_filter('wp_nav_menu_args', 'rst_filter_menu');


/**
 * Function, that require svg-file and return or print it
 *
 * @param string $filename - file name excluding file extension
 * @param bool $return - true == include file || false == return path
 * @param string $dir - if svg files directory not eq. "svg" - set target directory related to theme root
 *
 * @return string/void
 *
 * @since       1.0.0
 * @author      Luke Kortunov
 */
function svg($filename, $return = false, $content = true, $dir = 'assets/dist/svg')
{
    $dir = mb_substr($dir, 0, 1) == '/' ? mb_substr($dir, 1, mb_strlen($dir)) : $dir;
    $dir = mb_substr($dir, -1, 1) == '/' ? mb_substr($dir, 0, mb_strlen($dir) - 1) : $dir;
    $path = get_template_directory() . '/' . $dir . '/' . $filename . '.svg';
    if ($return == false) {
        @require $path;
    } else {
        if ($content = true) {
            return file_get_contents($path);
        } else {
            return $path;
        }
    }
}

if ('disable_gutenberg') {
    add_filter('use_block_editor_for_post_type', '__return_false', 100);

    // Move the Privacy Policy help notice back under the title field.
    add_action('admin_init', function () {
        remove_action('admin_notices', ['WP_Privacy_Policy_Content', 'notice']);
        add_action('edit_form_after_title', ['WP_Privacy_Policy_Content', 'notice']);
    });
}
