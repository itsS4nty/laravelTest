<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'rol',
        'saldo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //RELACION 1-N ENTRE USUARIOS Y SUBASTA
    public function subasta()
    {
        //En una relacion 1-N, eres 1
        return $this->hasMany(Subasta::class);
    }

    //RELACION 1-N ENTRE USUARIOS Y COCHES
    public function cotxe()
    {
        //En una relacion 1-N, eres 1
        return $this->hasMany(Cotxe::class);
    }

    //RELACION 1-N ENTRE USUARIOS Y LICITACIO
    public function licitacio()
    {
        //En una relacion 1-N, eres 1
        return $this->hasMany(Licitacio::class);
    }
}
