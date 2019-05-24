<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
        html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
        }
        .full-height {
        height: 100vh;
        }
        .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
        }
        .position-ref {
        position: relative;
        }
        .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
        }
        .content {
        text-align: center;
        }
        .title {
        font-size: 84px;
        }
        .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
        }
        .m-b-md {
        margin-bottom: 30px;
        }
        </style>
    </head>
    <body class="container-fluid">
       <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ route('login') }}">Login</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
                @endif
                @endauth
            </div>
            @endif     
        </div>-->
        <div class="row text-center">
            <div class="col-md-12 text-center">
                @if (Auth::user())
                     <h1 class="text-danger bg-light rounded p-3" ><b>Bienvenue {{ Auth::user()->name }}</b></h1>
                     <div>
                        {{ Auth::user()->created_at->diffForHumans(now()) }}
                    </div>
                @endif
           
            </div>
        </div>
        <div class="row text-center mt-5">
             <div class="col-md-4"></div>
            <a  class="btn btn-success" href="{{  url('classroom/add') }} "><b>Ajouter Classe</b></a>
            <div class="col-md-2"></div>
            <a class="btn btn-warning" href="{{  url('student/addst') }} "><b>Ajouter Étudiant</b></a>
            <div class="col-md-2"></div>
            <a class="btn btn-warning" href=" {{ route('showStudentLogin') }} "><b>Connexion</b></a>
            @auth
            <div class="col-md-2"></div>
            <a class="btn btn-danger" href="{{ route('handleStudentLogout') }}  "><b>Déconnexion</b></a>
            @endauth
        </div>
        <hr>
            <div class="container-fluid ">
                <div class="row">
                    @foreach ($class as $elm)
                    <div class="card mb-3 mr-3 bg-light" style="width: 20rem;">
                        <img style="width: 400px;height: 300px" src="{{ asset($elm->photo) }}" class="card-img-top img-thumbnail" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nom de classe: <span style="text-transform: uppercase;">{{ $elm->title }}</span></h5>
                            <hr>
                            <ul>
                                @foreach ($elm->students as $element)
                                <li class="mb-2"><h5 style="font-style: italic;text-transform: uppercase;"><a class="p-2 bg-light text-success" href="{{ route('showStudentDetails', ['id'=>$element->id]) }}">{{  $element->name }}</a></h5></li>
                                @auth
                                <a class="btn btn-danger mb-2" href="{{ url('student/delete/'.$element->id) }} "><b>Supprimer</b></a>
                                @endauth
                                <br>
                                
                                <a href="{{ url('student/edit/'.$element->id) }}" class="btn btn-primary"><b>Modifier l'étudiant</b></a>
                                
                                <hr>
                                @endforeach
                            </ul>
                            <h6 class="text-danger">Nombre d'étudiants: <span class="text-warning"><b>{{ $elm->students->count() }}</b></span></h6>
                            
                        </div >
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>