<?php

// ---
// Custom Admin Logo
// -------------------------------------------------------------
function ews_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo-10xconsulting-login.png);
            padding-bottom: 10px;
            -webkit-background-size: 200px 200px;
            background-size: 200px 200px;
            height: 200px;
            width: 200px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'ews_login_logo' );

?>