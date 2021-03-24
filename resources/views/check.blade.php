
@extends('layouts.app', ['activePage' => 'auctions', 'title' => 'Explorar subastas', 'navName' => 'Explorar subastas', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
        @foreach($subastaSinTiempo as $element)
            <li>Subasta sin tiempo: {{$element}}</li>
        @endforeach
        </div>
    </div>
@endsection
