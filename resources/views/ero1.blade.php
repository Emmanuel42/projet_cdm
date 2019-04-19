@extends('layouts.tempRouge')

@section('title')

<p>Equipe {{ $equipe->id }} :  {{ $equipe->couleur }} </p>
	
@endsection
 
@section('content')

	<div class="col justify-content-center">
		<div class="border border-danger" style="border-width: 3px ! important; padding-top: 10px; margin-bottom:30px">
			<p style="font-size: 18px;">Enigme 1 : "Le premier mot se trouve dans votre zone de départ (indiquée sur le plan): la source de lumière vous éclairera."</p>
		</div>
		<div class="form">
    		<form action="{{ action('EnigmeControllerRo@validE1') }}" method="POST">
        		{{ csrf_field() }}
        		<label for="enigme1ro">Lorsque vous avez trouvé le mot, inscrivez-le ci-dessous en MAJUSCULES puis validez pour passer à l'énigme suivante.</label><br>
    			<input id="enigme1ro" type="text" name="enigme1ro" placeholder="Votre réponse" style="margin-right:5px; margin-bottom:5px">
    			<button type="submit" style="margin-bottom:30px">Valider</button>
			</form>
		</div>
	</div>
	
@endsection