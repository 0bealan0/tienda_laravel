<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $table='producto';

    protected $keyType='string';
    protected $primaryKey='cod';
    public $incrementing=false;

    public $timestamps=false;

    public $fillable=[
        'cod',
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'imagen',
        'categoria',
        'marca',
        'estado',
        'fecha_alta',
        'fecha_baja',
    

    ];

    function prueba (){
        $producto=[ 'cod',
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'imagen',
        'categoria',
        'marca',
        'estado',
        'fecha_alta',
        'fecha_baja',
    ];
    $p=new Productos();
    $p->save();
    }
    
}
