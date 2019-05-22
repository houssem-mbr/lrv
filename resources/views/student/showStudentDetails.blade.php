<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="row text-center text-primary">
		<div class="col-md-12">
			<h1>L'étudiant: <b>{{ $student->name }}</b></h1>
		</div>
	</div>
	<div class="container">
		<div class="row text-center">
			<div class="col-md-3"></div>
	<div class="card bg-success text-white" style="width: 50rem;">
		<img src="{{ $student->classroom->photo }}" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title"><b>Nom et prénom:</b> {{ $student->name }}</h5>
			<hr>
			<h5><b>Email: {{ $student->email }}</b></h5>
			<hr>
			<h5><b>Nom de classe: </b>{{ $student->classroom->title }}</h5>
		</div>
	</div>

	</div>
</div>
<hr>
<div class="row">
	<div class="col-md-12 text-center">
		
		<a class="btn btn-dark" href="{{ url('classroom/showClassroom') }}">Renter au liste des classes</a>

	</div>
	
</div>
</body>
</html>