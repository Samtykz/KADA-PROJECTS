<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdModelo extends Model
{
    use HasFactory;
    protected $table = 'producto';
    public $timestamps = false;
    protected $primaryKey = 'prod_Codigo_PK';
    public $incrementing = false;
    protected $keyType = 'int';

   
    protected $fillable = [
        'prod_Codigo_PK',
        'prod_Nombre',
        'prod_PrecioVenta',
        'prod_UnidadMedida',
        'prod_Stock',
        'prod_Material',
        'prod_Descripcion',
        'id_Categoria_FK',
        'documentoProveedor_FK',
    ];
}
