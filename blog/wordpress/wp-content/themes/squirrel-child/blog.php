<?php
/*
  Template Name: Blog Page
 */
?>
<?php get_header(); ?>
<div class="clear"></div>
<div class="page-content">
    <div class="grid_16 alpha">
        <div class="content-bar">
            <h1>Découvre l'actualité du Congrès!</h1>
            <?php
            $limit = get_option('posts_per_page');
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            query_posts('showposts=' . $limit . '&paged=' . $paged . '&cat=-4');
            $wp_query->is_archive = true;
            $wp_query->is_home = false;
            ?>
			
		
            <!-- Start the Loop. -->
	            <?php 	if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h1 class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                        <ul class="post_meta">
                            <li class="posted_by"><span><?php _e('Posté par', 'squirrel'); ?></span>&nbsp;<?php the_author_posts_link(); ?></li>
                            <li class="post_date"><span><?php _e('le', 'squirrel'); ?></span>&nbsp;<?php echo get_the_time('m/ d/ Y') ?></li>
                            <li class="post_category"><span><?php _('dans', 'squirrel'); ?></span>&nbsp;<?php the_category(', '); ?></li>
                            <li class="postc_comment"><span><?php _e('', 'squirrel'); ?></span>&nbsp;<?php comments_popup_link('Pas de commentaires.', '1 Commentaire.', '% Commentaires.'); ?></li>
                        </ul>
                        <div class="post_content"> <?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) { ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('post_thumbnail', array('class' => 'postimg')); ?>
                                </a>
                            <?php } else { ?>
                                <a href="<?php the_permalink() ?>"><?php echo squirrel_main_image(250, 170); ?></a>
                                <?php
                            }
                            ?>	
                            <?php the_excerpt(); ?>
                            <div class="clear"></div>
                            <?php if (has_tag()) { ?>
                                <div class="tag">
                                    <?php the_tags('Tags du post: ', ', ', ''); ?>
                                </div>
                            <?php } ?>
                            <a class="read_more" href="<?php the_permalink() ?>">Continuer à lire</a> </div>
                    </div>
                    <!--End post-->
                <?php endwhile;
            else:
                ?>
                <div class="post">
                    <p>
                    <?php _e('Désolé, aucun post ne correspond à vos critères', 'squirrel'); ?>
                    </p>
                </div>
            <?php endif; ?>
            <!--End Loop-->
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