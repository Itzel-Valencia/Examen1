<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiendas extends Model
{
    use HasFactory;
    protected $table='tiendas';
    protected $fillable=[
        'nombre_tienda',
        'foto',


    ];
}
