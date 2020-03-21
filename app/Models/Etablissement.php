<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Etablissement
 * @package App\Models
 * @version March 21, 2020, 3:53 pm UTC
 *
 */
class Etablissement extends Model
{
    use SoftDeletes;

    public $table = 'etablissements';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
            'name', 'location','description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
