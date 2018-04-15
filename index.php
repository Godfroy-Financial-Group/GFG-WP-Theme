<?php get_header(); ?>

<div class="row">
    <!-- Content -->
    <div class="col-8">
        <?php 
            if (have_posts()): 
                while (have_posts()) {  
                    the_post();
				    get_template_part( 'content', get_post_format() );
                }

                $previousPostLink = previous_posts_link('« Previous');
                $nextPostLink = next_posts_link('Next »');
                if ($previousPostLink || $nextPostLink): ?>
                    <nav>
                        <ul class="pager list-inline">
                            <?php if ($previousPostLink): ?>
                                <li class="list-inline-item btn btn-secondary"><?php echo $previousPostLink; ?></li>
                            <?php endif; ?>
                            <?php if ($nextPostLink): ?>
                                <li class="list-inline-item btn btn-secondary"><?php echo $nextPostLink; ?></li>
                            <?php endif; ?> 
                        </ul>
                    </nav>     
                <?php endif; ?>
            <?php endif; ?>
    </div>

    <!-- Sidebar -->
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>