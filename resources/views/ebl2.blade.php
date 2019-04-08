@extends ('layouts.tempBleu')

@section ('content')

	<p style="margin-bottom: 50px; font-size: 16px"><span class="border border-primary" style="padding: 15px; border-width: 3px ! important;">Enigme 2 : "A l'aide du plan ci-dessous, trouver le point de coordonnées (3;4) sur la grille végétale."</span></p>

    <form action="{{ url('refbl') }}" method="POST">
        {{ csrf_field() }}
        <label for="enigme">Lorsque vous avez trouvé le mot, inscrivez-le ci-dessous puis validez pour passer à l'énigme suivante.</label><br>
    	<input id="enigme" type="text" name="nom" placeholder="Votre réponse">
    	<button type="submit" style="margin-bottom:30px">Valider</button>
	</form>

@endsection