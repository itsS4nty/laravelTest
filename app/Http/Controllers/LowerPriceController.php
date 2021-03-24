<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subasta;
use App\Models\Licitacio;
use App\Models\Cotxe;

class LowerPriceController extends Controller
{
    public function Index(Request $request) {

        $subastaInformacio = null;
        $licitacio = null;
        if($request->isMethod('post')){
            $id = $request->input("idSubasta");
            //Esta es una manera mas facil de hacer para buscar el rol del usuario.
            if (auth()->user()->rol == 'Vendedor' || auth()->user()->rol == 'Administrador') {

                $subastaInformacio = Subasta::select('subasta')->select('*')->where('id', '=', $id)->first();

                if ($subastaInformacio -> user_id == auth()->user()->id && auth()->user()->rol == 'Vendedor' || auth()->user()->rol == 'Administrador') {
                    
                    $licitacioInformacio = Licitacio::select('licitacio')->select('*')->where('id', '=', $subastaInformacio -> licitacio_id)->first();

                    //Creamos una array con los datos del nuevo precio
                    $updatearLicitacio = [
                        'preu' => $licitacioInformacio -> preu - (($licitacioInformacio -> preu * 5) / 100)
                    ];
        
                    //Buscamos la licitacio
                    $licitacio = Licitacio::findOrFail($licitacioInformacio -> id);
        
                    //Hacemos el update con la array antes creada
                    $licitacio->update($updatearLicitacio);
        
                    /*Llamamos a la vista y le enviamos la coleccion de objetos. Hay que enviar algo aunque la lista sea null. La manera de enviar mas de una cosa es con compacts
                    separados con comas, aqui se envian dos array de objetos normal.
                    */
                    // return view('lowerPrice', compact('licitacio'), compact('subastaInformacio'));
                    return back();

                }else {
                    return view('noEsTuSubasta');

                }
            }else {
                return view('autentificationError');

            }
        }
        

    }
}
