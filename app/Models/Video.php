<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Video
 * @package App\Models
 * @version June 7, 2017, 5:33 pm UTC
 */
class Video extends Model
{

    public $table = 'videos';
    


    public $fillable = [
        'name',
        'description',
        'company_id',
        'vimeo_key',
        'type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'company_id' => 'integer',
        'vimeo_key' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'vimeo_key' => 'required'
    ];
    
    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
    
    public function nameSlug()
    {
        return str_replace(' ','-',$this->name);
    }

    
}
