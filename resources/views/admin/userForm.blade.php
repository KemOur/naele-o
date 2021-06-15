@extends('layouts.main')
@section('content')
<div class="container">
    <br>
    <br>
    <h2 class="text-center">Administrateur</h2>
    <p class="text-center">Gestion - Utilisateurs</p>

    <div class="col-md-6 col-lg-6 item" style="margin-left: 25%;margin-right: 25%; margin-top: 7%">
        <form method="POST" action="{{ route('admin.users.store') }}">
            @csrf

            <x-label for="name" :value="__('Nom')" />
            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus/>
            @error('name')
            {{$message}}
            @enderror
            <x-label for="email" :value="__('Email')" />
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            @error('email')
            {{$message}}
            @enderror
            <x-label for@="password" :value="__('Mot passe')" />
            <x-input id="password" class="block mt-1 w-full"
                     type="password"
                     name="password"
                     required autocomplete="new-password" />
            @error('password')
            {{$message}}
            @enderror

            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmer mot passe')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                         type="password"
                         name="password_confirmation" required />
            </div>
            <br>
            <br>
            <label>Admin ?</label>
            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="true" aria-label="...">
            <button class="btn-info" style="color: white; width: 100%" type="submit">Ajouter</button>
        </form>
    </div>
</div>
@endsection
