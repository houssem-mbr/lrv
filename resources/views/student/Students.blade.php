<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="row">
	<a class="btn btn-success" href="{{  url('student/addst') }} ">Ajouter Étudiant</a>
	<a class="btn btn-danger" href="{{  url('/') }} ">Ajouter Étudiant</a>
</div>
	<div class="container">
		<div class="row">
	@foreach ($student as $elm)
	<div class="card" style="width: 18rem;">

			<img src="{{ $elm->classroom->photo }}" class="card-img-top" alt="...">
		
		<div class="card-body">
			<h5 class="card-title">{{ $elm->name }}</h5>
			<h5><b>Email: {{ $elm->email }}</b></h5>
			<h5>{{ $elm->classroom->title }}</h5>
			<a href="#" class="btn btn-primary">Go somewhere</a>
		</div>
	</div>
	@endforeach
	</div>
</div>
</body>
</html>