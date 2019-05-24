<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ajouter de classe</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body class="container text-center">
		<hr>
		<div class="row text center">
			<h1><b>Ajouter une Classe</b></h1>	
		</div>
		<hr>
		<h1>  Bienvenue {{ Auth::user()->name }}</h1>
		<form action="{{route('handleAddClassroom')}}" method="POST" enctype="multipart/form-data">
			
			{{ csrf_field() }}
			<label for="title">Nom de classe</label>
			<br>
			<input class="form-control" type="text" name="title">
			<br>
			<label for="title">Image de classe</label>
			<br>
			<input class="form-control" type="file" name="photo">
			<hr>
			<div class="row">
				<button class="btn btn-primary" type="submit">Ajouter</button>
				<button class="btn btn-warning" type="reset">Reset</button>
			</div>
			
		</form>

		<a class="btn btn-success" href="{{ url('/') }}">Renter à l'accueil</a>
	</body>
</html>