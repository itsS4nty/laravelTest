<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subasta;
use App\Models\Licitacio;
use App\Models\Cotxe;

class MyObjectsNewObjectController extends Controller
{
    //Esto es el GET
    public function Index() {

        if (auth()->user()->rol == 'Vendedor' || auth()->user()->rol == 'Administrador') {

            return view('myObjectsNewObject');

        }
        return view('autentificationError');
    }

    //Esto es el POST
    public function CreateObject(Request $request) {

        //Comprobamos que la request que nos llega es un post
        if($request->isMethod('post')){
            $image = $request->file('path');
            $image->storeAs('public', time().'.'.$image->getClientOriginalExtension());
            //Hacemos una array con los datos de la nueva licitacion, tienen que tener el mismo nombre que en la base de datos
            $dataCotxe = [
                'pathImage' => time() . '.' . $image->getClientOriginalExtension(),
                'matricula' => $request->input("matricula"),
                'nom' => $request->input("nom"),
                'tipus' => $request->input("tipus"),
                'motor' => $request->input("motor"),
                'marca' => $request->input("marca"),
                'user_id' => auth()->user()->id
            ];

            //Creamos el coche
            $cotxeCreado = Cotxe::create($dataCotxe);
            // Volvemos a la vista de coches
            return back();
        }else {
            return view('error');
        }

    }
}
