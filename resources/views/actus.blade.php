@extends('layouts.main')
@section('content')
<h2 class="text-center">Actualités</h2>
<div class="container">
</div>
<br>
<h5 style="text-align: center; font-size: 2vh">Chaque semaine, des sorties et des contenus qui vous accompagnent dans vos trajets.</h5>
<br>
<br>
<br>
<div class="container">
    <div class="" style="margin-left: 5%;margin-right: 5%">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @if($actus->isNotEmpty())

        @foreach ($actus as $actu)
        <div class="col">
            <div class="card">
                <img src="{{asset('imgs/' . $actu->image)}}" class="card-img-top" alt="..." style="height: 35vh">
                <div class="card-body">
                    <h5 class="card-title">{{ $actu->title }}</h5>
                    <p class="card-text">
                        {{ $actu->content }}
                    </p>
                    <div>
                        <a href="{{route('route.detail', $actu->id )}}">Lire la suite</a>
                        <p class="float-center" style="text-align: right">{{ $actu->created_at->diffForHumans() }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
            <div>
                <p> Nous n'avons pas de resultats pour cette actulités !</p>
            </div>
        @endif
    </div>
    </div>
</div>
@include('partials.comments')<br>
@endsection
