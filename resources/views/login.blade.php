@extends('layout.app')
@section('title')

 Authentification
@endsection

@section('content')
<div class="w3ls-login box box--big">
		<form action="{{ route('login') }}" method="post">
		@csrf
            <p class="legend" style="color: lightsalmon;">CONNEXION<span class="fa fa-hand-o-down" style="color: brown;"></span> </p>
			<div class="agile-field-txt">
			<label><i class="fa fa-envelope" aria-hidden="true"></i> Email </label>
				<input type="email" name="email" placeholder="Entrer email" required="" id="myInput" />
				<label style="color: with;"><i class="fa fa-unlock-alt" aria-hidden="true"></i> mot de passe</label>
				<input type="password" name="password" placeholder="Entrer Password" required="" id="myInput" />
				<input type="submit" value="Connexion">

				@if(session('status'))
				<a href="#" style="color: black;"> {{session ('status') }} </a>
				@endif 
				
				<div class="agile-right">
				
					<a href="/register" style="color: black;">pas encore de compte? Créer un compte</a>
				</div>
			</div>
            @endsection