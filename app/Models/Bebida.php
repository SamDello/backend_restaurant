<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bebida extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'bebidas';

    protected $fillable = [
        'nombre',
       
    ];
    public $timestamps = false;
}
