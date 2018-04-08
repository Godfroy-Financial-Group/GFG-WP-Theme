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
    <link href="libs/bootstrap-4-multi-dropdown-navbar/css/bootstrap-4-navbar.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/libs/bootstrap-4-multi-dropdown-navbar/css/bootstrap-4-navbar.css" rel="stylesheet">

    <!-- And now our site stylesheets -->
    <link rel="stylesheet" href="css/universal.css">
    <link rel="stylesheet" href="css/home.css">
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
                <img class="navbar-brand" src="content/images/logos/Godfroy_Financial_Logo_Resize.png" alt="logo">
                <!-- <a href="<?php echo get_bloginfo( 'wpurl' );?>" class="navbar-left"><img alt="Godfroy Financial Group" src="<?php echo get_bloginfo('template_directory'); ?>/content/images/logos/Godfroy_Financial_Logo_Resize.png"></a> -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav-body" aria-controls="header-nav-body"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="header-nav-body">
                    <ul class="navbar-nav mr-auto">
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
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Begin page content -->
    <div class="container main-container">
        <div class="page-header">
            <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
        </div>

        <div class="row">
            <div class="col-8">
                <p>Saepe magnam praesentium ducimus placeat molestiae accusamus quos temporibus harum incidunt impedit perferendis
                    distinctio eum voluptatum dolor tempora exercitationem quis, ipsum veniam?</p>
                <p>Tempora quo eius cupiditate itaque reprehenderit iure asperiores consequuntur sed totam assumenda natus labore
                    nesciunt at eligendi delectus, corporis atque odio repellat blanditiis eos. Laudantium dolorem sint,
                    impedit rem accusantium.</p>
                <p>Facere repellendus officia voluptas esse vel ratione, atque! Inventore, fugit! Sed ipsum explicabo iusto
                    quasi, fugit aperiam nostrum nihil molestias, maiores saepe ex harum veritatis fuga. Facere quos eaque
                    neque.
                </p>
            </div>
            <div class="col-4">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fgodfroyfinancialgroup%2F&tabs=timeline&width=300&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                    width="300" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
        </div>

        <hr>
        <h3>Testimonials</h2>
            <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#testimonial-carousel" data-slide-to="1"></li>
                    <li data-target="#testimonial-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <blockquote>
                            <div class="row">
                                <div class="col-12">
                                    <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                        velit!
                                    </p>
                                    <small>Someone famous</small>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <div class="carousel-item">
                        <blockquote>
                            <div class="row">
                                <div class="col-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor.
                                        Mauris.
                                    </p>
                                    <small>Someone famous</small>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <div class="carousel-item">
                        <blockquote>
                            <div class="row">
                                <div class="col-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit,
                                        eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</p>
                                    <small>Someone famous</small>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                </div>
                <a class="carousel-control-prev carousel-control" href="#testimonial-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next carousel-control" href="#testimonial-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
    </div>

    <footer id="main-footer" class="footer">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-secondary">
            <div class="container">
                <a class="navbar-brand" href="#">&copy; 2017 Godfroy Financial Group</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footer-nav-body" aria-controls="footer-nav-body"
                    aria-haspopup="true" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="footer-nav-body">
                    <ul class="navbar-nav mr-auto">
                        <li>
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">Review</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">Terms &amp; Conditions</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </footer>

    <!-- Import our Libs -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="libs/bootstrap-4-multi-dropdown-navbar/js/bootstrap-4-navbar.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/libs/bootstrap-4-multi-dropdown-navbar/js/bootstrap-4-navbar.js"></script>
    <!-- And now our Site Scripts -->

    <?php wp_footer(); ?>
</body>

</html>