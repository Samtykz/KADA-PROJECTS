<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imgModelo extends Model
{
    use HasFactory;
    protected $table = 'imagenes';
    public $timestamps = false;
    protected $primaryKey = 'codigoImagenes';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'codigoImagenes',
        'prod_Codigo',
        'imagen',
    ];
}
