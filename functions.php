<?php
/**
 * Registering Meta Boxes for the Practical Task
 */
add_filter( 'rwmb_meta_boxes', 'rupesh_register_hero_meta' );

function rupesh_register_hero_meta( $meta_boxes ) {
    $prefix = 'task_';

    // HERO SECTION
    $meta_boxes[] = [
        'title'      => 'Hero Section Content',
        'post_types' => 'page', // Pages par dikhega
        'fields'     => [
            [
                'name' => 'Main Title',
                'id'   => $prefix . 'hero_title',
                'type' => 'text',
                'desc' => 'Figma se heading yahan dalein',
            ],
            [
                'name' => 'Subheading',
                'id'   => $prefix . 'hero_desc',
                'type' => 'textarea',
            ],
            [
                'name' => 'Button Text',
                'id'   => $prefix . 'hero_btn',
                'type' => 'text',
            ],
        ],
    ];

    return $meta_boxes;
}

function rupesh_task_setup() {
    // Menu support
    register_nav_menus( array(
        'primary-menu' => __( 'Primary Menu', 'rupesh-task' ),
    ) );
    // Logo support
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'rupesh_task_setup' );