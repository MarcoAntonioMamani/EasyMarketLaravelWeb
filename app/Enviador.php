<?php

namespace MicroMercado;

use Illuminate\Database\Eloquent\Model;

class Enviador extends Model
{
    protected $table='enviador';

    protected $primaryKey='idEnviador';

    public $timestamps=false;

    protected $fillable=[
    'nombre',
    'direccion',
    'fechaNacimiento',
    'imgEnv',
    'correo',
    'contrasena'
    ];

    protected $guarded=[
    ];



}
