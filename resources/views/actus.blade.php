@extends('layouts.main')
@section('content')
<h2 class="text-center">Actualités</h2>
<div class="container">
</div>
@if($actus->isNotEmpty())

<br>
<h5 style="text-align: center; font-size: 2vh">Chaque semaine des sorties et des contenus qui vous accompagnent dans vos trajets.</h5>
<br>
<br>
<br>
<div class="container">
    <div class="" style="margin-left: 5%;margin-right: 5%">
    <div class="row row-cols-1 row-cols-md-3 g-4">

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
                        <!--<p class="float-center" style="text-align: right">{{ $actu->created_at->diffForHumans() }}</p>-->
                        <p class="float-center" style="text-align: right">🕓 {{ $actu->created_at }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
                <div    style="display: block;
                              margin-left: auto;
                              margin-right: auto;
                              width: 50%;">
                    <img src="{{asset('/imgs/Oops.png')}}" alt="oops" class="image_Oops">
                    <H5 style="text-align: center">Quelque chose ne fonctionne pas correcement</H5>
                    <p style="text-align: center">Veuillez vérifier votre saisie</p>
                </div>
        @endif
    </div>
    </div>
</div>
@include('partials.comments')<br>
@endsection
