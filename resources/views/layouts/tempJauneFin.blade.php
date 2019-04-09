<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title')</title>
		<link href="{{ asset('../public/css/app.css') }}" rel="stylesheet" type="text/css" >
        <script type="text/javascript" src="{{ asset('../public/js/app.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="../public/bootstrap/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </head>
    
    <body>
  
    
    	 <div> <h1 class="titre" style="text-align: center; padding-bottom: 20px; text-decoration: #ffeb3b underline">Enigme cour des matières</h1></div>  
    	  
    	 <div class="plan" style="text-align: center; margin-bottom:20px">
			<p style ="text-align: left; margin-left:230px; margin-bottom:50px"><a style = "text-decoration: black underline">Votre objectif :</a> trouver <strong>3 mots-clés</strong> qui vous permettront de débloquer une vidéo. 
			Cette dernière vous mettra sur la piste de Théo.<br>
			<a style = "text-decoration: black underline">Consignes :</a> vous devez tout d'abord rejoindre votre point de départ indiqué sur le plan ci-dessous en fonction 
			de la couleur de votre équipe.<br>
			<a style = "text-decoration: black underline">Note importante :</a> vous n'avez pas accès aux bâtiments, toutes les énigmes peuvent être résolues dans la cour des matières.</p>
    
        	<div class="contenu" style="text-align: center; margin-bottom:20px">
    	  
    	      	  @yield('content')
    	  
    	  	</div>
    	 	 	
		 </div>
		 
    </body>
</html>
