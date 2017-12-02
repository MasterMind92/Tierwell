<?php include'includes/links.php';?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Administration </title>

    <!-- Bootstrap Core CSS -->
    <link href="../ressources/vendor/bootstrap_admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../ressources/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
	
	 <!-- Morris Charts CSS -->
    <link href="../ressources/vendor/morrisjs/morris.css" rel="stylesheet">

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

    


<!-- Page Content -->

    <div class="container-fluid">
        <div class="row">
            <!-- <div class="col-lg-12" style="background-image: url('../ressources/img/appart4.jpg');">
                <h1 class="page-header">Bienvenu cher Administrateur</h1>
            </div> -->

            <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            	
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                	<ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Rechercher...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> <span class="fa arrow"></span>Clients</a>

                            <ul class="nav nav-second-level">
                                <li><a href="#">Nom Client</a></li>
                                <li><a href="#">Nom Client</a></li>
                                <li><a href="#">Nom Client</a></li>
                                <li><a href="#">Nom Client</a></li>
                                <li><a href="#">Nom Client</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-money fa-fw"></i> Etat de versement <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="#">Quotidien</a></li>
                                <li><a href="#">Hebdomadaire</a></li>
                                <li><a href="#">Mensuel</a></li>
                                <li><a href="#">Bimestriel</a></li>
                                <li><a href="#">Trimestriel</a></li>
                            </ul>
                        </li>
                       <!--  <li>
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

                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                	<div class="container-fluid">
                		<table class="table">
                			<button type="button" style="float:right;font-weight: bold;" class="btn btn-default" data-id-client="">Editer Reçu </button>
                			<caption class="text-center"><strong>Fiche Client</strong> </caption>
                			<thead>
                				<tr>
                					<th></th>
                				</tr>
                			</thead>
                			<tbody>
                				<tr>
                					<td>Matricule:</td>
                					<td> Heuss/54/Atakabori/1234 </td>
                				</tr>
                				<tr>
                					<td>Nom:</td>
                					<td>KCEE</td>
                				</tr>
                				<tr>
                					<td>Prenoms:</td>
                					<td>ODJOUFOLO</td>
                				</tr>
                				<tr>
                					<td>Total a Payer:</td>
                					<td><span class="badge">1 500 000</span> </td>
                				</tr>
                				<tr>
                					<td>Nombre de versement</td>
                					<td> 4 </td>
                				</tr>
                				<tr>
                					<td>Total recouvree</td>
                					<td>  <span class="badge ">700 000</span> </td>
                				</tr>

                				<tr>
                					<td>Total Restant</td>
                					<td>  <span class="badge ">800 000</span> </td>
                				</tr>
                				
                			</tbody>
                		</table>
						<hr>
						<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Morris.js Charts</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Area Chart Example
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Bar Chart Example
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-bar-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Line Chart Example
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-line-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Donut Chart Example
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-donut-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Morris.js Usage
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <p>Morris.js is a jQuery based charting plugin created by Olly Smith. In SB Admin, we are using the most recent version of Morris.js which includes the resize function, which makes the charts fully responsive. The documentation for Morris.js is available on their website, <a target="_blank" href="http://morrisjs.github.io/morris.js/">http://morrisjs.github.io/morris.js/</a>.</p>
                            <a target="_blank" class="btn btn-default btn-lg btn-block" href="http://morrisjs.github.io/morris.js/">View Morris.js Documentation</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
                	</div>
                </div>
            
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->



    <!-- jQuery -->
    <script src="../ressources/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../ressources/vendor/bootstrap_admin/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../ressources/vendor/metisMenu/metisMenu.min.js"></script>

    <script src="../ressources/vendor/popper/popper.min.js"></script>

      <!-- Morris Charts JavaScript -->
    <script src="../ressources/vendor/raphael/raphael.min.js"></script>
    <script src="../ressources/vendor/morrisjs/morris.min.js"></script>
    <script src="../ressources/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../ressources/js/sb-admin-2.js"></script>

</body>

</html>
