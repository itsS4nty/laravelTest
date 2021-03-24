<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subasta;
use App\Models\Licitacio;
use App\Models\Cotxe;

class MyObjectsController extends Controller
{
    public function Index() { 
        $subastaInformacio = null;
        $licitacio = null;
        $cotxeInformacio = null;
    
        //Esta es una manera mas facil de hacer para buscar el rol del usuario.
        if (auth()->user()->rol == 'Comprador') {
    
            //Hacemos una consulta, con get() cogemos un coleccion de objetos.
            $cotxeInformacio = Cotxe::select('cotxe')->select('*')->where('user_id', '=', auth()->user()->id)->get();

        }elseif (auth()->user()->rol == 'Vendedor' || auth()->user()->rol == 'Administrador') {

            $cotxeInformacio = Cotxe::select('cotxe')->select('*')->get();

        }
        
        /*Llamamos a la vista y le enviamos la coleccion de objetos. Hay que enviar algo aunque la lista sea null.
        */
        return view('myObjects', compact('cotxeInformacio'));
    }
}
