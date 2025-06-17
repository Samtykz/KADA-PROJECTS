<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class LoginAdmin extends Authenticatable implements JWTSubject
{
    use HasFactory;

    protected $table = 'administrador'; // Asegúrate de que el nombre coincide con tu base de datos
    protected $primaryKey = 'admi_Codigo_PK';
    public $timestamps = false;
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = [
        'admi_Codigo_PK',
        'admi_nombre',
        'admi_apellido',
        'admi_telefono',
        'admi_direccion',
        'admi_correo',
        'admi_contrasena',
    ];

    // Métodos de JWTAuth
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
