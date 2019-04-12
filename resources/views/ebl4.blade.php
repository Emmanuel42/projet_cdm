@extends('layouts.tempBleuFin')

@section('title')

	
@endsection

@section('content1')

	<p style="font-size: 30px; margin-bottom: 30px">Bravo ! Vous avez trouvé les 3 mots-clés. </p>
	
@endsection

@section('reminder')

	<p style="text-align: center; margin-bottom: 5px">Rappel : Enigme 1 = DESIGN</p>
	<p style="text-align: center; margin-bottom: 5px; margin-left:103px">Enigme 2 = TECHNOLOGIE</p>
	<p style="text-align: center; margin-bottom: 35px; margin-left:75px">Enigme 3 = ACADEMIE</p>

@endsection

@section('content2')

	<p style="margin-bottom: 20px">Entrer les initiales de ces mots dans le bon ordre pour débloquer la vidéo qui vous indiquera la suite de votre parcours.</p>

	        <form action="{{ action('EnigmeController@validE4') }}" method="POST" > {{csrf_field()}}				
				<label for="enigme4bl">Mot de passe</label><br>
				<input id="enigme4bl" type="text" name="enigme4bl" placeholder="Votre réponse">
				<button type="submit">Valider</button>
			</form>

@endsection