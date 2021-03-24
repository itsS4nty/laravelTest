<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subasta;
use App\Models\Licitacio;
use App\Models\Cotxe;

class BidsController extends Controller
{

    //Esto es el GET
    public function Index() {

        //Hay que definir las variables que vamos a mandar aqui, aunque sean null o esten vacias, para asignar una array se hace con array()
        $licitacioInformacio = null;
        $subastasInformacio = array();

        //Cogemos el valor rol del objeto dado por la consulta y hacemos un if para comprobar si el rol del usuario es comprador
        if (auth()->user()->rol == 'Comprador' || auth()->user()->rol == 'Administrador') {
            
            //Hacemos una consulta, con get() cogemos un coleccion de objetos.
            $licitacioInformacio = Licitacio::select('licitacio')->select('*')->where('user_id', '=', auth()->user()->id)->get();

            //Iteramos sobre la coleccion y hacemos otra consulta con la ayuda de la consulta anterior, esta la añadimos a una array con array_push, (Es el equivalente a array.add en java)
            foreach($licitacioInformacio as $licitacioInf) {

                $miCocheSubasta = new ObjectCocheSubasta();

                $subasta = Subasta::select('subasta')->select('*')->where('licitacio_id', '=', $licitacioInf->id)->first();
                $cocheInformacio = Cotxe::select('cotxe')->select('*')->where('id', '=', $subasta -> cotxe_id)->first();

                $miCocheSubasta->licitacio = $licitacioInf;
                $miCocheSubasta->subasta = $subasta;
                $miCocheSubasta->cotxe = $cocheInformacio;

                array_push($subastasInformacio, $miCocheSubasta);

            }

            /*Llamamos a la vista y le enviamos la coleccion de objetos.*/
            return view('bids', compact('subastasInformacio'));

        }else {
            return view('autentificationError');

        }

    }
}

class ObjectCocheSubasta {

    public $subasta = null;
    public $cotxe = null;
    public $licitacio = null;
}