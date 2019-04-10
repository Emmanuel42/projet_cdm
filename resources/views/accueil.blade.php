@extends('layouts.template_accueil')

@section('content')
            
	 <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
        <div class="row card text-white listProspect">
            <h1 class="card-header rounded-top" style="background-color: #4e413b;">Liste des équipes</h1>
            <div class="card-body" style="background-color: grey;">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Numéro</th>
                            <th>Couleur</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    
                  <!--   @foreach($toto as $equipe) -->
                    	<tr>
                            <td>toto</td>
<!--                             <td>{{ $equipe->couleur }}</td> -->
                        </tr>
                   <!--  	@endforeach-->
                    </tbody>
                    
                 </table>
              </div>
                    </div>
                    </div>
            
@endsection
