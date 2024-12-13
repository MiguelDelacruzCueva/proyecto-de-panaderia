<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usuario extends Authenticatable
{

    protected $fillable = [
        'nombre', 'email', 'password', 'es_admin', 'tipo', 'nombre_tienda', 'ruc',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'es_admin' => 'boolean',
    ];

    public function esTienda()
    {
        return $this->tipo === 'tienda';
    }
}

