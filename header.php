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
    <header class="header">
        <div class="container-fluid">
            <div class="row">
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
            </div>



            <div class="row" style="flex-direction:row; justify-content:flex-end">
                <a class="header-icon github mr-4" href="https://github.com/peteoa12">
                    <i class="fa fa-facebook fa-lg icon" aria-hidden="true"></i>
                    <div class="icon-label">facebook</div>
                </a>
                <a class="header-icon github mr-4" href="https://github.com/peteoa12">
                    <i class="fa fa-github-alt fa-lg icon" aria-hidden="true"></i>
                    <div class="icon-label">github</div>
                </a>
                <a class="header-icon linkedin mr-4" href="https://www.linkedin.com/in/peter-norman-dev/">
                    <i class="fa fa-linkedin fa-lg icon" aria-hidden="true"></i>
                    <div class="icon-label">linkedin</div>
                </a>
            </div>
        </div>
    </header>