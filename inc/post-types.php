<?php
function estatein_register_post_types() {
    register_post_type('property', [
        'labels'      => ['name' => 'Properties', 'singular_name' => 'Property', 'add_new_item' => 'Add New Property', 'edit_item' => 'Edit Property'],
        'public'      => true,
        'has_archive' => true,
        'rewrite'     => ['slug' => 'properties'],
        'supports'    => ['title', 'editor', 'thumbnail', 'excerpt'],
        'menu_icon'   => 'dashicons-building',
        'show_in_rest'=> true,
    ]);
    register_post_type('team_member', [
        'labels'      => ['name' => 'Team', 'singular_name' => 'Team Member'],
        'public'      => true,
        'supports'    => ['title', 'thumbnail'],
        'menu_icon'   => 'dashicons-groups',
        'show_in_rest'=> true,
    ]);
}
add_action('init', 'estatein_register_post_types');