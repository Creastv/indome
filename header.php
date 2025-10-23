<?php
$nav = get_field('nav', 'option')
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title(); ?></title>
    <link rel="preconnect" href="https://use.typekit.net">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://use.typekit.net/jrs6zrr.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    <style>
        html,
        body {
            font-family: "Montserrat", sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6 {
            font-family: termina, sans-serif;
        }
    </style>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header-fixed" id="header_fixed">
        <?php if (!empty($nav)): ?>
            <div class="header-nav">
                <div class="container">
                    <?php echo apply_filters('the_content', $nav); ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="header">
            <div class="container">
                <div class="grid-middle-noGutter">
                    <div class="header-logo">
                        <?php
                        if (function_exists('the_custom_logo')) {
                            the_custom_logo();
                        }
                        ?>
                        <div class="menu-bar" id="menu_bar"><span></span><span></span></div>
                    </div>
                    <div class="header-menu" id="menu_top">
                        <?php
                        if (has_nav_menu('primary_menu')) {
                            wp_nav_menu(array('theme_location' => 'primary_menu', 'depth' => 1));
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="header-separator <?php echo my_is_woo_context() ? 'header-separator--woocommerce' : '' ?>"></div>