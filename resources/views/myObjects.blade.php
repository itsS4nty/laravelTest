@extends('layouts.app', ['activePage' => 'myObjects', 'title' => 'Mis coches', 'navName' => 'Mis coches', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
        @foreach($cotxeInformacio as $element)
        <div class="card" style="width: 18rem; display: inline-block;">
            <img class="card-img-top" src="/storage/{{$element->pathImage}}" alt="Card image cap" height="170">
            <div class="card-body">
                <h4 class="card-title text-center"><b>{{$element->marca}} {{$element->nom}}</b></h4>
                <p></p>
                <p class="card-text">Matrícula: {{$element->matricula}}</p>
                <p class="card-text">Tipo de coche: {{$element->tipus}}</p>
                <p class="card-text">Motor: {{$element->motor}}</p>
            </div>
        </div>
        @endforeach
        
        </div>
    </div>
@endsection