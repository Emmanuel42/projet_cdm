@extends ('layouts.tempJaune')

@section ('content')

	<p style="margin-bottom: 50px; font-size: 16px"><span class="border border-warning" style="padding: 15px; border-width: 3px ! important;">Enigme 2 : "A l'aide du plan ci-dessous, trouver le point de coordonnées (4;3) sur la grille végétale."</span></p>

    <form action="{{ url('refja') }}" method="POST">
        {{ csrf_field() }}
        <label for="enigme2ja">Lorsque vous avez trouvé le mot, inscrivez-le ci-dessous puis validez pour passer à l'énigme suivante.</label><br>
    	<input id="enigme2ja" type="text" name="enigme2ja" placeholder="Votre réponse">
    	<button type="submit" style="margin-bottom:30px">Valider</button>
	</form>

@endsection