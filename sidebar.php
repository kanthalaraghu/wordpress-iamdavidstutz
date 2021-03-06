<div class="sidebar">
    <hr class="hidden-lg hidden-md">
    <div class="sidebar-search">
        <h5>
            <span class="sidebar-lead"><?php echo __('SEARCH', 'iamdavidstutz'); ?></span><span class="visible-lg-inline visible-sm-inline visible-xs-inline"><?php echo __('THEBLOG', 'iamdavidstutz'); ?></span>
        </h5>
        <?php get_search_form(); ?>
        <h5 class="pull-right">
            <?php echo __('FOR', 'iamdavidstutz'); ?><span class="visible-lg-inline visible-sm-inline visible-xs-inline hidden-md-inline"><?php echo __('INTERESTING', 'iamdavidstutz'); ?></span><span class="hidden-xs-inline hidden-sm-inline visible-md-inline hidden-lg-inline"><?php echo __('COOL', 'iamdavidstutz'); ?></span><?php echo __('STUFF', 'iamdavidstutz'); ?>
        </h5>
        <div class="clearfix"></div>
    </div>
    <hr class="hidden-lg hidden-md">
    <div class="sidebar-header">
        <h4><?php echo __('ARCHIVES', 'iamdavidstutz'); ?></h4>
        <h4 style="margin-left:30%;"><?php echo __('TAGS', 'TAGS'); ?></h4>
    </div>
    <div class="sidebar-archives">
        <?php echo iamdavidstutz_get_archives(); ?>
    </div>
    <div class="sidebar-tags">
        <ul class="list-unstyled">
            <?php $tags = get_tags(); ?>
            <?php foreach ($tags as $tag): ?>
                <li><a href="<?php echo get_tag_link($tag->term_id); ?>"><span class="label label-primary"><?php echo strtoupper($tag->name); ?></span></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <hr class="hidden-lg hidden-md">
</div>