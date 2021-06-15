@extends('layouts.main')
@section('content')
<div class="container">
    <br>
    @if(session('success'))
        <ul>
            <li style="background-color: mediumseagreen; color: white; text-align: center"><small>{{ session('success') }}</small></li>
        </ul>
    @endif
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-0">Liste des actualités</h6>
        <div class="d-flex justify-content-between" style="text-align: right"> <a href="actus/create">Ajouter</a> </div><hr>

        @foreach ($actus as $actu)
            <div class="d-flex text-muted pt-3">
                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                    <div class="d-flex justify-content-between">
                        <ul>
                            <li><strong class="text-gray-dark">{{ $actu->title }}</strong> </li><br>
                            <li><strong class="text-gray-dark">{{ $actu->content }}</strong> </li>
                        </ul>
                                <img src="{{asset('imgs/' . $actu->image)}}" class="card-img-top" alt="..." style="height: 50px;width: 50px">

                        <div style="text-align: right">
                            <a href="{{route('admin.actus.edit', $actu->id )}}">Modifier</a>
                            <br>
                            <br>
                            <form action="{{route('admin.actus.destroy', $actu->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('Êtes vous sûr de vouloir supprimer cet élement ?')" type="submit">Suprimer</button>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
