<!DOCTYPE html>
<html>

<head>
    <title>my first template</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class('d-flex flex-column'); ?>>
    <div class="page-container">
        <header class="sticky-top">
            <div class="container">
                <nav class="nav-top">
                    <div class="d-flex align-items-center justify-content-between">
                        <img src="<?php bloginfo('template_directory') ?>/images/logo-woocommerce.svg" class="img-fluid" />
                        <?php
                        wp_nav_menu(

                            array(
                                'theme_location' => 'top-menu',
                                'menu_class' => 'top-menu'
                            )
                        );

                        ?>
                    </div>
                </nav>
            </div>
        </header>