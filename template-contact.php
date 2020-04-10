<?php
/**
 * Template Name: Contact Template
 */
?>

<div class="container-fluid">
  <div class="row">

    <?php while (have_posts()) : the_post(); ?>
     <header>
        <img class="img-fluid d-none  d-sm-none d-md-block" src="<?php the_field('contact_header_image_lg') ?>" alt="">
        <img class="img-fluid d-md-none" src="<?php the_field('contact_header_image_sm') ?>" alt="">

     </header>
  </div>
</div>

 <div class="container">
  <div class="row">
     <div class="col">
      <?php get_template_part('templates/content', 'page'); ?>
    <?php endwhile; ?>
</div>

  <div class="col-md">
    <?php the_field('contact_info') ?>
  </div>
  </div>
</div>


