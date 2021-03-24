<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licitacio extends Model
{
    use HasFactory;

    protected $table = "Licitacio";

    //Poner esto si da el error: Laravel Unknown Column 'updated_at'
    public $timestamps = false;

    // protected $primarykey = "IdLicitacio";

    protected $fillable = ['preu', 'data', 'user_id'];

    //RELACION 1-N ENTRE USUARIOS Y LICITACIO
    public function user()
    {
        //En una relacion 1-N, eres N
        return $this->belongsTo(User::class);
    }

}
