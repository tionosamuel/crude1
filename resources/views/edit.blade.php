
@extends('master')

@section('content')

<div class="card">
	<div class="card-header">Modifier un Etudiant</div>
	<div class="card-body">
		<form method="post" action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Administrateur Nom</label>
				<div class="col-sm-10">
					<input type="text" name="student_name" class="form-control" value="{{ $student->student_name }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Administrateur Email</label>
				<div class="col-sm-10">
					<input type="text" name="student_email" class="form-control" value="{{ $student->student_email }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Administrateur Genre</label>
				<div class="col-sm-10">
					<select name="student_gender" class="form-control">
						<option value="Male">Masculin</option>
						<option value="Female">Feminin</option>
					</select>
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Administrateur Image</label>
				<div class="col-sm-10">
					<input type="file" name="student_image" />
					<br />
					<img src="{{ asset('images/' . $student->student_image) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_student_image" value="{{ $student->student_image }}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $student->id }}" />
				<input type="submit" class="btn btn-primary" value="Modifier" />
			</div>	
		</form>
	</div>
</div>
<script>
document.getElementsByName('student_gender')[0].value = "{{ $student->student_gender }}";
</script>
