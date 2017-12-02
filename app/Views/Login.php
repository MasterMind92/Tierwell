<?php include 'includes/links.php' ?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Connexion </title>

        <?php echo HEADER; ?> 

        <style type="text/css">
            form{
                margin-top: 100px;
            }

            .navbar{
                background-color: #007bff ;
              }

              .nav-link{
                color: white;
              }
        </style>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php include'includes/nav.php'; ?>

        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    
                </div>
                <div class="col-xs-12 col-sm-8 col-md-4 col-lg-offset-4 col-lg-4">
                    <form action="../../../Traitements/connexion.php" method="POST" role="form">

                        <legend> <h2 class="text-center">Connexion </h2> </legend>

                        <div class="form-group">
                            <input type="text" name="login_us" class="form-control" id="" placeholder="Entrez votre login ">
                        </div>

                        <div class="form-group">
                            <input type="password" name="mdp_us" class="form-control" id="" placeholder="Entrez votre mot de passe ">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    
                </div>
            </div>	
        </div>




        <!-- Footer -->
    <footer style="background-color: #007bff ;" class="py-5 fixed-bottom">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Tierwell App 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <?php echo FOOTER; ?>
    </body>
</html>