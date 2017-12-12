<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php wp_head(); ?>

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Montserrat" rel="stylesheet">

</head>

<body <?php body_class(); ?>>
    <header>
        <nav>
            <ul>
                <div class="menu-nav-container">
                    <ul id="menu-nav" class="menu">
                        <li id="menu-item-34" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-34"><a href="http://peternormandev.com/about/">About</a>
                        </li>
                        <li id="menu-item-33" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-33"><a href="http://peternormandev.com/">Work</a>
                        </li>
                    </ul>
                </div>
            </ul>
        </nav>
        <div class="hamburger">
            <div class="bar top"></div>
            <div class="bar middle"></div>
            <div class="bar bottom"></div>
        </div>

        <a class="header-icon" href="https://github.com/peteoa12">
            <img src="#">Github
        </a>
        <a class="header-icon" href="https://www.linkedin.com/in/peter-norman-dev/">
            <img src="#">LinkedIn
        </a>
        
    </header>