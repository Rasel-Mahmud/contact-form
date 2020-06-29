<?php
// Register Custom Post Type for form
function custom_form()
{

    $labels = array(
    'name' => _x('Form', 'Post Type General Name', 'form'),
    'singular_name' => _x('Form', 'Post Type Singular Name', 'form'),
    'menu_name' => __('Form', 'form'),
    'name_admin_bar' => __('Form', 'form'),
    'archives' => __('Form Archives', 'form'),
    'attributes' => __('Form Attributes', 'form'),
    'parent_item_colon' => __('Parent Item:', 'form'),
    'all_items' => __('All Form', 'form'),
    'add_new_item' => __('Add New Form', 'form'),
    'add_new' => __('Add New', 'form'),
    'new_item' => __('New Form', 'form'),
    'edit_item' => __('Edit Form', 'form'),
    'update_item' => __('Update Form', 'form'),
    'view_item' => __('View Form', 'form'),
    'view_items' => __('View Form', 'form'),
    'search_items' => __('Search Form', 'form'),
    'not_found' => __('Not found', 'form'),
    'not_found_in_trash' => __('Not found in Trash', 'form'),
    'insert_into_item' => __('Insert into Form', 'form'),
    'uploaded_to_this_item' => __('Uploaded to this item', 'form'),
    'items_list' => __('Form list', 'form'),
    'items_list_navigation' => __('Form list navigation', 'form'),
    'filter_items_list' => __('Filter Form list', 'form'),
    );
    $args = array(
    'label' => __('Form', 'form'),
    'description' => __('Form', 'form'),
    'labels' => $labels,
    'supports' => array('title'),
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => true,
    'publicly_queryable' => false,
    'capability_type' => 'page',
    'show_in_rest' => true,
    'menu_icon'           => 'dashicons-list-view',
    );
    register_post_type('form', $args);
}

add_action('init', 'custom_form', 0);
