@extends('layouts.main')

@section('content')
    <div class="container">
        <br>
        <br>
        <h4 style="text-align: center"> Je peut créer une nouvelle offre abonnement</h4>
        <br>
        <br>
        <div class="card" style="width:24rem;margin:auto;">
            <div class="card-body">
                <form action="{{route('admin.store.plan')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="plan name">Nom de l'abonnement:</label>
                        <input type="text" class="form-control" name="name" placeholder="NE-Étudiant">
                    </div>
                    <div class="form-group">
                        <label for="cost">Prix:</label>
                        <input type="text" class="form-control" name="cost" placeholder="20">
                    </div>
                    <div class="form-group">
                        <label for="cost">Description de l'offre:</label>
                        <input type="text" class="form-control" name="description" placeholder="Offre pour des étudiants...">
                    </div>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
