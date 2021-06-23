@extends('layouts.main')
@section('content')

<div class="testimonials-clean">
    <div class="container">
                <div>
                    <ul><br>
                        @if (auth()->check() && auth()->user()->id)
                            <li> Nom d'utilisateur: {{auth()->user()->name}}</li>
                            <li> Email d'utilisateur: {{auth()->user()->email}}</li>
                            <br>
                            <div class="mt-3 space-y-1">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        {{ __('Déconnexion') }}
                                    </x-responsive-nav-link>
                                </form>
                            </div>
                            <br>

                            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">

                            @foreach($plans as $plan)
                                    <div class="col">
                                        <div class="card mb-4 rounded-3 shadow-sm">
                                            <div class="card-header py-3">
                                                <h4 class="my-0 fw-normal">{{ $plan->name }}</h4>
                                            </div>
                                            <div class="card-body">
                                                <h1 class="card-title pricing-card-title">{{ number_format($plan->cost, 2) }}€ <small class="text-muted fw-light">/mois</small></h1>
                                                <ul class="list-unstyled mt-3 mb-4">
                                                    <li>{{ $plan->description }}</li>
                                                </ul>
                                                @if(auth()->check() && auth()->user()->id)
                                                    <a href="" type="button" class="w-100 btn btn-lg btn-outline-danger">Se désabonner</a><br><br>
                                                    <a href="" type="button" class="w-100 btn btn-lg btn-outline-info">Mettre en pause</a>
                                                @else
                                                    <p style="font-size: 1.5vh">connectez-vous pour vous abonner</p>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                        @endif
                            </div>
                    </ul>
                </p>
            </div>
          </div>
        </div>
    <br>
    <br>
@endsection
