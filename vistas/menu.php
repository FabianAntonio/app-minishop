<!-- Preloader -->
<div class="loader-mask">
    <div class="loader">
      "Loading..."
    </div>
  </div>

  <main class="main-wrapper">

    <!-- Navigation -->
    <header class="nav">
      <div class="nav__holder nav--sticky">
        <div class="container-fluid container-semi-fluid nav__container">
          <div class="flex-parent">

            <!-- Search form -->
            <form role="search" method="get" class="nav__search-form">
              <input type="search" class="nav__search-input" id="nav__search-input" placeholder="Type &amp; Hit Enter">
              <i class="ui-close nav__search-close" id="nav__search-close"></i>
            </form>

            <div class="nav__header">
              <!-- Logo -->
              <a href="index.html" class="logo-container">
                <img class="logo" src="vistas/img/logo.png" srcset="vistas/img/logo.png 1x, vistas/img/logo@2x.png 2x" alt="logo">
              </a>

              <!-- Mobile toggle -->
              <button type="button" class="nav__icon-toggle" id="nav__icon-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="nav__icon-toggle-bar"></span>
                <span class="nav__icon-toggle-bar"></span>
                <span class="nav__icon-toggle-bar"></span>
              </button> 
            </div>                      

            <!-- Navbar -->
            <nav id="navbar-collapse" class="nav__wrap collapse navbar-collapse nav--align-right">
              <ul class="nav__menu">
                <li class="nav__dropdown active">
                  <a href="index.html" aria-haspopup="true">Home</a>
                  <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                  <ul class="nav__dropdown-menu">
                   <!-- <li><a href="index.html">Home 1</a></li>
                    <li><a href="index-2.html">Home 2</a></li>-->
                  </ul>
                </li>
                <li class="nav__dropdown">
                  <a href="index.php?controlador=articulo&accion=listado" aria-haspopup="true">Articulos</a>
                  <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                  <ul class="nav__dropdown-menu">
                    <li><a href="index.php?controlador=articulo&accion=crear">Crear</a></li>
                    <!--<li><a href="services.html">Articulos</a></li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="404.html">404</a></li>-->
                  </ul>
                </li>
                <li class="nav__dropdown">
                  <a href="index.php?controlador=categoria&accion=listado" aria-haspopup="true">Categorias</a>
                  <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                  <ul class="nav__dropdown-menu">
                    <li><a href="index.php?controlador=categoria&accion=crear">Crear</a></li>
                  <!--  <li><a href="elements.html">Elements</a></li>-->
                  </ul>
                </li>
                <li class="nav__dropdown">
                  <a href="index.php?controlador=blog&accion=listado" aria-haspopup="true">Blog</a>
                  <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                  <ul class="nav__dropdown-menu">
                    <li><a href="index.php?controlador=categoria&accion=crear">Crear</a></li>
                    <li><a href="blog-masonry.html">Blog Masonry</a></li>
                    <li class="nav__dropdown">
                      <a href="single-post-1.html" aria-haspopup="true">Single Post</a>
                      <i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true" aria-expanded="false"></i>
                      <ul class="nav__dropdown-menu">
                        <li><a href="single-post-1.html">Fullwidth</a></li>
                        <li><a href="single-post-2.html">With Sidebar</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">Contacto</a>
                </li>
              </ul> <!-- end menu -->

              <!-- Mobile Phone -->
              <div class="nav__phone-mobile d-lg-none">
                <a href="tel:1-800-995-3959" class="nav__phone-number">1-800-995-3959</a>
              </div>
              

              <!-- Mobile Search -->
              <div class="nav__search-mobile d-lg-none">
                <form role="search" method="get" class="search-form relative">
                  <input type="search" class="search-input" placeholder="Search" />
                  <button type="submit" class="search-button" aria-label="search button"><i class="ui-search search-icon"></i></button>
                </form>
              </div>

            </nav> <!-- end nav-wrap -->            


            <!-- Nav Right -->
            <div class="nav__right d-none d-lg-flex">
              <div class="nav__right-item">
                <a href="tel:1-800-995-3959" class="nav__phone-number">1-800-995-3959</a>
              </div>

              <!-- Search -->
              <div class="nav__right-item nav__search">
                <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                  <i class="ui-search"></i>
                </a>               
              </div> 

            </div> <!-- end nav right -->
        
          </div> <!-- end flex-parent -->
        </div> <!-- end container -->

      </div>
    </header> <!-- end navigation -->

    <!-- jQuery Scripts -->
  <script src="vistas/js/jquery.min.js"></script>
  <script src="vistas/js/bootstrap.min.js"></script>
  <script src="vistas/js/plugins.js"></script>
  <script src="vistas/js/scripts.js"></script>

  <!-- Cookies -->
  <script src="vistas/js/plugins/cookieconsent.min.js"></script>
  <script src="vistas/js/cookies.js"></script>