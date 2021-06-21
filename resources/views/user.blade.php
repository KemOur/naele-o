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

                            @foreach($plans as $plan)
                                <div class="">
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-body">
                                            <li class="list-group-item clearfix">
                                                <div class="pull-left">
                                                    <small>{{ $plan->name }}</small><br>
                                                    <small>{{ number_format($plan->cost, 2) }}€ / mois</small><br>
                                                    <small>{{ $plan->description }}</small><br>
                                                        <a href="" class="btn btn-outline-danger">Annuler</a>
                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </ul>
                </p>
            </div>
          </div>
        </div>
    <br>
    <br>
@endsection
