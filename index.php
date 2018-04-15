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

                $previousPostLink = get_previous_post('« Previous');
                $nextPostLink = get_next_post('Next »');?>
                
                <nav>
                    <ul class="pager list-inline">
                        <?php if ($previousPostLink): ?>
                            <li class="list-inline-item btn btn-secondary">Previous</li>
                        <?php endif; ?>
                        <?php if ($nextPostLink): ?>
                            <li class="list-inline-item btn btn-secondary">Next</li>
                        <?php endif; ?> 
                    </ul>
                </nav>     
            <?php endif; ?>
    </div>

    <!-- Sidebar -->
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>