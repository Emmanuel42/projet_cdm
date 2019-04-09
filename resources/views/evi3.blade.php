@extends ('layouts.tempViolet')

@section ('content')

	<p style="margin-bottom: 50px; margin-left: 220px; margin-right: 220px; font-size: 16px; padding: 15px; border: 3px solid purple ! important;" class="border">Enigme 3 : "Sur les 4, seules les 2 du milieu comptent. Ici, la première est première, la 6ème est 7ème, la 7ème est 3ème, la 22ème est 6ème, la 23ème est 5ème, la 28ème est seconde, la 29ème est 4ème et la 30ème est 8ème. L'un des points de départ des autres équipes peut être le début de la solution."</p>

    <form action="{{ url('inivi') }}" method="POST">
        {{ csrf_field() }}
        <label for="enigme">Lorsque vous avez trouvé le mot, inscrivez-le ci-dessous puis validez pour passer à l'énigme suivante.</label><br>
    	<input id="enigme" type="text" name="" placeholder="Votre réponse">
    	<button type="submit" style="margin-bottom:30px">Valider</button>
	</form>

@endsection