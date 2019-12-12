<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chofer extends Model
{
    //
    protected $table = 'choferes';
    protected $primaryKey = 'Cedula';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        'Cedula',
        'NombreApellidos',
        'Telefono',
        'DireccionHab',
        'Sueldo',
    ];

    public function camion(){
        return $this->hasOne('App\Camion','Cedula','Cedula');
    }
}
