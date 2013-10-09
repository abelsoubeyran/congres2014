<?php
/*
Template Name: Formulaire
 */
?>
<?php get_header(); ?>
<div class="clear"></div>
<div class="page-content">
    <div class="grid_16 alpha">
        <div class="content-bar">
            <?php if (have_posts()) : the_post(); ?>
                <h1 class="page_title"><?php the_title(); ?></h1>
                <?php the_content(); ?>	
                <br/>
                <div class="clear"></div>
                <?php wp_link_pages(array('before' => '<div class="page-link"><span>' . 'Pages:' . '</span>', 'after' => '</div>')); ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="grid_8 omega">
     </div>
</div>
</div>
<?php get_footer(); ?>