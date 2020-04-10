<?php
/**
 * Template Name: Profile Template
 */
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md profile-img  px-0">
              <div id="carousel-contact-page" class="carousel slide carousel-fade" data-ride="carousel" >
          <?php  $images = get_field('profile_image');
          if( $images ): ?>

                 <!-- Wrapper for slides -->
                 <div class="carousel-inner" role="listbox">
                 <?php $slideId = 0; ?>
                  <?php foreach( $images as $image ): ?>
                      <div class="carousel-item " id="slide<?php echo $slideId;?>">
                               <img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                         </div>

                      <?php $slideId++; ?>
                  <?php endforeach; ?>
                   </div>
          <?php endif; ?>


              </div>

    </div>
    <div class="col-md">
     <div class="profile-text">
        <h3><?php the_field('profile_name') ?><span><?php the_field('profile_title')?></span></h3>
      <p><?php the_field('profile_text') ?></p>
     </div>
     <hr>
    </div>
  </div>
</div>

