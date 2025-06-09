<?php

namespace App\Models;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model implements JWTSubject
{
    use HasFactory;
    protected $table='cliente';
    public $timestamps=false;
    protected $primaryKey = 'clie_Documento_PK';
    public $incrementing = false;
    protected $keyType = 'int';
    protected $fillable = [
        'clie_Documento_PK',
        'clie_nombre',
        'clie_apellido',
        'clie_Telefono',
        'clie_Telefono2',
        'clie_direccion',
        'clie_correo',
        'id_TipoDocumento_FK',
        'contrasena',
    ];

    public function getJWTIdentifier(){
        return $this-> getKey();
    }
    public function getJWTCustomClaims(){
        return[];
    }
}
