<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container">
	
	<form action="{{ url('student/'.$student->id) }}" method="POST">
		
		{{ csrf_field() }}
		<label for="name">Nom et Prénom</label>
		<input class="form-control" type="text" name="name" value="{{ $student->name }}">
		<label for="email">Adresse Mail</label>
		<input class="form-control" type="email" name="email" value="{{ $student->email }}">
		<select name="classroom">
			@foreach ($class as $classe)
			<option value="{{ $classe->id }}" @if ($student->classroom_id == $classe->id )
				{{"selected='selected'"}}
			@endif>{{ $classe->title }}</option>
			@endforeach
		</select>
		<br>
		<button class="btn btn-primary" value="Modifier" type="submit">Modifier</button>
	</form>

	<a class="btn btn-success" href="{{  url('/') }} ">Rentrer à l'accueil</a>
	
</div>