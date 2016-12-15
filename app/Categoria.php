<?php

namespace MicroMercado;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    ////
    protected $table='categoria';
    protected $primaryKey='idCat';
    public $timestamps=false;
    
    protected $fillable=['nombre,descripcion'];
    protected $guarded=[];
}
