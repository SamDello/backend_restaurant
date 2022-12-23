<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'inventarios';

    protected $fillable = [
        'sigla',
       
    ];
    public $timestamps = false;
}
