


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
	<div class="card" style="width: 18rem;">
		<img style="width: 100%;height: 100%" src="{{ $elm->photo }}" class="card-img-top img-thumbnail" alt="...">
		<div class="card-body">
			<h5 class="card-title">Nom de classe: {{ $elm->title }}</h5>
			<br>
			<ul>
			@foreach ($elm->students as $element)
				<li class="mb-2"><a class="p-2 bg-light text-success" href="{{ route('showStudentDetails', ['id'=>$element->id]) }}">{{  $element->name }}</a></li>
				<br>
				<a class="btn btn-danger mb-2" href="{{ url('student/delete/'.$element->id) }} ">Supprimer</a>
			@endforeach
			</ul>
			<h6>Nombre d'étudiants: {{ $elm->students->count() }}</h6>
			<a href="{{ route('showStudentDetails', ['id'=>$element->id]) }}" class="btn btn-primary">Go somewhere</a>
		</div >
	</div>
	@endforeach
	</div>
</div>
</body>
</html>
