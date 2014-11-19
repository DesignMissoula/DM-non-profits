<?php

/*
Plugin Name: Missoula Non Profits
Plugin URI: http://www.missoulamadefair.com/
Description: Used by Millions to make WordPress better.
Author: Bradford Knowlton
Version: 1.9.8
Author URI: http://bradknowlton.com/

GitHub Plugin URI: https://github.com/DesignMissoula/DM-non-profits
GitHub Branch: master

*/

DEFINE('NON_PROFIT_SLUG', 'winter_2014_');

add_action( 'init', 'register_cpt_missoula_non_profit' );

function register_cpt_missoula_non_profit() {

    $labels = array( 
        'name' => _x( 'Non Profits', 'non-profit' ),
        'singular_name' => _x( 'Non Profit', 'non-profit' ),
        'add_new' => _x( 'Add New', 'non-profit' ),
        'add_new_item' => _x( 'Add New Non Profit', 'non-profit' ),
        'edit_item' => _x( 'Edit Non Profit', 'non-profit' ),
        'new_item' => _x( 'New Non Profit', 'non-profit' ),
        'view_item' => _x( 'View Non Profit', 'non-profit' ),
        'search_items' => _x( 'Search Non Profits', 'non-profit' ),
        'not_found' => _x( 'No non-profits found', 'non-profit' ),
        'not_found_in_trash' => _x( 'No non-profits found in Trash', 'non-profit' ),
        'parent_item_colon' => _x( 'Parent Non Profit:', 'non-profit' ),
        'menu_name' => _x( 'Non Profits', 'non-profit' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'editor', 'thumbnail'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        'menu_icon' => 'dashicons-heart',
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array('slug' => 'non-profits'),
        'capability_type' => 'post'
    );

    register_post_type( NON_PROFIT_SLUG.'non_profit', $args );
}
