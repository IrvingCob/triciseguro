<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxistum extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'taxistas';

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
    protected $fillable = ['nombre', 'persona_id', 'quejas', 'ruta', 'mototaxi'];

    public function persona()
    {
        return $this->HasOne('App\Models\Persona');
    }
    
}
