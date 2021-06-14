<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Naele</title>
    <style>


    </style>
</head>
<body class="antialiased">
<nav class="navbar navbar-expand-lg navbar-light " style="height: 70px">
    <div class="container">

        <a class="navbar-brand" href="/"><img src="../../../imgs/NAELE.png" alt="image logo" class="image_logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-0 mb-lg-10 bg-white ">
                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="/histoire">À propos</a> </li>
                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="/forfaits">Services NE</a> </li>
                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="/actualites">Actualités</a> </li>

                @if (auth()->check() && auth()->user()->id)
                    <li class="nav-item"> <a class="nav-link active" aria-current="page" href="/profile">Mon compte</a> </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/login" style="text-decoration: underline; text-underline-offset: 5px; text-decoration-color: #59B0E3; ">Me connecter</a>
                    </li>
                @endif
                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="/contact">Contact</a> </li>
                @if (auth()->check() && auth()->user()->is_admin == 1)
                    <li class="nav-item"> <a class="nav-link active" aria-current="page" href="/admin/users" style="color: #59B0E3">USERS</a> </li>
                @endif

            </ul>

            <!--
            <ul class="list-group">
              <li class="list-group-item">An item</li>
              <li class="list-group-item">A second item</li>
              <li class="list-group-item">A third item</li>
              <li class="list-group-item">A fourth item</li>
              <li class="list-group-item">And a fifth one</li>
            </ul>
            -->
            <form method="POST" action="" class="d-flex">
                @csrf
                <input type="search" class="form-control" placeholder="actualités..." aria-label="Search">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</nav>

<div class="#"> <img src="../../../imgs/home-image.png" alt="image logo" class="image_logo" style="width: 100vw; height: 65vh "> </div>

<div class="container">

    <div class="col-md-6 col-lg-6 item" style="margin-left: 25%;margin-right: 25%; margin-top: 7%">
        <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
            @csrf
            @method('put')
            <x-label for="name" :value="__('Nom')" />
            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$user->name}}" required autofocus/>
            @error('name')
            {{$message}}
            @enderror
            <x-label for="email" :value="__('Email')" />
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$user->email}}" required />
            @error('email')
            {{$message}}
            @enderror

            <br>
            <button class="btn-info" style="color: white; width: 100%" type="submit">Modifier</button>
        </form>
    </div>
</div>

<!---->
<br>
<div class="testimonials-clean" style="background-color: #F3F9FE">
    <div class="container">
        <div class="row people">
            <div class="col-md-6 col-lg-4 item">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <img src="../../../imgs/NAELE.png" alt="image logo" class="image_logo">
                    </a><br><br>
                    <a href="" target="_blank"><img src="../../../imgs/logo-facebook.png" alt="image logo" class="image_logo"></a>
                    <a><img src="../../../imgs/insta_logo.png" alt="image logo" class="image_logo"></a>
                    <a><img src="../../../imgs/twiiter_logo.png" alt="image logo" class="image_logo"></a>
                    <a><img src="../../../imgs/linkedin.png" alt="image logo" class="image_logo"></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <div class="container">
                    <ul>
                        <li><h4>A Propos :</h4></li>
                        <li>Nos missions</li>
                        <li>Nous contacter</li>
                        <li>Se connecter </li>
                        <li>Centre d'aide </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <div class="container">
                    <ul>
                        <li><h4>Forfaits :</h4></li>
                        <li>NE- Etudiants</li>
                        <li>NE- Plus</li>
                        <li>NE- Libre</li>
                        <li>NE- Max</li>
                        <li>NE- Découvert</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- -->
    </div>
</div>
</div>
</div>

</body>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</footer>
</html>
