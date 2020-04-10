<?php while (have_posts()) : the_post(); ?>
 <div class="container">
   <div class="row">
       <?php get_template_part('templates/page', 'header'); ?>
        <?php get_template_part('templates/content', 'page'); ?>
      <?php endwhile; ?>

   </div>
 </div>
