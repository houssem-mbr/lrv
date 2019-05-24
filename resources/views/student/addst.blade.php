<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container">
	
	<form action="{{route('handleAddstudent')}}" method="POST">
		
		{{ csrf_field() }}
		<label for="name">Nom et Prénom</label>
		<input class="form-control" type="text" name="name">
		<label for="email">Adresse Mail</label>
		<input class="form-control" type="email" name="email">
		<label>Mot de passe</label>
		<input class="form-control" type="password" name="password">
		<select name="classroom">
			@foreach ($class as $classe)
			<option value="{{ $classe->id }}">{{ $classe->title }}</option>
			
			@endforeach
		</select>
		<hr>
		<button class="btn btn-primary" type="submit">Ajouter</button>
	</form>

	<a class="btn btn-success" href="{{  url('/') }} ">Rentrer</a>
	
</div>