<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $Marca_ID
 * @property string $Marca_Desc
 */
class Marca extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Marca';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'Marca_ID';

    /**
     * @var array
     */
    protected $fillable = ['Marca_Desc'];
}
