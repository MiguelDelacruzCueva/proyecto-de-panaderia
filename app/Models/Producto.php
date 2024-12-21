<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'categoria',
        'precio',
        'descripcion',
        'imagen',
        'disponibilidad',
    ];

    public function carritos()
    {
        return $this->hasMany(Carrito::class, 'producto_id');
    }
}