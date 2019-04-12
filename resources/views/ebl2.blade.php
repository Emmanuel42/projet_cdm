@extends ('layouts.tempBleu')

@section('title')



@endsection

@section('reminder')

	<p style="text-align: center; margin-bottom: 50px">Rappel : Enigme 1 = DESIGN</p>
	
@endsection

@section ('content')

	<p style="margin-bottom: 50px; font-size: 16px"><span class="border border-primary" style="padding: 15px; border-width: 3px ! important;">Enigme 2 : "A l'aide du plan ci-dessous, trouver le point de coordonnées (3;4) sur la grille végétale."</span></p>

    <form action="{{ action('EnigmeController@validE2') }}" method="POST">
        {{ csrf_field() }}
        <label for="enigme2bl">Lorsque vous avez trouvé le mot, inscrivez-le ci-dessous en MAJUSCULES puis validez pour passer à l'énigme suivante.</label><br>
    	<input id="enigme2bl" type="text" name="enigme2bl" placeholder="Votre réponse">
    	<button type="submit" style="margin-bottom:30px">Valider</button>
	</form>
	
	<div>
	
		
	
	</div>

@endsection