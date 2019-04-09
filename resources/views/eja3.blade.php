@extends ('layouts.tempJaune')

@section ('content')

	<p style="margin-bottom: 50px; margin-left: 220px; margin-right: 220px; font-size: 16px; padding: 15px; border-width: 3px ! important" class="border border-warning">Enigme 3 : "Sur les 3, seul le bâtiment IJ compte. Dans ce bâtiment, la seconde est 5ème, la 5ème est seconde, la 7ème est 6ème, la 9ème est 3ème, la 10èmè est 7ème, la 16ème est 8ème, la 20ème est première et la 51ème est 4ème. L'un des points de départ des autres équipes peut être le début de la solution."</p>

    <form action="{{ url('inija') }}" method="POST">
        {{ csrf_field() }}
        <label for="enigme">Lorsque vous avez trouvé le mot, inscrivez-le ci-dessous puis validez pour passer à l'énigme suivante.</label><br>
    	<input id="enigme" type="text" name="" placeholder="Votre réponse">
    	<button type="submit" style="margin-bottom:30px">Valider</button>
	</form>

@endsection