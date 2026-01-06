<?php
/**
 * KVW Lopik Theme Functions
 * 
 * @package KVW_Lopik
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Set up theme defaults and register support for various WordPress features
 */
function kvw_lopik_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Add support for post thumbnails
    add_theme_support( 'post-thumbnails' );

    // Add support for title tag
    add_theme_support( 'title-tag' );

    // Add support for custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Register navigation menus
    register_nav_menus( array(
        'primary'   => esc_html__( 'Primary Menu', 'kvw-lopik' ),
        'footer'    => esc_html__( 'Footer Menu', 'kvw-lopik' ),
    ) );

    // Add support for HTML5 markup
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
}
add_action( 'after_setup_theme', 'kvw_lopik_setup' );

/**
 * Enqueue scripts and styles
 */
function kvw_lopik_enqueue_assets() {
    // Enqueue main stylesheet only (all CSS is in style.css now)
    wp_enqueue_style( 'kvw-lopik-style', get_stylesheet_uri(), array(), '2.0.0' );

    // Enqueue main JavaScript
    wp_enqueue_script( 'kvw-lopik-main', get_template_directory_uri() . '/js/main.js', array(), '2.0.0', true );

    // Localize script for AJAX
    wp_localize_script( 'kvw-lopik-main', 'kvwLopik', array(
        'ajaxUrl' => admin_url( 'admin-ajax.php' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'kvw_lopik_enqueue_assets' );

// Force HTTPS for assets
function kvw_lopik_force_https_urls( $url ) {
    return str_replace( 'http://', 'https://', $url );
}
add_filter( 'stylesheet_uri', 'kvw_lopik_force_https_urls' );
add_filter( 'template_directory_uri', 'kvw_lopik_force_https_urls' );

/**
 * Register custom post types
 */
function kvw_lopik_register_post_types() {
    // Register Activities post type
    register_post_type( 'activity', array(
        'label'             => esc_html__( 'Activities', 'kvw-lopik' ),
        'public'            => true,
        'has_archive'       => true,
        'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'menu_icon'         => 'dashicons-calendar-alt',
        'show_in_rest'      => true,
    ) );

    // Register News post type
    register_post_type( 'news', array(
        'label'             => esc_html__( 'News', 'kvw-lopik' ),
        'public'            => true,
        'has_archive'       => true,
        'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt', 'author' ),
        'menu_icon'         => 'dashicons-newspaper',
        'show_in_rest'      => true,
    ) );

    // Register Team Members post type
    register_post_type( 'team_member', array(
        'label'             => esc_html__( 'Team Members', 'kvw-lopik' ),
        'public'            => true,
        'has_archive'       => false,
        'supports'          => array( 'title', 'editor', 'thumbnail' ),
        'menu_icon'         => 'dashicons-groups',
        'show_in_rest'      => true,
    ) );
}
add_action( 'init', 'kvw_lopik_register_post_types' );

/**
 * Register custom taxonomies
 */
function kvw_lopik_register_taxonomies() {
    // Register Activity Category taxonomy
    register_taxonomy( 'activity_category', 'activity', array(
        'label'             => esc_html__( 'Activity Categories', 'kvw-lopik' ),
        'hierarchical'      => true,
        'show_in_rest'      => true,
    ) );

    // Register News Category taxonomy
    register_taxonomy( 'news_category', 'news', array(
        'label'             => esc_html__( 'News Categories', 'kvw-lopik' ),
        'hierarchical'      => true,
        'show_in_rest'      => true,
    ) );
}
add_action( 'init', 'kvw_lopik_register_taxonomies' );

/**
 * Register widget areas
 */
function kvw_lopik_register_widgets() {
    register_sidebar( array(
        'name'          => esc_html__( 'Primary Sidebar', 'kvw-lopik' ),
        'id'            => 'primary-sidebar',
        'description'   => esc_html__( 'Main sidebar', 'kvw-lopik' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Area', 'kvw-lopik' ),
        'id'            => 'footer-widgets',
        'description'   => esc_html__( 'Footer widget area', 'kvw-lopik' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'kvw_lopik_register_widgets' );

/**
 * Custom template tags
 */
function kvw_lopik_posted_on() {
    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
    if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
        $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
    }

    printf(
        wp_kses_post( $time_string ),
        esc_attr( get_the_date( 'c' ) ),
        esc_html( get_the_date() ),
        esc_attr( get_the_modified_date( 'c' ) ),
        esc_html( get_the_modified_date() )
    );
}

/**
 * Add custom body classes
 */
function kvw_lopik_body_classes( $classes ) {
    if ( is_front_page() ) {
        $classes[] = 'is-front-page';
    }

    if ( is_page() ) {
        $classes[] = 'is-page';
    }

    return $classes;
}
add_filter( 'body_class', 'kvw_lopik_body_classes' );

/**
 * Handle contact form submission
 */
function kvw_lopik_handle_contact_form() {
    if ( ! isset( $_POST['kvw_contact_nonce'] ) || ! wp_verify_nonce( $_POST['kvw_contact_nonce'], 'kvw_contact_form' ) ) {
        wp_send_json_error( 'Nonce verification failed' );
    }

    $name = sanitize_text_field( $_POST['name'] ?? '' );
    $email = sanitize_email( $_POST['email'] ?? '' );
    $phone = sanitize_text_field( $_POST['phone'] ?? '' );
    $subject = sanitize_text_field( $_POST['subject'] ?? '' );
    $message = sanitize_textarea_field( $_POST['message'] ?? '' );

    if ( empty( $name ) || empty( $email ) || empty( $subject ) || empty( $message ) ) {
        wp_send_json_error( 'Please fill in all required fields' );
    }

    $to = get_option( 'admin_email' );
    $headers = array( 'Content-Type: text/html; charset=UTF-8' );
    $headers[] = 'From: ' . $name . ' <' . $email . '>';

    $body = sprintf(
        "Name: %s\nEmail: %s\nPhone: %s\nSubject: %s\n\nMessage:\n%s",
        $name,
        $email,
        $phone,
        $subject,
        $message
    );

    if ( wp_mail( $to, $subject, $body, $headers ) ) {
        wp_send_json_success( 'Message sent successfully' );
    } else {
        wp_send_json_error( 'Failed to send message' );
    }
}
add_action( 'wp_ajax_kvw_contact_form', 'kvw_lopik_handle_contact_form' );
add_action( 'wp_ajax_nopriv_kvw_contact_form', 'kvw_lopik_handle_contact_form' );

/**
 * Handle registration form submission
 */
function kvw_lopik_handle_registration() {
    if ( ! isset( $_POST['kvw_registration_nonce'] ) || ! wp_verify_nonce( $_POST['kvw_registration_nonce'], 'kvw_registration_form' ) ) {
        wp_send_json_error( 'Nonce verification failed' );
    }

    $child_name = sanitize_text_field( $_POST['child_name'] ?? '' );
    $parent_email = sanitize_email( $_POST['parent_email'] ?? '' );
    $parent_phone = sanitize_text_field( $_POST['parent_phone'] ?? '' );
    $child_age = sanitize_text_field( $_POST['child_age'] ?? '' );

    if ( empty( $child_name ) || empty( $parent_email ) || empty( $parent_phone ) || empty( $child_age ) ) {
        wp_send_json_error( 'Please fill in all required fields' );
    }

    $to = get_option( 'admin_email' );
    $subject = 'New Registration: ' . $child_name;
    $body = sprintf(
        "Child Name: %s\nChild Age: %s\nParent Email: %s\nParent Phone: %s",
        $child_name,
        $child_age,
        $parent_email,
        $parent_phone
    );

    if ( wp_mail( $to, $subject, $body ) ) {
        wp_send_json_success( 'Registration submitted successfully' );
    } else {
        wp_send_json_error( 'Failed to submit registration' );
    }
}
add_action( 'wp_ajax_kvw_registration', 'kvw_lopik_handle_registration' );
add_action( 'wp_ajax_nopriv_kvw_registration', 'kvw_lopik_handle_registration' );
