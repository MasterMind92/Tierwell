<?php include'includes/links.php';?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rapport de Construction</title>

    <!-- Bootstrap Core CSS -->
    <link href="../ressources/vendor/bootstrap_admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../ressources/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../ressources/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../ressources/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style>
      .navbar,.sidebar-nav{
        background-color: #007bff ;
      }

      .nav-link{
        color: white;
      }
        
        .navbar a{
        color: white;
        font-weight: bold;
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

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar  navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="color:white;" class="navbar-brand" href="index.html"><img src="../ressources/img/logo2.jpg" height="40" alt=""> </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Infos Utilisateur</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Options</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Deconnexion</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Rechercher une maison">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <!-- <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> <span class="fa arrow"></span>Souscription</a>
                            
                        </li> -->
                        <li>
                            <a href="#"><i class="fa fa-home fa-fw"></i><span class="fa arrow"></span> Suivi de construction </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blankC1.php">Suivi de Maison</a>
                                </li>
                                <li>
                                    <a href="#">Rapport General</a>
                                </li>
                                <li>
                                    <a href="#">Rapport par Ilot</a>
                                </li>
                                <li>
                                    <a href="#">Rapport par Lot</a>
                                </li>
                                <!-- <li>
                                    <a href="#"></a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li> -->
                            </ul>
                        </li>
                        <!-- <li>
                            <a href="#"><i class="fa fa-building fa-fw"></i> Suivi du materiel de construction</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-money fa-fw"></i> Suivi de recouvrement</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-question fa-fw"></i> Suivi de litiges</a>
                        </li> -->
                        


                        <!-- <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    
                                </li>
                            </ul>
                                               
                        </li> -->
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <!-- <div class="col-lg-12">
                        <h1 class="page-header">Bienvenu cher Administrateur</h1>
                    </div> -->

                    <div style="background-image: url('../ressources/img/appart4.jpg');" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2 class="text-center" style="color: red;">Suivi et Evaluation des Construction</h2>
                        <div class="row">
                            

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#1" aria-expanded="false" aria-controls="1">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="1">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#2" aria-expanded="false" aria-controls="2">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="2">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#3" aria-expanded="false" aria-controls="3">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="3">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#4" aria-expanded="false" aria-controls="4">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="4">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>


                </div><!-- div.row-->

                 <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#1" aria-expanded="false" aria-controls="1">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="1">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#2" aria-expanded="false" aria-controls="2">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="2">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#3" aria-expanded="false" aria-controls="3">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="3">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#4" aria-expanded="false" aria-controls="4">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="4">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>


                </div><!-- div.row-->
                 <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#1" aria-expanded="false" aria-controls="1">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="1">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#2" aria-expanded="false" aria-controls="2">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="2">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#3" aria-expanded="false" aria-controls="3">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="3">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#4" aria-expanded="false" aria-controls="4">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="4">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>


                </div><!-- div.row-->

                 <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#1" aria-expanded="false" aria-controls="1">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="1">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#2" aria-expanded="false" aria-controls="2">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="2">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#3" aria-expanded="false" aria-controls="3">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="3">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#4" aria-expanded="false" aria-controls="4">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="4">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>


                </div><!-- div.row-->

                 <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#1" aria-expanded="false" aria-controls="1">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="1">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#2" aria-expanded="false" aria-controls="2">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="2">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#3" aria-expanded="false" aria-controls="3">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="3">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#4" aria-expanded="false" aria-controls="4">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="4">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>


                </div><!-- div.row-->

                 <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#1" aria-expanded="false" aria-controls="1">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="1">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#2" aria-expanded="false" aria-controls="2">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="2">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#3" aria-expanded="false" aria-controls="3">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="3">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#4" aria-expanded="false" aria-controls="4">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="4">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>


                </div><!-- div.row-->

                 <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#1" aria-expanded="false" aria-controls="1">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="1">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#2" aria-expanded="false" aria-controls="2">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="2">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#3" aria-expanded="false" aria-controls="3">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="3">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#4" aria-expanded="false" aria-controls="4">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="4">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>


                </div><!-- div.row-->

                 <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#1" aria-expanded="false" aria-controls="1">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="1">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#2" aria-expanded="false" aria-controls="2">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="2">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#3" aria-expanded="false" aria-controls="3">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="3">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#4" aria-expanded="false" aria-controls="4">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="4">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>


                </div><!-- div.row-->

                 <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#1" aria-expanded="false" aria-controls="1">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="1">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#2" aria-expanded="false" aria-controls="2">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="2">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#3" aria-expanded="false" aria-controls="3">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="3">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#4" aria-expanded="false" aria-controls="4">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="4">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>


                </div><!-- div.row-->

                 <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#1" aria-expanded="false" aria-controls="1">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="1">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#2" aria-expanded="false" aria-controls="2">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="2">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#3" aria-expanded="false" aria-controls="3">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="3">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>

                </div><!-- div.col-->

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <!-- Rapport de chantier -->
                    <a  data-toggle="collapse" href="#4" aria-expanded="false" aria-controls="4">
                      <span class="badge badge-info"> CodeMaison</span>
                      <!-- bar de progression -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                          </div>
                        </div>
                    </a>
                    <div class="collapse" id="4">
                      <div class="well">
                        <h4 class="text-center">Etape de construction Validee</h4>
                        <ul>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                            <li><input type="checkbox" name="" id=""> Etape</li>
                        </ul>
                      </div>
                    </div>


                </div><!-- div.row-->



             </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../ressources/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../ressources/vendor/bootstrap_admin/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../ressources/vendor/metisMenu/metisMenu.min.js"></script>

    <script src="../ressources/vendor/popper/popper.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../ressources/js/sb-admin-2.js"></script>

</body>

</html>
