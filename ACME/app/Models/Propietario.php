<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    use HasFactory;

    protected $table = 'propietarios';
    protected $primaryKey = 'id';
    protected $fillable = [
        'numero_de_cedula',
        'primer_nombre',
        'segundo_nombre',
        'apellidos',
        'direcion',
        'telefono',
        'ciudad'
    ];

}
