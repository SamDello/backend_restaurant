<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'ubicacion';
        
    protected $fillable = [
        'latitud',
        'longitud',
        'referencia',
        'url',
       
    ];
    public $timestamps = false;

}
