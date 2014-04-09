
<?php
/**
 * The template for displaying front page pages.
 *
 */
?>
<?php get_header(); ?>
<!--Start Header info-->
<div class="header-info">
    <?php if (squirrel_get_option('squirrel_first_head') != '') { ?>
        <h1><?php echo stripslashes(squirrel_get_option('squirrel_first_head')); ?></h1>
    <?php } else { ?>
        <h1><?php _e('', 'squirrel'); ?></h1>
    <?php } ?>    
    <?php if (squirrel_get_option('squirrel_second_head') != '') { ?>
        <h2><?php echo stripslashes(squirrel_get_option('squirrel_second_head')); ?></h2>
    <?php } else { ?>
        <h2><?php _e('', 'squirrel'); ?></a></h2>
    <?php } ?>
</div>
<!--End Header info-->
<div class="clear"></div>
<!--Start Slider-->
<div class="slider-wrapper">
    <div id="container">
        <div id="example">
          <div id="slideshow">
           <?php if(!function_exists('dynamic_sidebar')|| !dynamic_sidebar('Slideshow Widget area')):endif;?>
          </div>
               
          
        </div>
    </div>
    <div class="slider-info">
        <?php if (squirrel_get_option('squirrel_slidehead') != '') { ?>
            <h1><?php echo stripslashes(squirrel_get_option('squirrel_slidehead')); ?></h1>
        <?php } else { ?>
            <h1><?php _e('', 'squirrel'); ?></h1>
        <?php } ?>            
        <?php if (squirrel_get_option('squirrel_slidedesc') != '') { ?>
            <p><?php echo stripslashes(squirrel_get_option('squirrel_slidedesc')); ?></p>            
        <?php } else { ?>
            <p><?php _e('', 'squirrel') ?></p>
            <p><?php _e('', 'squirrel'); ?></p>
        <?php } ?>            
    </div>
</div>
<!--End Slider-->
<div class="clear"></div>
<!--Start Index-->
<div class="full-content">
    <div class="text-featute">
        <div class="grid_12 alpha">
            <div class="text-featute-one">
                <?php if (squirrel_get_option('squirrel_leftcolhead') != '') { ?>
                    <h3><?php echo stripslashes(squirrel_get_option('squirrel_leftcolhead')); ?></h3>
                <?php } else { ?>
                    <h3><?php _e('', 'squirrel'); ?></h3>
                <?php } ?>                
                <?php if (squirrel_get_option('squirrel_leftcoldesc') != '') { ?>
                    <p><?php echo stripslashes(squirrel_get_option('squirrel_leftcoldesc')); ?></p>
                <?php } else { ?>
                    <p><?php _e('', 'squirrel'); ?></p>
                <?php } ?>                
           
            </div>
        </div>
        <div class="grid_12 omega"></div>
       <div class="text-featute-two">
     <!--        <?php if (squirrel_get_option('squirrel_rightcolhead') != '') { ?>
                <h3><?php echo stripslashes(squirrel_get_option('squirrel_rightcolhead')); ?></h3>
            <?php } else { ?>
                <h3><?php _e('', 'squirrel'); ?></h3>
            <?php } ?>              
            <?php if (squirrel_get_option('squirrel_rightcoldesc') != '') { ?>
                <p><?php echo stripslashes(squirrel_get_option('squirrel_rightcoldesc')); ?></p>
            <?php } else { ?>
                <p><?php _e('', 'squirrel'); ?></p>
            <?php } ?>  
				-->
			<?php if(!function_exists('dynamic_sidebar')|| !dynamic_sidebar('Rss Widget Area')):endif;?>
            
	   </div>
		
    </div>
    <div class="video-widget">
         <?php if(!function_exists('dynamic_sidebar')|| !dynamic_sidebar('video1')):endif;?>
     </div>
    <div class="clear"></div>
    <div class="index-fullwidth">
        <?php if (squirrel_get_option('squirrel_fullcolhead') != '') { ?>
            <h3><?php echo stripslashes(squirrel_get_option('squirrel_fullcolhead')); ?></h3>
        <?php } else { ?>
            <h3><?php _e('', 'squirrel'); ?></h3>
        <?php } ?>            
        <?php if (squirrel_get_option('squirrel_fullcoldesc') != '') { ?>
            <p><?php echo stripslashes(squirrel_get_option('squirrel_fullcoldesc')); ?></p>
        <?php } else { ?>
            <p><?php _e("", 'squirrel'); ?></p>
        <?php } ?>            
    </div>
</div>
</div>
<div class="clear"></div>
<!--End Index-->
<?php get_footer(); ?>