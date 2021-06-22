@extends('layouts.main')
@section('content')
<br>
<br>
<br>

<div class="p-5 mb-4 bg-light rounded-3" style="margin-left: 25%;margin-right: 25%">
    <h5 class="text-center">Contactez-nous</h5>
    <br>
    @if (session('status'))
        <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-100">
            <p style="font-size: 20px;background-color: white;color: #0CBFA4">{{ session('status') }}</p>
        </div>
    @endif

    @if ($errors->any())

        <ul>
            @foreach ($errors->all() as $error)
                <li style="background-color: white; color: red">{{ $error }}</li><br>
            @endforeach
        </ul>
    @endif
    <div class="container-fluid py-5">
        <form
            method="post"
            action="{{ route('contact') }}">
            @csrf

            <div class="mb-3">
                <label for="username" class="form-label">Nom :</label>
                <input type="text" class="form-control" id="firstname" name="firstname" value="{{old('firstname')}}">
            </div>

            <div class="mb-3">
                <label for="surname" class="form-label">Prénom :</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value="{{old('lastname')}}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Adresse email :</label><br>
                <input class="form-control" type="email" id="email" name="email" value="{{old('email')}}"style="width: 100%">
                <br>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Objet :</label><br>
                <input class="form-control" id="subject" value="{{old('subject')}}"  name="subject" type="text"style="width: 100%">
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="message" name="message" value="{{old('message')}}">
                <label for="floatingTextarea2">Message...</label>
            </div>
                <br>
            <button type="submit" class="btn btn-dark">Envoyer</button>
                <br>
        </form>
    </div>
</div>
<br>

<div class="container">


    <style type="text/css">
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px;
            /* The height is 400 pixels */
            width: 100%;
            /* The width is the width of the web page */
        }
    </style>
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            const paris = { lat:48.874157982449816, lng:2.3583602463035205};
            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 17,
                center: paris,
            });
            // The marker, positioned at Uluru
            const marker = new google.maps.Marker({
                position: paris,
                map: map,
            });
        }
    </script>
    </head>
    </body>
    <!--The div element for the map -->
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcc7cx3frxUsJ-nokSOeHU046xGbS9Bwg&callback=initMap&libraries=&v=weekly"
        async
    >
    </script>
    <br>
    <br>
<ul>
    <li> Téléphone : 01 42 41 97 76</li>
    <li>Email : ews@gmailwebstart.com</li>
    <li>Adresse : 19 Rue Yves Toudic, 75010 Paris</li>
</ul>
</div>
@endsection
