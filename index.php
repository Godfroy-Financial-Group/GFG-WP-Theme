<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Godfroy Financial Group</title>
    <link type="text/plain" rel="author" href="<?php echo get_bloginfo('template_directory'); ?>/humans.txt" />

    <!-- Import our Libs -->
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/libs/bootstrap/css/ie10-viewport-bug-workaround.css">
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
    <nav id="main-nav" class="navbar navbar-inverse navbar-fixed-top navbar-primary">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-nav-body" aria-expanded="false"
                    aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="<?php echo get_bloginfo( 'wpurl' );?>" class="navbar-left"><img alt="Godfroy Financial Group" src="<?php echo get_bloginfo('template_directory'); ?>/content/images/logos/Godfroy_Financial_Logo_Resize.png"></a>
            </div>
            <div id="header-nav-body" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products & Services <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Investments <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Client Login</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Insurance</a></li>
                            <li><a href="#">Taxes</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Education <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li></li>
                        </ul>
                    </li>
                    <li><a href="#">Our 2 Cents</a></li>
                    <li><a href="#">Newsletter</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <!-- Begin page content -->
    <div class="container main-container">
        <div class="page-header">
            <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
        </div>

        <div class="row">
            <div class="col-md-8">
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
            <div class="col-md-4">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fgodfroyfinancialgroup%2F&tabs=timeline&width=300&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                    width="300" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
        </div>
        <div class="row testimonials">
            <hr>
            <h3>Testimonials</h2>
            <div class="carousel slide" data-ride="carousel" id="testimonial-carousel">
                <!-- Bottom Carousel Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#testimonial-carousel" data-slide-to="1"></li>
                    <li data-target="#testimonial-carousel" data-slide-to="2"></li>
                </ol>

                <!-- Carousel Slides / Testimonials -->
                <div class="carousel-inner">

                    <!-- Testimonial 1 -->
                    <div class="item active">
                        <blockquote>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                        velit!</p>
                                    <small>Someone famous</small>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="item">
                        <blockquote>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor.
                                        Mauris.</p>
                                    <small>Someone famous</small>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="item">
                        <blockquote>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit,
                                        eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</p>
                                    <small>Someone famous</small>
                                </div>
                            </div>
                        </blockquote>
                    </div>
                </div>

                <!-- Carousel Buttons Next/Prev -->
                <a data-slide="prev" href="#testimonial-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                <a data-slide="next" href="#testimonial-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <footer id="main-footer" class="footer">
        <nav class="navbar navbar-inverse navbar-secondary">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">&copy; 2017 Godfroy Financial Group</a>

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#footer-nav-body" aria-expanded="false"
                        aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="footer-nav-body">
                    <ul class="nav navbar-nav">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Review</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </footer>
    <!-- Import our Libs -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/libs/jQuery/jquery-3.2.1.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/libs/bootstrap/js/ie10-viewport-bug-workaround.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/carousel.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/navbar.js"></script>
    <!-- And now our Site Scripts -->

    <?php wp_footer(); ?>
</body>

</html>