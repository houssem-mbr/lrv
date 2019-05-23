


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<a class="btn btn-success" href="{{  url('classroom/add') }} ">Ajouter Classe</a>

	<a class="btn btn-warning" href="{{  url('student/addst') }} ">Ajouter Étudiant</a>
	<div class="container">
		<div class="row">
	@foreach ($class as $elm)
	<div class="card" style="width: 20rem;">
		<img style="width: 400px;height: 300px" src="{{ asset($elm->photo) }}" class="card-img-top img-thumbnail" alt="...">
		<div class="card-body">
			<h5 class="card-title">Nom de classe: <span style="text-transform: uppercase;">{{ $elm->title }}</span></h5>
			<hr>
			<ul>
			@foreach ($elm->students as $element)
				<li class="mb-2"><h5 style="font-style: italic;text-transform: uppercase;"><a class="p-2 bg-light text-success" href="{{ route('showStudentDetails', ['id'=>$element->id]) }}">{{  $element->name }}</a></h5></li>
				<a class="btn btn-danger mb-2" href="{{ url('student/delete/'.$element->id) }} ">Supprimer</a>
				<br>
				<a href="{{ url('student/edit/'.$element->id) }}" class="btn btn-primary">Modifier l'étudiant</a>
				<hr>
			@endforeach
			</ul>
			<h6>Nombre d'étudiants: {{ $elm->students->count() }}</h6>
			
		</div >
	</div>
	@endforeach
	</div>
</div>
</body>
</html>
