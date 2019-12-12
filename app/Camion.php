<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    //
    protected $table = 'camiones';
    protected $primaryKey = 'idCamion';
    public $timestamps = false;
    protected $fillable = [
        'idCamion',
        'Matricula',
        'Modelo',
        'Cedula',
    ];

    public function chofer(){
        return $this->belongsTo('App\Chofer','Cedula','Cedula');
    }
}
