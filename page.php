<?php get_header(); ?>

<div class="row">
    <!-- Content -->
    <div class="col-12">
        <?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				get_template_part( 'content-page', get_post_format() );
			endwhile; endif; 
        ?>
    </div>
</div>

<?php get_footer(); ?>