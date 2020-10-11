<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $table = 'detalle_ventas';

    protected $fillable = ['cantidad', 'tipo_precio', 'precio', 'total', 'estado', 'descripcion', 'producto_id', 'empleado_id', 'cliente_id'];


    public function producto()
    {
        return $this->belongsTo('App\Producto');
    }

    public function empleado()
    {
        return $this->belongsTo('App\Empleado');
    }

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
}
