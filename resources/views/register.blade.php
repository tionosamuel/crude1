@extends('layout.app')
@section('title')

 CREER UN COMPTE
@endsection

@section('content')
<div class="w3ls-login box box--big">
		<form action=" {{  route('register')  }}" method="post">
			@csrf
            <p class="legend" style="color: lightsalmon;">Inscrivrez-vous ici<span class="fa fa-hand-o-down"></span> </p>
			<div class="agile-field-txt">
				<label style="color: lightseagreen;"><i class="fa fa-user" aria-hidden="true" style="color: lightseagreen;"></i>Nom</label>
				<input type="text" name="nom" placeholder="Entrer User Name" required="" style="color:black"; />
				<label style="color: lightseagreen;"><i class="fa fa-user" aria-hidden="true" style="color: lightseagreen;"></i>prénom</label>
				<input type="text" name="prenom" placeholder="Entrer prenom" required="" style="color:black"; />
			</div>
			<div class="agile-field-txt">
			<label style="color: lightseagreen;"><i class="fa fa-envelope" aria-hidden="true"></i> Email </label>
				<input type="email" name="email" placeholder="Email" required="" id="myInput" style="color:black";/>
				<label style="color: lightseagreen;"><i class="fa fa-unlock-alt" aria-hidden="true"></i> mot de passe</label>
				<input type="password" name="password" placeholder="Entrer Password" required="" id="myInput" style="color:black;"/>
				<div class="agile_label">
				<input type="submit" value="Inscription">
				</form>	
				@if(session('status'))
				<a href="#" style="color: black;"> {{session ('status') }} </a>
				@endif
						<!-- <input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()">
					<label class="check" for="check3">voir mot de passe</label> -->
				</div>
				<div class="agile-right">
					<a href="/login" style="color: black;">Déja un compte? se connecter</a>
				</div>
			</div>
	
            @endsection