<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Godfroy Financial Group</title>

    <meta name="title" content="<?php echo get_bloginfo( 'name' ); ?>">
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <link type="text/plain" rel="author" href="<?php echo get_bloginfo('template_directory'); ?>/humans.txt" />

    <!-- Import our Libs -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/libs/bootstrap-4-multi-dropdown-navbar/css/bootstrap-4-navbar.css" rel="stylesheet">

    <!-- And now our site stylesheets -->
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/universal.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/blog.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
</head>

<body>
    <!-- Fixed navbar -->
    <header class="site-header">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark navbar-primary">
            <div class="container">
                <a href="<?php echo get_bloginfo( 'wpurl' );?>" class="navbar-brand">
                    <img class="navbar-logo" alt="Godfroy Financial Group" src="<?php echo get_bloginfo('template_directory'); ?>/content/images/logos/Godfroy_Financial_Logo_Resize.png">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav-body" aria-controls="header-nav-body"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="header-nav-body">
                    <?php wp_nav_menu( array(
                        'theme_location'  => 'header-menu',
                        'depth'           => 0,
                        'container'       => '',
                        'container_class' => '',
                        'menu_class'      => 'navbar-nav mr-auto',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker()
                    ) ); ?>
                </div> 
            </div>
        </nav>
    </header>
    
    <div class="page-title-bar clearfix">
        <?php if(is_home() && is_front_page() || is_front_page() || is_single()): // static or default hompage...?>
            <h1 class="float-right"><?php the_title(); ?></h1>
        <?php endif;?>
    </div>

    <!-- Begin page content -->
    <div class="container main-container">