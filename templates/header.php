<header class="banner">
         <nav class="navbar navbar-expand-md fixed-top navbar-light bg-light">
           <div class="container">

          <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img class="brand-logo img-fluid" src="<?= get_template_directory_uri(); ?>/dist/images/tri-logo.png" alt="Tapper Richards Interiors"></a>
          <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            &#9776;
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
              <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav ml-auto']);
              endif;
              ?>
          </div>
             </div>
        </nav>
</header>
