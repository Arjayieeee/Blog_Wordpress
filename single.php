<?php get_header(); ?>



<div class="theContent">
    <div class="container">
        <div class="branding">
        <?php echo get_the_post_thumbnail()?>
        <div class="date">
        <?php echo get_the_time('M-d-Y'); ?>
        </div>
        <h1><?php the_title(); ?></h1>
       
        <h4><?php echo get_the_excerpt()?></h4>
        <a href="<?php echo the_permalink()?> ">Read More...</a>
        </div>
      
    </div>

</div>




<?php get_footer(); ?>