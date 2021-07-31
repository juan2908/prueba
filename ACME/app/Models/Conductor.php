<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    use HasFactory;

    protected $table = 'conductores';
    protected $primaryKey = 'id';
    protected $fillable = [
        'numeroCedula',
        'primerNombre',
        'segundoNombre',
        'apellidos',
        'direccion',
        'telefono',
        'ciudad',

    ];

}
