<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenInventario extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'ordenes_inventarios';

    protected $fillable = [
        'stock',
        'idOrden',
        'idInventario'
       
    ];
    public $timestamps = false;
}
