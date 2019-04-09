@extends ('layouts.tempRouge')

@section ('content')

	<p style="margin-bottom: 50px; margin-left: 220px; margin-right: 220px; font-size: 16px; padding: 15px; border-width: 3px ! important" class="border border-danger">Enigme 3 : "Sur les 3, seul le premier compte. Dans ce batiment, la 2ème est première, la 3ème est seconde, la 7ème est 5ème, la 8ème est 4ème, la 9ème est 8ème, la 13ème est 7ème, la 34ème est 3ème et la 38ème est 6ème. L'un des points de départ des autres équipes peut être le début de la solution."</p>

    <form action="{{ url('iniro') }}" method="POST">
        {{ csrf_field() }}
        <label for="enigme">Lorsque vous avez trouvé le mot, inscrivez-le ci-dessous puis validez pour passer à l'énigme suivante.</label><br>
    	<input id="enigme" type="text" name="" placeholder="Votre réponse">
    	<button type="submit" style="margin-bottom:30px">Valider</button>
	</form>

@endsection