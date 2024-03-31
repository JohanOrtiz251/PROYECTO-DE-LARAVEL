<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recolectas extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'fecha',
        'empleado',
        'tipo',
        'cantidad',
        'lote',
        'observacion',
    ];
}
