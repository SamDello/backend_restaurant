<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'locales';

    protected $fillable = [
        'nombre',
        'idPlato',
        'idBebida'
       
    ];
    public $timestamps = false;
}
