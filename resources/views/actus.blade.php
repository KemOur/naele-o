@extends('layouts.main')
@section('content')
<h2 class="text-center">Actualités</h2>
<div class="container">
<form class="d-flex" action="{{ route('route.search') }}" method="GET">
    <input type="text"
           class="form-control"
           name="search"
           placeholder="actualités..."
           aria-label="Search"
           required
    />
    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
    </button>
</form>
</div>
<br>
<h5 style="text-align: center; font-size: 2vh">Chaque semaine, des sorties et des contenus qui vous accompagnent dans vos trajets.</h5>
<br>
<br>
<br>
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
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
                        <a href="">Lire la suite</a>
                        <p class="float-center" style="text-align: right">20/20/2021</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@include('partials.comments')<br>
@endsection
