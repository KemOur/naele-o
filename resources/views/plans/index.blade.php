@extends('layouts.main')

@section('content')

    <div class="col-md-">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <br>
    </div>
        <h2 class="text-center">Forfaits Navigo- Electrique</h2>
    <br>
    <h5 style="text-align: center">Offres abonnements </h5>
    <div class="container">
    <div class="testimonials-clean" style="background-color: white; margin-left: 9%;">
        <div class="container">
            <div class="row people">
                @foreach($plans as $plan)
                <div class="col-md-6 col-lg-4 item">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                                <li class="list-group-item clearfix">
                                    <div class="pull-left">
                                        <h5>{{ $plan->name }}</h5>
                                        <h5>{{ number_format($plan->cost, 2) }}€ / mois</h5>
                                        <h5>{{ $plan->description }}</h5>
                                        @if(auth()->check() && auth()->user()->id)
                                        <a href="{{ route('plans.show', $plan->slug) }}" class="btn btn-outline-info">Souscrire</a>
                                        @else
                                            <span>connectez-vous pour vous abonner</span>
                                        @endif
                                    </div>
                                </li>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    </div>
@endsection
