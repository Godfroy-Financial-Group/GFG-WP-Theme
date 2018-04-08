<?php get_header(); ?>

<div class="row">
    <!-- Content -->
    <div class="col-8">
        <?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
			endwhile; endif; 
        ?>
    </div>

    <!-- Sidebar -->
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>