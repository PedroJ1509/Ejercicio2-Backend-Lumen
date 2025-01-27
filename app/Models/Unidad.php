<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $Unidad_Desc
 * @property integer $Unidad_ID
 * @property ArticuloAnalisisCostoDet[] $articuloAnalisisCostoDets
 */
class Unidad extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Unidad';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'Unidad_ID';

    /**
     * @var array
     */
    protected $fillable = ['Unidad_Desc'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articuloAnalisisCostoDets()
    {
        return $this->hasMany('App\Models\ArticuloAnalisisCostoDet', 'Unidad_ID', 'Unidad_ID');
    }
}
