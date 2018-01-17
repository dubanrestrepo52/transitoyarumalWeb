        <!--Navegación--> 

        <div class="menu navegacion mt-3">

          <nav class="barra-menu container-fluid navbar navbar-expand-lg navbar-light pl-0 pr-0">
                  
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

              <span class="navbar-toggler-icon"></span>

            </button>

        <!--Llamado del menú de Wordpress-->

              <?php
                  wp_nav_menu( array(
                              
                      'theme_location'    => 'menu-header',
                      'depth'             => 2,
                      'container'         => 'div',
                      'container_class'   => 'row collapse navbar-collapse  justify-content-center ml-0 mr-0',
                      'container_id'      => 'navbarNavDropdown',
                      'menu_class'        => 'navbar-nav',
                      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                      'walker'            => new WP_Bootstrap_Navwalker())
                      );
              ?>
                 
          </nav>
          
        </div>  
    