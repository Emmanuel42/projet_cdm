@extends('layouts.tempRougeFin')

@section('content')

	<p style="font-size: 30px; margin-bottom: 30px">Bravo ! Vous avez trouvé les 3 mots-clés. </p>
	<p style="margin-bottom: 30px">Veuillez entrer les initiales de ces mots dans l'ordre où vous les avez trouvés pour débloquer la vidéo.</p> 
	<p style="margin-bottom: 30px">Regardez-la bien, elle vous donnera de précieux indices pour retrouver Théo.</p>

	        <form action="{{ url('vidro') }}" method="POST" > {{csrf_field()}}				
				<label for="enigme4ro">Mot de passe</label><br>
				<input id="enigme4ro" type="text" name="enigme4ro" placeholder="Votre réponse">
				<button type="submit">Valider</button>
			</form>

@endsection