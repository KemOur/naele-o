@extends('layouts.main')
@section('content')
    <div class="container">

        <div class="col-md-6 col-lg-6 item" style="margin-left: 25%;margin-right: 25%; margin-top: 7%">
            <form method="POST" action="{{ route('admin.actus.update', $actu->id) }}"  enctype="multipart/form-data">
                @csrf
                @method('put')
                <x-label for="title" :value="__('Title')" />
                <x-input
                    id="title"
                    class="block mt-1 w-full"
                    type="text"
                    name="title"
                    value="{{$actu->title}}"
                    required autofocus/>
                @error('title')
                {{$message}}
                @enderror
                <br>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Image</label>
                    <input
                        class="form-control"
                        name="image"
                        type="file"
                        value="{{$actu->image}}"
                        id="formFile">
                        {{$actu->image}}
                    <img src="{{asset('imgs/' . $actu->image)}}" class="card-img-top" alt="..." style="height: 50px;width: 50px">
                </div>
                @error('image')
                <small  style="color: red">{{$message}}</small>
                @enderror


                <div class="form-floating">
                    <x-label for="actu" :value="__('Actualités :')" />
                    <x-input
                        style="height: 100px"
                        id="content"
                        class="block mt-1 w-full"
                        type="text"
                        name="content"
                        value="{{$actu->content}}"
                        required autofocus/>
                    <br>
                    @error('content')
                    {{$message}}
                    @enderror
                </div>
                <br>
                <label>Publier ?</label>
                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="true" aria-label="...">
                <button class="btn-info" style="color: white; width: 100%" type="submit">Modifier</button>
            </form>


        </div>
    </div>
@endsection
