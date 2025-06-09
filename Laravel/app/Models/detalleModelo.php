<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalleModelo extends Model
{
    use HasFactory;
    protected $table = 'detallepedido';
    public $timestamps = false;
    protected $primaryKey = '';
    public $incrementing = false;
    protected $keyType = 'int';

   
    protected $fillable = [
        'cantidadProductoPedido',
        'precioUnidadProducto',
        'subtotalPedidoProducto',
        'id_Pedido_FK',
        'prod_Codigo_FK',
        'metodoPago',
    ];
}
