<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Investor
 * @package App\Models
 * @version June 12, 2017, 10:36 pm UTC
 */
class Investor extends Model
{

    public $table = 'investors';



    public $fillable = [
        'company',
        'country_id',
        'city',
        'sectors',
        'places'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'company' => 'string',
        'country_id' => 'integer',
        'city' => 'string',
        'sectors' => 'array',
        'places' => 'array'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }

}
