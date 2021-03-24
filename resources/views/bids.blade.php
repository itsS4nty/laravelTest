@extends('layouts.app', ['activePage' => 'bids', 'title' => 'Mis pujas', 'navName' => 'Mis pujas', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            @foreach($subastasInformacio as $element)
            <div class="card" style="width: 18rem; display: inline-block;">
                <img class="card-img-top" src="/storage/{{$element->cotxe->pathImage}}" alt="Card image cap" height="170">
                <div class="card-body">
                    <h4 class="card-title text-center"><b>{{$element->cotxe->marca}} {{$element->cotxe->nom}}</b></h4>
                    <p></p>
                    <p class="card-text">Comprado por: {{$element->licitacio->preu}} €</p>
                    <p class="card-text">Disponible hasta: {{$element->subasta->dataFinalitzacio}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

