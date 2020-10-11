<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    protected $table = 'detalle_compras';

    protected $fillable = ['cantidad', 'tipo_precio', 'precio', 'total', 'estado', 'descripcion','proveedor_id', 'producto_id'];


    public function proveedor()
    {
        return $this->belongsTo('App\Proveedor');
    }
    public function producto()
    {
        return $this->belongsTo('App\Producto');
    }

}
