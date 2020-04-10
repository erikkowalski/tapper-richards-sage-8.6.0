<?php while (have_posts()) : the_post(); ?>

  <div class="container-fluid carousel-header">
    <div class="row">
      <header class="col-12 px-0">

        <div id="carousel-home-page" class="carousel slide carousel-fade" data-ride="carousel" >
          <?php  $images = get_field('home_page_gallery');
          if( $images ): ?>
                 <?php $dataId=0 ?>
                    <ol class="carousel-indicators">
                        <?php foreach( $images as $image ): ?>
                        <li data-target="#carousel-home-page" id="data<?php echo $dataId ?>" data-slide-to="<?php echo $dataId ?>" class=""></li>
                        <?php $dataId++ ?>
                        <?php endforeach; ?>
                    </ol>

                 <!-- Wrapper for slides -->
                 <div class="carousel-inner" role="listbox">
                 <?php $slideId = 0; ?>
                  <?php foreach( $images as $image ): ?>
                      <div class="carousel-item " id="slide<?php echo $slideId;?>">
                               <img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                 <a href=""><div class="carousel-caption d-block">
                                <h2>Explore our services</h2>
                              </div></a>
                         </div>

                      <?php $slideId++; ?>
                  <?php endforeach; ?>
                   </div>
          <?php endif; ?>

                    <a class="carousel-control-prev " href="#carousel-home-page" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next " href="#carousel-home-page" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>


              </div>



      </header>
    </div>
  </div>

  <div class="container">
   <div class="row">
      <div class="col-sm-4">
       <h2>Heading Style</h2>

      </div>
    <div class="col-sm-8">

    </div>
   </div>

  </div>





  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
