<?php
/*
  Template Name: Rh
 */
?>
<?php get_header(); ?>
<div class="clear"></div>
<div class="page-content">
    <div class="grid_16 alpha">
        <div class="content-bar">
            <?php
            $limit = get_option('posts_per_page');
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            query_posts('showposts=' . $limit . '&paged=' . $paged . '&cat=4');
            $wp_query->is_archive = true;
            $wp_query->is_home = false;
            ?>
            <!-- Start the Loop. -->
	            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h1 class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                        <ul class="post_meta">
                           
                            <li class="post_date"><span><?php _e('le', 'squirrel'); ?></span>&nbsp;<?php echo get_the_time('m/ d/ Y') ?></li>
                            
                           
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
                            <a class="read_more" href="<?php the_permalink() ?>">Continuez à lire</a> </div>
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
                <?php previous_posts_link(__('posts plus récents &rarr;', 'squirrel')); ?>
                </span> </nav>
        </div>
    </div>
    <div class="grid_8 omega">
        <!--Start Sidebar-->
       
        <!--End Sidebar-->
    </div>
</div>
</div>
<?php get_footer(); ?>