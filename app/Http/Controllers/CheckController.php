<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subasta;
use App\Models\Licitacio;
use App\Models\Cotxe;


class CheckController extends Controller
{

    public function Index() { 
        $subastaInformacio = null;
        $licitacio = null;
        $subastaSinTiempo = array();
    
        //Esta es una manera mas facil de hacer para buscar el rol del usuario.
        if (auth()->user()->rol == 'subhastador' || auth()->user()->rol == 'Administrador') {
    
            $subastasInformacio = Subasta::select('subasta')->select('*')->where('estat', '=', '1')->get();

            //Iteramos sobre la coleccion de objetos
            foreach($subastasInformacio as $subasta) {
                if ($subasta -> dataFinalitzacio < now()) {

                    //Creamos una array con los datos del nuevo coche
                    $cotxe = [
                        'user_id' => $subasta -> user_id
                    ];
                    //Buscamos el coche
                    $cotxeUpdate = Cotxe::findOrFail($subasta -> cotxe_id);
                    //Hacemos el update con la array antes creada
                    $cotxeUpdate->update($cotxe);

                    $licitacioInformacio = Licitacio::select('licitacio')->select('*')->where('id', '=', $subasta -> licitacio_id)->first();
                    $usuarioInfomacion = User::select('users')->select('*')->where('id', '=', $subasta->user_id)->first();

                    //Creamos una array con los datos del nuevo saldo
                    $user = [
                        'saldo' => $usuarioInfomacion -> saldo - (($licitacioInformacio -> preu * 3) / 100)
                    ];
                    //Buscamos el user
                    $userUpdate = User::findOrFail($usuarioInfomacion -> id);
                    //Hacemos el update con la array antes creada
                    $userUpdate->update($user);

                    $sub = [
                        'estat' => 0
                    ];

                    $subastaUpdate = Subasta::findOrFail($subasta -> id);

                    $subastaUpdate->update($sub);
                    
                    array_push($subastaSinTiempo, $subastaUpdate);

                }
            }

            /*Llamamos a la vista y le enviamos la coleccion de objetos. Hay que enviar algo aunque la lista sea null. En este caso le enviamos las subastas que han gastado el tiempo
            */
            return view('check', compact('subastaSinTiempo'));

        }else {
            return view('autentificationError');

        }

    }
    
}
