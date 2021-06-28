@extends('layouts.main')
@section('content')
    <br>
    <br>
   <h3 style="font-family: Skia" class="text-center">Nous sommes déjà 40 000 à utiliser NAELE au quotidient</h3>

<div class="#" style="height: 90vh">
    <img src="./imgs/2home.png" alt="image logo" class="image_logo" style="width: 100vw; height: 80vh">
</div>
<br>
<div class="container">
    <div style="height: 60vh">
        <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-left: 10%;margin-right: 10%">
            <div class="col">
                <div class="card h-100" style="background-color: #F8F8F8; border: none">
                    <div class="card-body">
                        <h5 class="card-title">PASS</h5>
                        <p class="card-text">
                            Parcourez la ville avec NAELE
                            pendant une journée ou une semaine.
                        </p>
                    </div>
                    <div class="d-grid gap-6 col-8 mx-auto card-footer">
                        <a href="#" class="btn btn-dark">Je choisis mon pass</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100" style="background-color: #F8F8F8; border: none">
                    <div class="card-body">
                        <h5 class="card-title">ABONNEMENTS</h5>
                        <p class="card-text">
                            Trouvez l’abonnement Naele
                            qui vous convient.
                        </p>
                    </div>
                    <div class="d-grid gap-6 col-8 mx-auto card-footer">
                        <a href="#" class="btn btn-dark">Choisir son abonnement</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100" style="background-color: #59B0E3; border: none">
                    <hp class="text-center" style="color: white">Déjà abonné ? </hp>
                    <div class="d-grid gap-6 col-8 mx-auto card-footer">
                        <a href="/register" class="btn" style="background-color: #0069A4; color: white">Je me connecte</a>
                    </div>
                    <hr style="color: white;">
                    <p class="text-center" style="color: white">C'est votre 1er voyage avec NAELE ?</p>
                    <div class="d-grid gap-6 col-8 mx-auto card-footer">
                        <a href="{{route('about')}}" class="btn" style="background-color: #0069A4; color: white">Je découvre</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <br>
        <br>

        <div class="#" style="background-color: #F8F8F8; height: 105vh;">
            <div class="container">
                <br>
                <br>
                <p style="font-family: Skia; font-size: 1.8vw;" class="text-center">
                    Le premier Titre de transport sur mobile que vous permet de vous<br>
                    déplacer sur touts les transports électriques du quotidien
                </p>
                <img src="{{asset('./imgs/3home.png')}}" alt="image logo" class="image_logo" style="width: 90vw; height: 100vh">
            </div>
        </div>
        <br>
        <br>

        <br>
        <div class="#" style="">
                <div style="height: 5vh">
                    <h5 class="text-center">LES ÉTAPES À SUIVRE POUR UTILISER LES SERVICES DE NAELE</h5>
                </div>
                <br>
            <br>
            <div class="container">
                <div class="row align-items-md-stretch">
                    <div class="col-md-6">
                        <div class="h-80 p-3 text-white bg-dark rounded-3" >
                            <div style="margin: 10%">
                                <h2>Change the background</h2>
                                <ol>
                                    <li>Inscription</li>
                                    <li>Choisir son forfait</li>
                                    <li>S'abonner</li>
                                    <li>Attribution d'un QR code</li>
                                    <li>Soyez le bienvenue 🥳</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <img src="{{asset('./imgs/d.png')}}" alt="image logo" class="image_logo" style="width: 100%; height: 78%">
                    </div>

                </div>
            </div>
        </div>
       <br>

        <div>
            <div>
                <h1 class="text-center">Actualités</h1>
                <h5 class="text-center">Ici vous trouverez les dernieres actualités de NAELE</h5>
            </div>
            <br>
            <br>
            <div>
                <div class="row row-cols-1 row-cols-md-3 g-4">

                    @if($actus->isNotEmpty())

                        @foreach ($actus as $actu)
                            <div class="col">
                                <div class="card">
                                    <img src="{{asset($actu->img_url)}}" class="card-img-top" alt="..." style="height: 35vh">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $actu->title }}</h5>
                                        <p class="card-text">
                                            {{ $actu->resume }}
                                        </p>
                                        <div>
                                            <a href="{{route('route.detail', $actu->id )}}">Lire la suite</a>
                                            <p class="float-center" style="text-align: right">🕰 {{ $actu->created_at }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div>
                            <p> Nous n'avons pas de resultats pour cette actualités !</p>
                        </div>
                    @endif

                </div>
            </div>
        </div>
        <br>
    </div>
        @include('partials.comments')<br>
@endsection
