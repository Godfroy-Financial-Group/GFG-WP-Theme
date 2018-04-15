<?php get_header(); ?>

<div class="row">
    <!-- Content -->
    <div class="col-8">
        <?php 
            if (have_posts()): 
                while (have_posts()) {  
                    the_post();
				    get_template_part( 'content', get_post_format() );
                } ?>
                
                <nav>
                    <ul class="pager list-inline">
                        <?php if (show_prev_posts_nav()): ?>
                            <li class="list-inline-item btn btn-dark"><?php previous_posts_link('« Previous'); ?></li>
                        <?php endif; ?>
                        <?php if (show_next_posts_nav()): ?>
                            <li class="list-inline-item btn btn-dark"><?php next_posts_link('Next »'); ?></li>
                        <?php endif; ?> 
                    </ul>
                </nav>     
            <?php endif; ?>
    </div>

    <!-- Sidebar -->
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>