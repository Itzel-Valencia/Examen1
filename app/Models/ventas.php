<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table='ventas';
    protected $fillable=[
        'producto',
        'tienda',
        'vendedor',
        'precio',
        'cantidad',
        'total',
    ];
}
