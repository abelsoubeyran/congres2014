<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 */
?>
<?php get_header(); ?>
<div class="clear"></div>
<div class="page-content">
    <div class="grid_16 alpha">
        <div class="content-bar">
            <h1 class="page_title"><?php the_title(); ?></h1>
            <?php the_content(); ?>	
            <header class="entry-header">
                <h1 class="entry-title">
                    <?php _e('C\' est embarrassant n\est ce pas?', 'squirrel'); ?>
                </h1>
            </header>
            <p>
                <?php _e('Il semble que nous ne pouvions pas trouver ce que vous cherchiez. Faites une recherche, ou bien essayer un des liens ci-dessous.', 'squirrel'); ?>
            </p>
            <?php get_search_form(); ?>
            <?php the_widget('WP_Widget_Recent_Posts', array('number' => 10), array('widget_id' => '404')); ?>
            <div class="widget">
                <h2 class="widgettitle">
                    <?php _e('Catégories les plus utilisés', 'squirrel'); ?>
                </h2>
                <ul>
                    <?php wp_list_categories(array('orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10)); ?>
                </ul>
            </div>
            <?php
            /* translators: %1$s: smilie */
            $archive_content = '<p>' . sprintf(__('Essayez les archives mensuelles. %1$s', 'squirrel'), convert_smilies(':)')) . '</p>';
            the_widget('WP_Widget_Archives', array('count' => 0, 'dropdown' => 1), array('after_title' => '</h2>' . $archive_content));
            ?>
            <?php the_widget('WP_Widget_Tag_Cloud'); ?>
        </div>
    </div>
    <div class="grid_8 omega">
        <!--Start Sidebar-->
        <?php get_sidebar(); ?>
        <!--End Sidebar-->
    </div>
</div>
</div>
<?php get_footer(); ?>