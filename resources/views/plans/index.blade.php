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
    <h5 style="text-align: center">Offres abonnements  </h5>
    <div class="container">
    <div class="testimonials-clean" style="background-color: white;">
        <div class="container">
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
                                    <a href="{{ route('plans.show', $plan->slug) }}" type="button" class="w-100 btn btn-lg btn-outline-primary">S'abonner</a>
                                    @else
                                        <p style="font-size: 1.5vh">connectez-vous pour vous abonner</p>
                                    @endif

                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
