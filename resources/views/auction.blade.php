@extends('layouts.app', ['activePage' => 'auction', 'title' => 'Mis subastas', 'navName' => 'Mis subastas', 'activeButton' => 'laravel'])

@section('content')
<div class="content">
        <div class="container-fluid">
        @foreach($cotxeInformacio as $element)
        <div class="card" style="width: 18rem; display: inline-block;">
            <img class="card-img-top" src="/storage/{{$element->pathImage}}" alt="Card image cap" height="170">
            <div class="card-body">
                <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"></input> -->
                <h4 class="card-title text-center"><b>{{$element->marca}} {{$element->nom}}</b></h4>
                <p></p>
                <p class="card-text">Matrícula: {{$element->matricula}}</p>
                <p class="card-text">Tipo de coche: {{$element->tipus}}</p>
                <p class="card-text">Motor: {{$element->motor}}</p>
                <a href="#" class="btn btn-dark" data-toggle="modal" data-target=".{{$element->id}}">Subastarlo</a>
            </div>
        </div>
        <div class="modal fade {{$element->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Subastar {{$element->marca}} {{$element->nom}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{route('auction')}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                            <input type="hidden" name="cotxeID" value="{{$element->id}}">
                            <div class="form-group">
                                <input class="form-control" name="matricula" value="{{$element->matricula}}" disabled></input>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="tipus" value="{{$element->tipus}}" disabled></input>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="motor" value="{{$element->motor}}" disabled></input>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="licitacioMinima" placeholder="Puja mínima" required></input>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" name="dataFinalitzacio" required></input>
                            </div>
                            @if(auth()->user()->saldo >= 100)
                            <button type="submit" class="btn btn-primary">Añadir coche</button>
                            @else
                            <span class="text-danger">Necesitas tener mínimo 100€ para poder poner un coche en subasta</span>
                            <button type="submit" class="btn btn-primary" disabled>Añadir coche</button>
                            @endif
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <style>
            .float{
                position:fixed;
                width:60px;
                height:60px;
                bottom:100px;
                right:100px;
                background-color:#BBB;
                color:#FFF;
                border-radius:50px;
                text-align:center;
                box-shadow: 2px 2px 3px #999;
                transition: 0.3s all ease-in-out;
                border: 1px solid white;
            }
            .my-float{
                margin-top:22px;
            }
            .float:hover {
                background-color: white;
                color: #BBB;
                border: 1px solid #BBB;
            }
        </style>
        <a href="#" class="float" data-toggle="modal" data-target=".addCar">
            <i class="fa fa-plus my-float"></i>
        </a>
        <div class="modal fade addCar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Nuevo coche</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{route('newObject')}} " enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                            <div class="form-group">
                                <input class="form-control" name="marca" placeholder="Marca" required></input>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="nom" placeholder="Modelo" required></input>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="matricula" placeholder="Matricula" required></input>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="tipus" required>
                                    <option>Deportivo</option>
                                    <option>SUV</option>
                                    <option>Turismo</option>
                                    <option>Monovolumen</option>
                                    <option>Todoterreno</option>
                                    <option>Furgoneta</option>
                                    <option>Camioneta</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="motor">
                                    <option>Eléctrico</option>
                                    <option>Gasolina</option>
                                    <option>Diésel</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control-file" name="path" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Añadir coche</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
