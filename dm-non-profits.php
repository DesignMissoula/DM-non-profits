<?php

/*
Plugin Name: Missoula Non Profits
Plugin URI: http://www.missoulamadefair.com/
Description: Used by Millions to make WordPress better.
Author: Bradford Knowlton
Version: 1.9.5
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
        
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies' => array( 'medium' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        'menu_icon' => 'dashicons-art',
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array('slug' => 'non-profits'),
        'capability_type' => 'post'
    );

    register_post_type( ARTIST_SLUG.'non-profit', $args );
}

// add_action( 'init', 'register_taxonomy_missoula_medium' );

function register_taxonomy_missoula_medium() {

    $labels = array( 
        'name' => _x( 'Medium', 'medium' ),
        'singular_name' => _x( 'Medium', 'medium' ),
        'search_items' => _x( 'Search Medium', 'medium' ),
        'popular_items' => _x( 'Popular Medium', 'medium' ),
        'all_items' => _x( 'All Medium', 'medium' ),
        'parent_item' => _x( 'Parent Medium', 'medium' ),
        'parent_item_colon' => _x( 'Parent Medium:', 'medium' ),
        'edit_item' => _x( 'Edit Medium', 'medium' ),
        'update_item' => _x( 'Update Medium', 'medium' ),
        'add_new_item' => _x( 'Add New Medium', 'medium' ),
        'new_item_name' => _x( 'New Medium', 'medium' ),
        'separate_items_with_commas' => _x( 'Separate medium with commas', 'medium' ),
        'add_or_remove_items' => _x( 'Add or remove medium', 'medium' ),
        'choose_from_most_used' => _x( 'Choose from the most used medium', 'medium' ),
        'menu_name' => _x( 'Medium', 'medium' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => false,
        'hierarchical' => false,

        'rewrite' => true,
        'query_var' => true
    );

    register_taxonomy( NON_PROFIT_SLUG.'medium', array( NON_PROFIT_SLUG.'non-profit'), $args );
}