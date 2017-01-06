<?php
    
    //JS一元管理
    if (!is_admin()) {
        function register_script(){
            wp_register_script('bootstrap', get_bloginfo('template_directory').'/js/bootstrap.min.js',array(),false,true);
        }
        function add_script() {
            register_script();
                wp_enqueue_script('bootstrap');
        }
        add_action('wp_print_scripts', 'add_script');
    }

?>