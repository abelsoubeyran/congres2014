<?php
/**
 * The template for displaying Search Results pages.
 *
 * 
 */
?>
<?php get_header(); ?>
<div class="clear"></div>
<div class="page-content">
    <div class="grid_16 alpha">
        <div class="content-bar">
            <?php if (have_posts()) : ?>
                <h1 class="page_title"><?php printf(__('Résultats de la recherche pour: %s', 'squirrel'), '' . get_search_query() . ''); ?></h1>
                <!--Start Post-->
                <?php get_template_part('loop', 'search'); ?>
                <!--End Post-->
            <?php else : ?>
                <article id="post-0" class="post no-results not-found">
                    <header class="entry-header">
                        <h1 class="entry-title">
                            <?php _e('Rien n\' a été trouvé', 'squirrel'); ?>
                        </h1>
                    </header>
                    <!-- .entry-header -->
                    <div class="entry-content">
                        <p>
                            <?php _e('Désolé mais rien ne correspond à vos critères. Essayez d\'autres mots clés.', 'squirrel'); ?>
                        </p>
                        <?php get_search_form(); ?>
                    </div>
                    <!-- .entry-content -->
                </article>
            <?php endif; ?>
            <div class="clear"></div>
            <nav id="nav-single"> <span class="nav-previous">
                    <?php next_posts_link(__('&larr; Posts plus anciens', 'squirrel')); ?>
                </span> <span class="nav-next">
                    <?php previous_posts_link(__('Posts plus récents &rarr;', 'squirrel')); ?>
                </span> </nav>	
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