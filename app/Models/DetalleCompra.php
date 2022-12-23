<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'detallecompras';

    protected $fillable = [
        'cantidad',
        'precio',
        'idOrdenInventario',
        'idNotaCompra',
       
    ];
    public $timestamps = false;
}
