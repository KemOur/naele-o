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
        <h6 class="border-bottom pb-2 mb-0">Liste des utilisateurs</h6>
        <div class="d-flex justify-content-between" style="text-align: right">
            <a href="users/create">Ajouter</a>
        </div>
        <hr>

        @if($users->isNotEmpty())
        @foreach ($users as $user)
        <div class="d-flex text-muted pt-3">
            <div>#</div>
            <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                <div class="d-flex justify-content-between">
                    <strong class="text-gray-dark"><small>Name</small> :{{ $user->name }}</strong>
                    <div style="text-align: right">
                        <a href="{{route('admin.users.editUser', $user->id )}}">Modifier</a>

                        <form action="{{route('admin.users.destroy', $user->id)}}" method="DELETE">
                            @csrf
                            @method('delete')
                            <button onclick="return confirm('Vous êtes sûr ?')" type="submit">Suprimer</button>
                        </form>
                    </div>
                </div>
                <span class="d-block"><small>Email</small> : {{ $user->email }}</span>
            </div>
        </div>
        @endforeach
        @else
            <li>There is no user in database</li>
        @endif
    </div>
    </div>
@endsection
