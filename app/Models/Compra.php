<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $table = "compra";

    protected $fillable = [
        'users_id',
        'producto_id',
        'cantidad',
        'iva_id',
        'total',
    ];
}
