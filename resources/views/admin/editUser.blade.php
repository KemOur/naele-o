@extends('layouts.main')
@section('content')
<div class="container">

    <div class="col-md-6 col-lg-6 item" style="margin-left: 25%;margin-right: 25%; margin-top: 7%">
        <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
            @csrf
            @method('put')
            <x-label for="name" :value="__('Nom')" />
            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$user->name}}" required autofocus/>
            @error('name')
            {{$message}}
            @enderror
            <x-label for="email" :value="__('Email')" />
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$user->email}}" required />
            @error('email')
            {{$message}}
            @enderror
            <x-label for@="password"  />
            <x-input id="password" class="block mt-1 w-full"
                     type="password"
                     value="{{$user->password}}"
                     name="password"
                     required autocomplete="new-password" />
            @error('password')
            {{$message}}
            @enderror

            <div class="mt-4">
                <x-label for="password_confirmation" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                         type="password"
                         value="{{$user->password}}"
                         name="password_confirmation" required />
            </div>

            <br>
            <button class="btn-info" style="color: white; width: 100%" type="submit">Modifier</button>
        </form>
    </div>
</div>
@endsection
