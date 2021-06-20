@extends('layouts.main')
@section('content')<br>
<br>
<br>
<h2 class="text-center">Administrateur</h2>
<p class="text-center">Gestion - Actualités</p>

<div class="container">
        <div class="col-md-6 col-lg-6 item" style="margin-left: 25%;margin-right: 25%; margin-top: 7%">
            <form method="POST" action="{{ route('admin.actus.store') }}" enctype="multipart/form-data">
                @csrf

                <x-label for="title" :value="__('Title')" />
                <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus/>
                <br>
                @error('title')
                {{$message}}
                @enderror
                <x-label for="resume" :value="__('Résumé de lactu')" />
                <x-input id="resume" class="block mt-1 w-full" type="text" name="resume" :value="old('resume')" required autofocus/>
                <br>
                @error('resume')
                {{$message}}
                @enderror

                <div class="mb-3">
                    <label for="formFile" class="form-label">Image</label>
                    <input
                        class="form-control"
                        name="image"
                        type="file"
                        id="formFile">
                </div>
                @error('image')
                {{$message}}
                @enderror
                <div class="form-floating">
                    <x-label for="actu" :value="__('Actualités :')" />
                    <x-input
                        style="height: 100px"
                        id="content"
                        class="block mt-1 w-full"
                        type="text" name="content"
                        :value="old('content')" required autofocus/>
                    <br>
                </div>
                @error('actu')
                {{$message}}
                @enderror
                <br>
                <label>Publier ?</label>
                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="true" aria-label="...">
                <button class="btn-info" style="color: white; width: 100%" type="submit">Ajouter</button>
            </form>
        </div>
</div>
@endsection
