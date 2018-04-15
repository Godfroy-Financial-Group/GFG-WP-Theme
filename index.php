<?php get_header(); ?>

<div class="row">
    <!-- Content -->
    <div class="col-8">
        <?php 
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post();
				    get_template_part( 'content', get_post_format() );
                endwhile;  ?>

                <nav>
                    <ul class="pager list-inline">
                        <li class="list-inline-item btn btn-secondary"><?php previous_posts_link('« Previous'); ?></li>
                        <li class="list-inline-item btn btn-secondary"><?php next_posts_link('Next »'); ?></li>
                    </ul>
                </nav>        
            <?php endif; ?>
    </div>

    <!-- Sidebar -->
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>