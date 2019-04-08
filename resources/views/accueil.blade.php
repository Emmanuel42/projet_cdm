<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<!--         <meta name="viewport" content="width=device-width, initial-scale=1"> -->

        <title>Enigme de la Cour des Matières</title>

<!--         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	</head>
	
	<body style="background-color: ">
		
		<div class="container center-align">
			
			<div class="title">
			
                <h2 style="text-decoration:underline black">Enigme de la Cour des Matières</h2>
                    
            </div>
            
            <div>
            <p style = "text-decoration: underline black">But du jeu :</p> 
            <p>Vous devez trouver 3 mots-clés qui vous donneront le mot de passe nécessaire pour débloquer une vidéo.
            Pour trouver les mots, vous devrez résoudre 3 énigmes.
            Vous n'avez pas accès aux bâtiments. Toutes les énigmes peuvent être résolues dans la Cour des Matières.
            </p>
            
            </div>
            
            <div>
            
            <p>Avant de commencer, vous devez choisir la couleur de votre équipe.</p>
            
			<form action="{{ url('/obsbl') }}" method="POST">
				{{ csrf_field() }}
            	<input class="waves-effect waves-light btn-large blue" style="width: 300px; margin-bottom:10px" type="submit" name="equipebl" value="Equipe Bleue">	
            </form>
          
            <form action="{{ url('/obsro') }}" method="POST">
				{{ csrf_field() }}
            	<input class="waves-effect waves-light btn-large red" style="width: 300px; margin-bottom:10px" type="submit" name="equipero" value="Equipe Rouge">
            </form>
          
            <form action="{{ url('/obsve') }}" method="POST">
				{{ csrf_field() }}
            	<input class="waves-effect waves-light btn-large green" style="width: 300px; margin-bottom:10px" type="submit" name="equipeve" value="Equipe Verte">
            </form>
            
            <form action="{{ url('/obsja') }}" method="POST">
				{{ csrf_field() }}
            	<input class="waves-effect waves-light btn-large yellow" style="width: 300px; margin-bottom:10px" type="submit" name="equipeja" value="Equipe Jaune">
            </form>
            
            <form action="{{ url('/obsvi') }}" method="POST">
				{{ csrf_field() }}            
            	<input class="waves-effect waves-light btn-large purple" style="width: 300px; margin-bottom:10px" type="submit" name="equipevi" value="Equipe Violette">
            </form>
            </div>

		</div>
	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
	
	</body>
	
</html>
