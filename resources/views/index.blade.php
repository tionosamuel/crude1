
@extends('master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Liste des Administrateurs</b></div>
			<div class="col col-md-6">
				<a href="{{ route('students.create') }}" class="btn btn-success btn-sm float-end">Ajouter un Administrateur</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Image</th>
				<th>Nom</th>
				<th>Email</th>
				<th>date_de_naissance</th>
				<th>Genre</th>
				<th>Action</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						<td><img src="{{ asset('images/' . $row->student_image) }}" width="75" /></td>
						<td>{{ $row->student_name }}</td>
						<td>{{ $row->student_email }}</td>
						<td>{{ $row->date_naissance }}</td>
						<td>{{ $row->student_gender }}</td>
						<td>
							<form method="post" action="{{ route('students.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('students.show', $row->id) }}" class="btn btn-primary btn-sm">Regarder</a>
								<a href="{{ route('students.edit', $row->id) }}" class="btn btn-warning btn-sm">Modifier</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Supprimer" />
							</form>
							
						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">Pas de Connexion </td>
				</tr>
			@endif
		</table>
		{!! $data->links() !!}
	</div>
</div>

@endsection
