<?php include 'includes/links.php' ?>
 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="icon" href="/favicon.ico">
 
     <title>Souscription</title>
 
      <?php echo HEADER; ?>
     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
     <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
     <![endif]-->
   </head>
 
   <body>
 
     
 		<div class="row">
			<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
				<form action=""   method="POST" role="form">
					<legend> <h2 class="text-center">Souscription</h2></legend>
				
					<div class="form-group">
						<input type="text" class="form-control" id="npsous" name="npsous" placeholder="Entrez le nom et prenom du souscripteur">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="contsous" name="contsous" placeholder="Entrez le contact telephonique du souscripteur">
					</div>

					<div class="form-group">
						<input type="email" class="form-control" id="emsous" name="emsous" placeholder="Entrez l'e-mail du souscripteur">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="datenais" name="datenais" placeholder="Entrez le date de naissance du souscripteur">
					</div>

					<div class="form-group">
						<div class="radio">
							<label>
								<input type="radio" name="sexe" id="sexe" value="M" checked="checked">
								Masculin
							</label>
							<label>
								<input type="radio" name="sexe" id="sexe" value="F" checked="checked">
								Feminin
							</label>

						</div>

					</div>

					<div class="form-group">
						<input type="file" class="form-control" id="photosous" name="photosous" >
					</div>
					<legend> <h2 class="text-center"> Modalite </h2> </legend>
					<hr>

					<div class="form-group">
						<select name="" id="input" class="form-control" required="required">
							<option value="">Choisissez le nombre de versement</option>
							<option value="">1</option>
							<option value="">2</option>
							<option value="">3</option>
							<option value="">4</option>
							<option value="">Autres</option>
							
						</select>
					</div>

					<div class="form-group">
						<div class="row">
							<div  class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
								<label for="">Nombre de versement:</label>
							</div>
							<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
								<input type="number" name="" class="form-control" id="" disabled title="Entrez le nombre de versement">
							</div>
						</div>
						
					</div>

					<div class="form-group">
						<select name="" id="" class="form-control">
							<option value="">Choisissez un mode de paiement</option>
							<option value="">Espece</option>
							<option value="">Virement bancaire</option>
							<option value="">Mobile Money</option>
							<option value="">Par carte Bancaire</option>
						</select>
					</div>

					<legend> <h2 class="text-center">Dossier a fournir</h2> </legend>
					<hr>
						
					<div class="form-group">
						<div class="radio">
							<label>
								<input type="radio" name="" id="input" value="" checked="checked">
								Dossier 1
							</label>
							<label>
								<input type="radio" name="" id="input" value="" checked="checked">
								Dossier 2
							</label>
							<label>
								<input type="radio" name="" id="input" value="" checked="checked">
								Dossier 3
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="" id="input" value="" checked="checked">
								Dossier 4
							</label>
							<label>
								<input type="radio" name="" id="input" value="" checked="checked">
								Dossier 5
							</label>
							<label>
								<input type="radio" name="" id="input" value="" checked="checked">
								Dossier 6
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="" id="input" value="" checked="checked">
								Dossier 7
							</label>
							<label>
								<input type="radio" name="" id="input" value="" checked="checked">
								Dossier 8
							</label>
							<label>
								<input type="radio" name="" id="input" value="" checked="checked">
								Dossier 9
							</label>
						</div>

					</div>
				
					<button type="submit" class="btn btn-primary btn-block">Submit</button>
				</form>
			</div>
 		</div>
 
 
     <?php echo FOOTER; ?>
   </body>
 </html>
 