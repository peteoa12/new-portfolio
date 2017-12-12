<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php wp_head(); ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111114248-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-111114248-1');
    </script>


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
                            <?php wp_nav_menu() ?>
                        </div>
                    </ul>
                </nav>

                <div class="hamburger">
                    <div class="bar top"></div>
                    <div class="bar middle"></div>
                    <div class="bar bottom"></div>
                </div>
            </div>



            <div class="row social-links">
                <a class="header-icon linkedin mr-4" href="https://www.linkedin.com/in/peter-norman-dev/" target="_blank">
                    <i class="fa fa-linkedin fa-lg icon" aria-hidden="true"></i>
                    <div class="icon-label">linkedin</div>
                </a>
                <a class="header-icon github mr-4" href="https://github.com/peteoa12" target="_blank">
                    <i class="fa fa-github-alt fa-lg icon" aria-hidden="true"></i>
                    <div class="icon-label">github</div>
                </a>
                <a class="header-icon github mr-4" href="https://github.com/peteoa12" target="_blank">
                    <i class="fa fa-facebook fa-lg icon" aria-hidden="true"></i>
                    <div class="icon-label">facebook</div>
                </a>
            </div>
        </div>
    </header>