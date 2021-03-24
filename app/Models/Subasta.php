<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subasta extends Model {
    use HasFactory;

    protected $table = "Subasta";

    //Poner esto si da el error: Laravel Unknown Column 'updated_at'
    public $timestamps = false;

    // protected $primarykey = "id";

    //En el anunciado pide el precio de la licitacion minima, ponemos la id y con eso hacemos la consulta para saber el precio
    protected $fillable = ['dataFinalitzacio', 'estat', 'user_id', 'cotxe_id', 'licitacio_id'];

    //RELACION 1-N ENTRE USUARIOS Y SUBASTA
    public function user() {
        //pertenece a user. Es la N en una relacion 1-N
        return $this->belongsTo(User::class);
    }

    //RELACION 1-N ENTRE SUBASTA Y COCHES
    public function cotxes() {
        //En una relacion 1-N, eres N
        return $this->belongsTo(Cotxe::class);
    }

    //RELACION 1-1 ENTRE LICITACIO Y SUBASTA
    public function licitacio() {
        return $this->hasOne(Licitacio::class);
    }

}
