<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotaCompra extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'notacompra';

    protected $fillable = [
        'fecha',
        'montoTotal',
        'idProveedor',
        'idUser',
       
    ];
    public $timestamps = false;
}
