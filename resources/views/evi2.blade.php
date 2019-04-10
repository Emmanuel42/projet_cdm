@extends ('layouts.tempViolet')

@section ('content')

	<p style="margin-bottom: 50px; font-size: 16px"><span class="border" style="padding: 15px; border: 3px solid purple ! important;">Enigme 2 : "A l'aide du plan ci-dessous, trouver le point de coordonnées (4;5) sur la grille végétale."</span></p>

    <form action="{{ url('refvi') }}" method="POST">
        {{ csrf_field() }}
        <label for="enigme2vi">Lorsque vous avez trouvé le mot, inscrivez-le ci-dessous puis validez pour passer à l'énigme suivante.</label><br>
    	<input id="enigme2vi" type="text" name="enigme2vi" placeholder="Votre réponse">
    	<button type="submit" style="margin-bottom:30px">Valider</button>
	</form>

@endsection