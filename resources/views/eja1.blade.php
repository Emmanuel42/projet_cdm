@extends('layouts.tempJaune')
 
@section('content')
	<p style="margin-bottom: 50px; font-size: 16px"><span class="border border-warning" style="padding: 15px; border-width: 3px ! important;">Enigme 1 : "Le premier mot se trouve dans votre zone de départ (indiquée sur le plan): la source de lumière vous éclairera."</span></p>

    <form action="{{ url('cooja') }}" method="POST">
        {{ csrf_field() }}
        <label for="enigme1ja">Lorsque vous avez trouvé le mot, inscrivez-le ci-dessous puis validez pour passer à l'énigme suivante.</label><br>
    	<input id="enigme1ja" type="text" name="enigme1ja" placeholder="Votre réponse">
    	<button type="submit" style="margin-bottom:30px">Valider</button>
	</form>
@endsection