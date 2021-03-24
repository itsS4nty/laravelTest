<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subasta;
use App\Models\Licitacio;
use App\Models\Cotxe;

class BidIdController extends Controller
{
    public function Index(Request $request) {

        $subasta = null;
        $cotxe = null;
        $id = $request->input("idSubasta");

        //Esta es una manera mas facil de hacer para buscar el rol del usuario.
        if (auth()->user()->rol == 'Comprador' || auth()->user()->rol == 'Administrador') {

            $subastaInformacio = Subasta::select('subasta')->select('*')->where('id', '=', $id)->first();
            $licitacioInformacio = Licitacio::select('licitacio')->select('*')->where('id', '=', $subastaInformacio -> licitacio_id)->first();

            if (auth()->user()->saldo >= $licitacioInformacio -> preu) {
             
            //UPDATE USUARIOS
            //Creamos una array con los datos del nuevo saldo
            $nuevoSaldo = [
                'saldo' => auth()->user()->saldo - $licitacioInformacio -> preu
            ];
            //Buscamos el user
            $user = User::findOrFail(auth()->user()->id);
            //Hacemos el update con la array antes creada
            $user->update($nuevoSaldo);

            $userInformacio = User::select('users')->select('*')->where('id', '=', $subastaInformacio -> user_id)->first();

            $nuevoSaldoVenedor = [
                'saldo' =>  $userInformacio -> saldo + ($licitacioInformacio -> preu - ((($licitacioInformacio -> preu * 3) / 100))+ 100)
            ];

            $userVenedor = User::findOrFail($userInformacio -> id);

            $userVenedor->update($nuevoSaldoVenedor);


            //UPDATE COCHE
            //Creamos una array con los datos del nuevo propietario
            $propietarioCoche = [
                'user_id' => auth()->user()->id
            ];
            //Buscamos el coche
            $cotxe = Cotxe::findOrFail($subastaInformacio -> cotxe_id); 
            //Hacemos el update con la array antes creada
            $cotxe->update($propietarioCoche);

            
            //CREATE LICITACIO
            //Hacemos una array con los datos de la nueva licitacion, tienen que tener el mismo nombre que en la base de datos
            $dataLicitacio = [
                'preu' => $licitacioInformacio -> preu,
                'user_id' => auth()->user()->id
            ];
            //Creamos la licitacion
            $licitacioCreada = Licitacio::create($dataLicitacio);

            
            //UPDATE SUBASTA
            //Creamos una array con los datos de la nueva subasta, para ponerla en estado igual a 0 y la licitacion
            $updatearSubasta = [
                'estat' => 0,
                'licitacio_id' => $licitacioCreada -> id
            ];

            //Buscamos la subasta
            $subasta = Subasta::findOrFail($subastaInformacio -> id);

            //Hacemos el update con la array antes creada
            $subasta->update($updatearSubasta);

            /*Llamamos a la vista y le enviamos la coleccion de objetos. Hay que enviar algo aunque la lista sea null. La manera de enviar mas de una cosa es con compacts
            separados con comas, aqui se envian dos array de objetos normal.
            */
            return back();

            }else {
                return view('saldoInsuficiente');
            }

        }else {
            return view('autentificationError');

        }
    }
}
