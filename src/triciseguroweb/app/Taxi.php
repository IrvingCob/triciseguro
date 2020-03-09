<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxi extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'taxi';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['marca', 'modelo', 'matricula', 'placa_id'];

    public function placa()
    {
        return $this->belongsTo('App\Models\Placa');
    }
    
}
