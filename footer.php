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
                                <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!
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
                    <?php
                        wp_nav_menu( array(
                            'theme_location'  => 'footer-menu',
                            'depth'           => 0,
                            'container'       => '',
                            'container_class' => '',
                            'menu_class'      => 'navbar-nav mr-auto',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker()
                        ) );
                    ?>
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
    <script src="<?php echo get_bloginfo('template_directory'); ?>/libs/bootstrap-4-multi-dropdown-navbar/js/bootstrap-4-navbar.js"></script>

    <!-- And now our Site Scripts -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/universal.js"></script>

    <?php wp_footer(); ?>
</body>

</html>