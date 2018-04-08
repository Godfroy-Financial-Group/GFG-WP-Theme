<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Godfroy Financial Group</title>
    <link type="text/plain" rel="author" href="<?php echo get_bloginfo('template_directory'); ?>/humans.txt" />

    <!-- Import our Libs -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/libs/bootstrap-4-multi-dropdown-navbar/css/bootstrap-4-navbar.css" rel="stylesheet">

    <!-- And now our site stylesheets -->
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/universal.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/home.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
</head>

<body>
    <!-- Fixed navbar -->
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark navbar-primary">
            <div class="container">
                <img class="navbar-brand" src="<?php echo get_bloginfo('template_directory'); ?>/content/images/logos/Godfroy_Financial_Logo_Resize.png" alt="logo">
                <!-- <a href="<?php echo get_bloginfo( 'wpurl' );?>" class="navbar-left"><img alt="Godfroy Financial Group" src="<?php echo get_bloginfo('template_directory'); ?>/content/images/logos/Godfroy_Financial_Logo_Resize.png"></a> -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav-body" aria-controls="header-nav-body"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="header-nav-body">
                    <?php
                        wp_nav_menu( array(
                            'theme_location'  => 'header-menu',
                            'depth'           => 1,
                            'container'       => '',
                            'container_class' => '',
                            'menu_class'      => 'navbar-nav mr-auto',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker()
                        ) );
                    ?>

                    <!-- <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink_ProductsAndServices" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Products & Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink_ProductsAndServices">
                                <li><a class="dropdown-item" href="#">Insurance</a></li>
                                <li><a class="dropdown-item" href="#">Taxes</a></li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Investments</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Client Login</a></li>
                                </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink_Education" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Education
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink_Education">
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Our 2 Cents</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Newsletter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul> -->
                </div>
            </div>
        </nav>
    </header>

    <!-- Begin page content -->
<div class="container main-container">
<div class="page-header">
    <h1><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
    <p><?php echo get_bloginfo( 'description' ); ?></p>
</div>