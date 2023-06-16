<?php

require('typerocket/init.php');
require('inc/init.php');
add_theme_support('post-thumbnails');
add_theme_support('woocommerce');
add_theme_support('wc-product-gallery-zoom');
add_theme_support('wc-product-gallery-lightbox');
add_theme_support('wc-product-gallery-slider');
function tudor_menus()
{

    $locations = array(
        'main-menu' => 'Main Menu',
        'ft-shop-menu' => 'Footer Shop Menu',
        'ft-general-info-menu' => 'Footer General Info Menu',
        'ft-corporate-info-menu' => 'Footer Corporate info Menu',
    );

    register_nav_menus($locations);
}



add_action('init', 'tudor_menus');
add_action('wp_enqueue_scripts', 'our_enqueue_styles', 99999);

/**
 * Get Menu By Location
 * @param string $theme_location Theme location
 * @return  mixed                        Menu Object or false if not found
 */
if (!function_exists('get_menu_by_location')) :
    function get_menu_by_location($theme_location)
    {
        $theme_locations = get_nav_menu_locations();
        if (isset($theme_locations[$theme_location])) {
            $menu_obj = get_term($theme_locations[$theme_location], 'nav_menu');
            if ($menu_obj)
                return wp_get_nav_menu_items($menu_obj->term_id);
            else
                return $menu_obj;
        }
    }
endif;

if (!function_exists('recursive_mitems_to_array')) {
    /**
     * @param $items
     * @param int $parent
     *
     * @return array
     */
    function recursive_mitems_to_array($items, $parent = 0)
    {
        $bundle = [];
        if (!empty($items)) {
            foreach ($items as $item) {
                if ($item->menu_item_parent == $parent) {
                    $child = recursive_mitems_to_array($items, $item->ID);
                    $bundle[$item->ID] = [
                        'item' => $item,
                        'children' => $child
                    ];
                }
            }
        }

        return $bundle;
    }
}


function our_enqueue_styles()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 'all');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), 'all');
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), rand(), 'all');
    wp_enqueue_style('scss', get_template_directory_uri() . '/assets/scss/styles.css', array(), rand(), 'all');
}

add_action('wp_enqueue_scripts', 'our_enqueue_scripts', 99999);

function our_enqueue_scripts()
{
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), rand(), true);
}


