<?php include 'app/Views/includes/links.php' ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tierwell promotion</title>
    <style>
      .navbar{
        background-color: #007bff ;
      }

      .nav-link{
        color: white;
      }

    </style>

    <link href="app/ressources/vendor/bootstrap_business/css/bootstrap.min.css" rel="stylesheet">
    <link href="app/ressources/css/modern-business.css" rel="stylesheet">    


  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg  fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="app/ressources/img/logoW.png" alt="" width="150"> </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="app/Views/about.php">A propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="app/Views/services.php">Services</a>
            </li>
             
            <li class="nav-item">
              <a class="nav-link" href="app/Views/contact.php">Contact</a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Portfolio
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="portfolio-1-col.php">1 Column Portfolio</a>
                <a class="dropdown-item" href="portfolio-2-col.php">2 Column Portfolio</a>
                <a class="dropdown-item" href="portfolio-3-col.php">3 Column Portfolio</a>
                <a class="dropdown-item" href="portfolio-4-col.php">4 Column Portfolio</a>
                <a class="dropdown-item" href="portfolio-item.php">Single Portfolio Item</a>
              </div>
            </li> -->
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Blog
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="blog-home-1.php">Blog Home 1</a>
                <a class="dropdown-item" href="blog-home-2.php">Blog Home 2</a>
                <a class="dropdown-item" href="blog-post.php">Blog Post</a>
              </div>
            </li> -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Divers 
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <!-- <a class="dropdown-item" href="full-width.php">Full Width Page</a> -->
                <!-- <a class="dropdown-item" href="sidebar.php">Sidebar Page</a> -->
                <a class="dropdown-item" href="faq.php">FAQ</a>
                <a class="dropdown-item" href="faq.php">Reclamations</a>
                <a class="dropdown-item" href="faq.php">Plaintes</a>
                <a class="dropdown-item" href="faq.php">Suggestipns</a>
                <!-- <a class="dropdown-item" href="404.php">404</a> -->
                <!-- <a class="dropdown-item" href="pricing.php">Pricing Table</a> -->
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class=" btn btn-succes nav-link dropdown-toggle" href="" aria-haspopup="true" data-toggle="dropdown" id="authDrop" aria-expanded="false" style=" font-weight:bold;">Authentification</a>
              <div class="dropdown-menu " aria-labelledby="authDrop">
                <a class="dropdown-item" href="app/Views/Login.php">Suivi de souscription</a>
                <a class="dropdown-item" href="app/Views/Login.php">Suivi des construction</a>
                <a class="dropdown-item" href="app/Views/Login.php">Suivi du materiel de construction</a>
                <a class="dropdown-item" href="app/Views/Login.php">Suivi de recouvrement</a>
                <a class="dropdown-item" href="app/Views/Login.php">Suivi de litiges</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('app/ressources/img/histoire.jpg')">
            <!-- <div class="carousel-caption d-none d-md-block">
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p>
            </div> -->
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('app/ressources/img/11.jpg')">
            <!-- <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div> -->
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('app/ressources/img/22.jpg')">
            <!-- <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div> -->
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4">Bienvenu(e) sur notre plateforme de gestion automatisee</h1>

      <!-- Marketing Icons Section -->
      <!-- <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Card Title</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Card Title</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Card Title</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
      </div> -->
      <!-- /.row -->
      <!-- Features Section -->
      <div class="row">
        <div class="col-lg-6">
          <h2>Tierwell Promotion Immobiliere</h2>
         <!--  <p>notre application de gestion immobiliere inclut:</p> -->
          
          <p>
            
          </p>
            <!-- <li>
              <strong> La prise de rendez-vous </strong>
            </li> -->
             
          <!-- 
            <li>Le suivi des projets de construction</li>
            <li>La gestion du materiel de construction </li>
            <li>L'etablissement d'echeances</li> -->
        
          <p>Nous sommes l’agence immobilière du groupe Tierwell. Nous sommes spécialisée dans la construction, la vente et la gestion immobilière ainsi que l’aménagement et la viabilisation des terrains nus. Notre mission principale est de faire de l’investissement immobilier des propriétaires-bailleurs, une source de profit et non de soucis</p>
          <p>
            <form action="" class="form-horizontal" method="POST" role="form">
            
            <div class="form-group">
              <div class="row">
                  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <label for="">Vous etes</label>
                  </div>
                  <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                    <select name="" id="input" class="form-control" required="required">
                     <option value="">Categorie</option>
                     <option value="">Visiteurs</option>
                     <option value="">Interesse(e)</option>
                   </select>
                  </div>
                  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <select name="" id="input" class="form-control" required="required">
                     <option value="">Statut</option>
                     <option value="">Particulier</option>
                     <option value="">Entreprise</option>
                     <option value="">Association</option>
                     <option value="">Autre</option>
                   </select>
                  </div>
                </div>  
            </div>
          
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            
          
              <div class="form-group">

                <div class="row">
                   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <label for="">Votre Besoin</label>
                  </div>
                  
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <select name="" id="input" class="form-control" required="required">
                      <option value="">Choisissez votre besoin</option>
                      <option value="">Location</option>
                      <option value="">Amenagement</option>
                      <option value="">Prestation entreprises</option>
                      <option value="">gestion immobiliere</option>
                    </select>
                  </div>
                </div>
              </div>
            
              <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
              
              <div class="form-group">
                
                <div class="row">
                  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    Prenons rendez-vous :
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <input type="date" name="" id="input" class="form-control" value="" required="required" title="">
                    <select name="" id="input" class="form-control" required="required">
                      <option value="">Lieu</option>
                    </select>

                    <input type="text" name="" id="input" class="form-control" value=""   placeholder="Objet du rendez-vous">
                  </div>
                </div>
              </div>
              
          </div>
            <button type="submit" class="btn  btn-block btn-primary">Prendre RDV</button>
          </form>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="app/ressources/img/3pieces.jpg" alt="">
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
          <!-- <p>les differents volets de l'application permettront la gestion immobiliere ainsi qu'une relation clientele facilit&eacute;e</p> -->
        </div>
        <div class="col-md-4">
          <!-- <a class="btn btn-lg btn-success btn-block" href="Login.php">Authentifiez vous ici</a> -->
        </div>
      </div>

      <!-- Portfolio Section -->
      <h2>Notre champ d'action en matiere de construction</h2>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="app/ressources/img/appart3.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Construction d'immeuble</a>
              </h4>
              <p class="card-text"></p>
            </div>
          </div>
        </div>       
        
        
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="app/ressources/img/3pieces.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Construction de maison</a>
              </h4>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="app/ressources/img/22.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Construction de Cit&eacute;</a>
              </h4>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
      </div>

      <!-- /.row -->

      

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer style="background-color: #007bff ;" class="py-5">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Tierwell App 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <script src="app/ressources/vendor/jquery/jquery.min.js"></script>
  <script src="app/ressources/vendor/popper/popper.min.js"></script>
    <script src="app/ressources/vendor/bootstrap_business/js/bootstrap.min.js"></script>

  </body>

</html>
