<?php include 'URL-PATH.php' ?>

<header id="header" class="header d-flex align-items-center fix">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="accueil" class="logo d-flex align-items-center">
        <img src="assets/img/logo/logomin.png" >
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="accueil" class="<?php if ($first_part=="accueil") echo "active";  ?>">ACCUEIL</a></li>

          
              
              <li class="dropdown"><a href="#"><span>Présentation</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="mot-du-directeur">Mot du Directeur</a></li>
                  <li><a href="qui-sommes-nous">Qui Sommes Nous</a></li>
                  <li><a href="#">Equipe</a></li>
                  <li><a href="#">Actualités</a></li>
                  <li><a href="#">Partenaires</a></li>
               </ul>

               <li class="dropdown"><a href="#"><span>Institut du TMC</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">A Propos L'Institut du TMC</a></li>
                  <li class="dropdown"><a href="#"><span>Programme de Formation</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                  <ul>
                    <li><a href="#">Théatre</a></li>
                    <li><a href="#">Cinéma</a></li>
                    <li><a href="#">Musique</a></li>
                  </ul>
               </ul>

          
               <li><a href="projects" class="<?php if ($first_part=="projects") echo "active";  ?>">Nos représentations théâtrales</a></li>

         
          <li><a href="contact" class="<?php if ($first_part=="contact") echo "active";  ?>">Contact</a></li>
          <li><a href="#" class="<?php if ($first_part=="AR") echo "active";  ?>">AR</a></li>



          
          <li>  <form class="search-box">        
                  <input type="text" placeholder=" Rechercher "/>
                   <button type="reset"></button>
                </form>

          </li>


<!--

          <li><a href="about" class="<?php if ($first_part=="about") echo "active";  ?>">About Us</a></li>
          <li><a href="services" class="<?php if ($first_part=="services") echo "active";  ?>">Services</a></li>
          <li><a href="projects" class="<?php if ($first_part=="projects") echo "active";  ?>">Projects</a></li>
          <li><a href="blog" class="<?php if ($first_part=="blog") echo "active";  ?>">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
-->
          
          
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->