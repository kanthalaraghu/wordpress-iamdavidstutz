<?php get_header(); ?>

    <div class="row">
        <div class="col-md-9">
            <div class="searching">
                <h1><?php echo __('SEARCH'); ?>&raquo;<?php echo get_search_query(); ?>&laquo;</h1>
            </div>

            <?php if (have_posts()) : ?>
                <?php while (have_posts()): the_post(); ?>
                    <?php if (in_category('reading')): ?>
                        <?php iamdavidstutz_reading(); ?>
                    <?php elseif (in_category('snippet')): ?>
                        <?php //iamdavidstutz_snippet(); ?>
                    <?php elseif (get_post()->post_type == 'page'): ?>
                        <?php iamdavidstutz_page(); ?>
                    <?php else: ?>
                        <?php iamdavidstutz_article(); ?>
                    <?php endif; ?>
                <?php endwhile; ?>
                <?php iamdavidstutz_pagination_simple(); ?>
            <?php else: ?>
                <div class="nothing">
                    <h1><?php echo __('NOTHING', 'iamdavidstutz'); ?></h1>
                    <h4><?php echo __('NOTHINGFOUNDHERE', 'iamdavidstutz'); ?></h4>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
    
<?php get_footer(); ?>
