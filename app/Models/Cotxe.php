<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotxe extends Model
{
    use HasFactory;

    protected $table = "Cotxe";

    //Poner esto si da el error: Laravel Unknown Column 'updated_at'
    public $timestamps = false;

    //protected $primarykey = "matricula";

    protected $fillable = ['matricula', 'nom', 'tipus', 'motor', 'pathImage', 'marca', 'user_id'];

    //RELACION 1-N ENTRE USUARIOS Y COCHES
    public function user()
    {
        //En una relacion 1-N, eres N
        return $this->belongsTo(User::class);
    }

    //RELACION 1-N ENTRE SUBASTA Y COCHES
    public function subasta()
    {
        //En una relacion 1-N, eres 1
        return $this->hasMany(Subasta::class);
    }

}
