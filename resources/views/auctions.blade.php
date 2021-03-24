@extends('layouts.app', ['activePage' => 'auctions', 'title' => 'Explorar subastas', 'navName' => 'Explorar subastas', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            @foreach($cocheSubastaInformacion as $element)
            @if((auth()->user()->rol == 'Administrador') || (auth()->user()->rol == 'Vendedor' && $element->subasta->estat == 1) || (auth()->user()->rol == 'Comprador'))
            <div class="card" style="width: 18rem; display: inline-block;">
                <img class="card-img-top" src="/storage/{{$element->cotxe->pathImage}}" alt="Card image cap" height="170">
                <div class="card-body">
                    @if((auth()->user()->rol == 'Administrador') || (auth()->user()->rol == 'Vendedor' && $element->subasta->estat == 1) || (auth()->user()->rol == 'Comprador'))
                    <h4 class="card-title text-center"><b>{{$element->cotxe->marca}} {{$element->cotxe->nom}}</b></h4>
                    <p></p>
                    <p class="card-text">Matrícula: {{$element->cotxe->matricula}}</p>
                    <p class="card-text">Tipo de coche: {{ $element->cotxe->tipus}}</p>
                    <p class="card-text">Motor: {{$element->cotxe->motor}}</p>
                    <p class="card-text">Precio: {{$element->licitacio->preu}} €</p>
                    <p class="card-text">Disponible hasta: {{$element->subasta->dataFinalitzacio}}</p>
                    @if(auth()->user()-> rol == 'Vendedor')
                    <form method="POST" action="{{route('LowerPriceController')}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                        <input type="hidden" name="idSubasta" value="{{$element->subasta->id}}">
                        <button type="submit" class="btn btn-dark">Bajar el precio un 5%</button>
                    </form>
                    @elseif(auth()->user()-> rol == 'Comprador')
                    <form method="POST" action="{{route('bid')}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                        <input type="hidden" name="idSubasta" value="{{$element->subasta->id}}">
                        <button type="submit" class="btn btn-dark">Comprar</button>
                    </form>
                    @endif
                    @endif
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
@endsection

