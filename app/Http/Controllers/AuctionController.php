<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subasta;
use App\Models\Licitacio;
use App\Models\Cotxe;


class AuctionController extends Controller
{
    //Esto es el GET
    public function Index() {

        //Hay que definir las variables que vamos a mandar aqui, aunque sean null o esten vacias, para asignar una array se hace con array()
        $cotxeInformacio = null;

        //Cogemos el valor rol del objeto dado por la consulta y hacemos un if para comprobar si el rol del usuario es venedor
        if (auth()->user()->rol == 'Vendedor' || auth()->user()->rol == 'Administrador') {
            
            //Hacemos una consulta, con get() cogemos una coleccion de objetos.
            $cotxeInformacio = Cotxe::select('cotxe')->select('*')->where('user_id', '=', auth()->user()->id)->get();
            
            /*Llamamos a la vista y le enviamos la coleccion de objetos. Hay que enviar algo aunque la lista sea null. La manera de enviar mas de una cosa es con compacts
            separados con comas. Esta vez le enviamos una lista de sus coches y el propio usuario para consultar su saldo ya que tiene que pagar 100 de deposito
            */
            return view('auction', compact('cotxeInformacio'));

        }else {
            return view('autentificationError');

        }

    }

    //Esto es el POST
    public function CreateAuction(Request $request) {

        //Comprobamos que la request que nos llega es un post
        if($request->isMethod('post')){

            //Guardamos los datos de la request en variables
            $id = $request->input("cotxeID");
            $licitacioMinima = $request->input("licitacioMinima");
            $dataFi = $request->input("dataFinalitzacio");

            //Hacemos una array con los datos de la nueva licitacion, tienen que tener el mismo nombre que en la base de datos
            $dataLicitacio = [
                'preu' => $licitacioMinima,
                'user_id' => auth()->user()->id
            ];

            //Creamos la licitacion
            $licitacioCreada = Licitacio::create($dataLicitacio);

            //Hacemos una array con los datos de la nueva subasta, tienen que tener el mismo nombre que en la base de datos
            $dataSubasta = [
                'dataFinalitzacio' => $dataFi,
                'estat' => 1,
                'user_id' => auth()->user()->id,
                'cotxe_id' => $id,
                'licitacio_id' => $licitacioCreada -> id
            ];

            //Creamos la subasta
            $tots = Subasta::create($dataSubasta);

            //Creamos una array con los datos del nuevo saldo
            $nuevoSaldo = [
                'saldo' => auth()->user()->saldo - 100
            ];

            //Buscamos el user
            $user = User::findOrFail(auth()->user()->id);

            //Hacemos el update con la array antes creada
            $user->update($nuevoSaldo);

            //Creamos una array con los datos del nuevo propietario puestos a nullo
            $propietarioCoche = [
                'user_id' => null
            ];

            //Buscamos el coche
            $cotxe = Cotxe::findOrFail($id);
            
            //Hacemos el update con la array antes creada
            $cotxe->update($propietarioCoche);

            return back();

        }else {
            return view('error');
        }
        

    }
    
}
