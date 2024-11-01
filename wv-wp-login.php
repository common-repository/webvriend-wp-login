<?php

/**
 * Plugin Name: Webvriend - WP login
 * Plugin URI: https://www.webvriend.nl/
 * Description: A custom WP login screen
 * Version: 1.0.2
 * Author: Webvriend
 */
 
function webvriend_wp_login_custom_screen_style()
{
    ?>
    <style type="text/css">
        .login {
            background: #fff !important;
        }
        #login h1 a,
        .login h1 a {
            display: none !important;
        }
        .login #loginform {
            border-color: #c1c1c1 !important;
            box-shadow: none !important;
            border-radius: 10px !important;
            margin-top: 70px !important;
            padding: 75px 35px 60px !important;
            position: relative;
            overflow: visible !important;
        }
        .login #loginform:before {
            content: '';
            background-color: #fff;
            background-image: url(<?php echo esc_url(plugins_url('images/webvriend-logo.svg', __FILE__)); ?>);
            background-size: 65px;
            background-repeat: no-repeat;
            background-position: center center;
            border-radius: 100px;
            position: absolute;
            top: -45px;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            padding: .45em;
            height: 80px;
            width: 80px;
            border: solid 1px #c1c1c1;
            z-index: 99;
        }
        .login #backtoblog,
        .login #nav {
            text-align: center !important;
            line-height: normal;
        }
    </style>
    <?php
}
add_action('login_enqueue_scripts', 'webvriend_wp_login_custom_screen_style');
