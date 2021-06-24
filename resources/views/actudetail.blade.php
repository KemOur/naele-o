@extends('layouts.main')
@section('content')
    <h2 class="text-center">Actualités</h2>
    <br>
    <h5 style="text-align: center; font-size: 2vh">Chaque semaine, des sorties et des contenus qui vous accompagnent dans vos trajets.</h5>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="" style="margin-left: 25%;margin-right: 25%">
            <div class="row row-cols-1 row-cols-md-12 g-4">
                        <div class="col">
                            <div class="card">
                                <img src="{{asset('imgs/' . $actu->img_url)}}" class="card-img-top" alt="..." style="height: 50vh">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $actu->title }}</h5>
                                    <p class="card-text">
                                        {{ $actu->resume }}
                                    </p>
                                    <p class="card-text">
                                        {{ $actu->content }}
                                    </p>
                                    <div>
                                        <p class="float-center" style="text-align: right">{{ $actu->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
        </div>
    </div>
    @include('partials.comments')<br>
@endsection
