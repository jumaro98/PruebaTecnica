<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    use HasFactory;

    // Agregar 'name' al array fillable
    protected $fillable = [
        'name', 
        'category',
        'image_url',
        'instructions',
         // Atributo 'name' ahora es asignable masivamente
        // Otros atributos que quieras permitir asignar masivamente
    ];
}
