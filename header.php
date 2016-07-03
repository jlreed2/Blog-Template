<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    
    <!-- Links to google fonts El Messiri & Poiret One -->
    <link href="https://fonts.googleapis.com/css?family=El+Messiri|Poiret+One" rel="stylesheet">
    
    <!-- Links to our Style.css file -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>
<body>
    <div class="container">
    
        <header class="row">
            <div class="twelve columns">
                <h1 class="site-title"><a href="<?php $url = home_url('/'); echo $url; ?>">
                    <?php bloginfo('name'); ?></a></h1>
                <h2 class="sub-title"><?php bloginfo('description'); ?></h2>
            </div>

            <div class="row">
                <div class="nine columns">
                    <?php
                        wp_nav_menu( array(
                            'sort_column' => 'menu_order',
                            'container_class' => 'blank-menu-header'
                        ));
                    ?>
                </div>
                <div class="three columns">
                    <a id="git" href="https://github.com/jlreed2" target="blank"></a>
                    <a id="in" href="https://www.linkedin.com/in/jlreed2" target="blank"></a>
                    <a id="fb" href="https://www.facebook.com/jennifer.reed1" target="blank"></a>

                </div>
            </div>
        </header>