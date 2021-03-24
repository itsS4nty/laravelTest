<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subasta;
use App\Models\Licitacio;
use App\Models\Cotxe;

class AuctionsController extends Controller
{
    //Esto es el GET
    public function index()
    {

        $subastasInformacio = null;
        $cocheSubastaInformacion = array();

        //Cogemos el valor rol del objeto dado por la consulta y hacemos un if para comprobar si el rol del usuario es venedor
        if (auth()->user()->rol == 'Vendedor') {
            
            //Hacemos una consulta, con get() cogemos un coleccion de objetos.
            $subastasInformacio = Subasta::select('subasta')->select('*')->where('user_id', '=', auth()->user()->id)->get();

            //Iteramos sobre la coleccion y hacemos otra consulta con la ayuda de la consulta anterior, esta la añadimos a una array con array_push, (Es el equivalente a array.add en java)
            foreach($subastasInformacio as $subasta) {

                $miCocheSubasta = new ObjectCocheSubasta();
                $cocheInformacio = Cotxe::select('cotxe')->select('*')->where('id', '=', $subasta -> cotxe_id)->first();
                $licitacioInformacio = Licitacio::select('licitacio')->select('*')->where('id', '=', $subasta -> licitacio_id)->first();
                $miCocheSubasta->licitacio = $licitacioInformacio;

                $miCocheSubasta->subasta = $subasta;
                $miCocheSubasta->cotxe = $cocheInformacio;

                array_push($cocheSubastaInformacion, $miCocheSubasta);
            }

            //Llamamos a la vista y le enviamos la coleccion de objetos. Hay que enviar algo aunque la lista sea null.
            return view('auctions', compact('cocheSubastaInformacion'));

        }else if (auth()->user()->rol == 'Comprador' || auth()->user()->rol == 'Administrador') {
             
            $subastasInformacio = Subasta::select('subasta')->select('*')->where('estat', '=', 1)->get();

            foreach($subastasInformacio as $subasta) {

                $miCocheSubasta = new ObjectCocheSubasta();
                $cocheInformacio = Cotxe::select('cotxe')->select('*')->where('id', '=', $subasta -> cotxe_id)->first();
                $licitacioInformacio = Licitacio::select('licitacio')->select('*')->where('id', '=', $subasta -> licitacio_id)->first();
                $miCocheSubasta->licitacio = $licitacioInformacio;

                $miCocheSubasta->subasta = $subasta;
                $miCocheSubasta->cotxe = $cocheInformacio;

                array_push($cocheSubastaInformacion, $miCocheSubasta);
            }

            return view('auctions', compact('cocheSubastaInformacion'));

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