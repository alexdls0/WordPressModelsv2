<?php

    /*Decirle que es un tema de WooCommerce*/
    function woocommerce_support(){
        add_theme_support('woocommerce');
    }
    add_action('after_setup_theme','woocommerce_support');
    
    /*Cargar la hoja de estilos*/
    function enqueue_parent_styles(){
        wp_enqueue_style('parent_style',get_template_directory_uri().'/style.css');
    }
    add_action('wp_enqueue_scripts','enqueue_parent_styles');
    
    /*Cargar dashicons*/
    function load_dashicons(){
        wp_enqueue_style('dashicons');
    }
    add_action('wp_enqueue_scripts','load_dashicons',999);
?>