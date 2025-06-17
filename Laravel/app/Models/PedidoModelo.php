<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoModelo extends Model
{
    use HasFactory;
    protected $table = 'pedido';
    public $timestamps = false;
    protected $primaryKey = 'id_Pedido_PK';
    public $incrementing = True;
    protected $keyType = 'int';

    protected $fillable = [
        'id_Pedido_PK',
        'fechaPedido',
        'horaPedido',
        'clie_Documento_FK'
    ];
}
