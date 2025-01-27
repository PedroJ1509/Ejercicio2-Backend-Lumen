<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $Modelo_Desc
 * @property integer $Modelo_ID
 * @property integer $Marca_ID
 * @property MarcaModArt[] $marcaModArts
 */
class Modelo extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Modelo';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'Modelo_ID';

    /**
     * @var array
     */
    protected $fillable = ['Modelo_Desc', 'Marca_ID'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function marcaModArts()
    {
        return $this->hasMany('App\Models\MarcaModArt', 'Modelo_ID', 'Modelo_ID');
    }
}
