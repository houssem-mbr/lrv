<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body class="container"> 
		<div class="row mb-5">
			<div class="col-sm-12 text-center">
				<h1 class="text-primary"><b>Connexion</b></h1>
			</div>
			
		</div>
		<form action="{{route('connexion')}}" method="POST">
			{{ csrf_field() }}
			<div class="form-group row">

				<label for="email" class="col-sm-2 col-form-label">Email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="email" placeholder="Votre Email">
				</div>
			</div>
			<div class="form-group row">
				<label for="password" class="col-sm-2 col-form-label">Mot de passe</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" name="password" placeholder="Password">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-5"></div>
				<button class="btn btn-success" type="submit"><b>connecter</b></button>
			</div>
			
		</form>
		<a class="btn btn-danger" href="{{ url('/') }}">Renter à l'accueil</a>
	</body>
</html>