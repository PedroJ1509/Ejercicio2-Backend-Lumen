<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property boolean $Articulo_SiComanda
 * @property string $Articulo_CD
 * @property integer $Articulo_Ganancia2
 * @property integer $Marca_ID
 * @property boolean $Articulo_Convertible
 * @property boolean $Articulo_SiGuarnicion
 * @property float $Articulo_CostoProm
 * @property boolean $Articulo_Inventario
 * @property string $Articulo_CostoCodigo
 * @property string $Articulo_PartNo
 * @property integer $Articulo_GananciaMinima
 * @property boolean $Articulo_Status
 * @property boolean $Articulo_SiPeso
 * @property integer $Modelo_ID
 * @property string $Articulo_ImgRuta
 * @property boolean $Articulo_SiITBIS
 * @property boolean $Articulo_SiITBISIncluido
 * @property boolean $Articulo_SiKit
 * @property boolean $Articulo_SiVencimiento
 * @property float $Articulo_Costo
 * @property string $Articulo_IdArt
 * @property string $Articulo_Desc
 * @property integer $Articulo_ID
 * @property boolean $Articulo_SiFactNegativo
 * @property integer $Departamento_ID
 * @property integer $Unidad_ID
 * @property boolean $Articulo_Fabricado
 * @property ArticuloAnalisisCostoDet[] $articuloAnalisisCostoDets
 * @property CompraDet[] $compraDets
 */
class Articulo extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Articulo';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'Articulo_ID';

    /**
     * @var array
     */
    protected $fillable = ['Articulo_SiComanda', 'Articulo_CD', 'Articulo_Ganancia2', 'Marca_ID', 'Articulo_Convertible', 'Articulo_SiGuarnicion', 'Articulo_CostoProm', 'Articulo_Inventario', 'Articulo_CostoCodigo', 'Articulo_PartNo', 'Articulo_GananciaMinima', 'Articulo_Status', 'Articulo_SiPeso', 'Modelo_ID', 'Articulo_ImgRuta', 'Articulo_SiITBIS', 'Articulo_SiITBISIncluido', 'Articulo_SiKit', 'Articulo_SiVencimiento', 'Articulo_Costo', 'Articulo_IdArt', 'Articulo_Desc', 'Articulo_SiFactNegativo', 'Departamento_ID', 'Unidad_ID', 'Articulo_Fabricado'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articuloAnalisisCostoDets()
    {
        return $this->hasMany('App\Models\ArticuloAnalisisCostoDet', 'Articulo_ID', 'Articulo_ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function compraDets()
    {
        return $this->hasMany('App\Models\CompraDet', 'Articulo_ID', 'Articulo_ID');
    }
}
