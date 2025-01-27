<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $Usuario_ID
 * @property integer $Autoridad_ID
 * @property boolean $Usuario_SiFacCliSob
 * @property integer $Almacen_ID
 * @property boolean $Usuario_SiReAbrirFactura
 * @property boolean $Usuario_SiAnularFactura
 * @property boolean $Usuario_SiCajero
 * @property boolean $Usuario_SiImpuesto
 * @property boolean $Activo
 * @property boolean $Usuario_SiPreFactura
 * @property boolean $Usuario_SiModCredCliente
 * @property boolean $Usuario_SiFacFacVen
 * @property integer $Usuario_NoCopiaFac
 * @property string $Usuario_Pass
 * @property boolean $Usuario_SiBorrarFactura
 * @property string $Usuario_Nombre
 * @property boolean $Usuario_SiReAbrirCompra
 * @property string $Usuario_DescID
 * @property Autoridad $autoridad
 * @property PrepagoDet[] $prepagoDets
 * @property Factura[] $facturas
 * @property CierreCaja[] $cierreCajas
 * @property Cuotum[] $cuotas
 * @property UsuarioComputadora[] $usuarioComputadoras
 * @property AjustInventario[] $ajustInventarios
 * @property Efectivo[] $efectivos
 * @property Conversion[] $conversions
 */
class Usuario extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Usuario';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'Usuario_ID';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['Autoridad_ID', 'Usuario_SiFacCliSob', 'Almacen_ID', 'Usuario_SiReAbrirFactura', 'Usuario_SiAnularFactura', 'Usuario_SiCajero', 'Usuario_SiImpuesto', 'Activo', 'Usuario_SiPreFactura', 'Usuario_SiModCredCliente', 'Usuario_SiFacFacVen', 'Usuario_NoCopiaFac', 'Usuario_Pass', 'Usuario_SiBorrarFactura', 'Usuario_Nombre', 'Usuario_SiReAbrirCompra', 'Usuario_DescID'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function autoridad()
    {
        return $this->belongsTo('App\Models\Autoridad', 'Autoridad_ID', 'Autoridad_ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prepagoDets()
    {
        return $this->hasMany('App\Models\PrepagoDet', 'Usuario_ID', 'Usuario_ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facturas()
    {
        return $this->hasMany('App\Models\Factura', 'Usuario_ID', 'Usuario_ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cierreCajas()
    {
        return $this->hasMany('App\Models\CierreCaja', 'Usuario_ID', 'Usuario_ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cuotas()
    {
        return $this->hasMany('App\Models\Cuotum', 'Usuario_ID', 'Usuario_ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarioComputadoras()
    {
        return $this->hasMany('App\Models\UsuarioComputadora', 'Usuario_ID', 'Usuario_ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ajustInventarios()
    {
        return $this->hasMany('App\Models\AjustInventario', 'Usuario_ID', 'Usuario_ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function efectivos()
    {
        return $this->hasMany('App\Models\Efectivo', 'Usuario_ID', 'Usuario_ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function conversions()
    {
        return $this->hasMany('App\Models\Conversion', 'Usuario_ID', 'Usuario_ID');
    }
}
