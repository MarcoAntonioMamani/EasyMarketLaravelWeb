<?php

namespace EasyMarket;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model {

    protected $table = 'producto';
    protected $primaryKey = 'idPro';
    public $timestamps = false;
    protected $fillable = ['idCat', 'cantidad', 'precio', 'descripcion', 'imgPro'];
    protected $guarded = [];

}
