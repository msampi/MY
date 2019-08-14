<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Company
 * @package App\Models
 * @version June 2, 2017, 10:57 pm UTC
 */
class Company extends Model
{

    public $table = 'companies';
    
    

    public $fillable = [
        'name',
        'phone',
        'country_id',
        'sector',
        'city',
        'address',
        'website',
        'user_id',
        'active',
        'contact_email',
        'photo_bg'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'phone' => 'string',
        'country_id' => 'integer',
        'sector' => 'string',
        'email' => 'string',
        'city' => 'string',
        'address' => 'string',
        'user_id' => 'integer',
        'website' => 'string',
        'active' => 'integer',
        'contact_email' => 'integer',
        'photo_bg' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'phone' => 'required',
        'sector' => 'required',
        'email' => 'required|email'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }
    
    public function videos()
    {
        return $this->hasMany('App\Models\Video');
    }
    
    public function nameSlug()
    {
        return str_replace(' ','-',$this->name);
    }
    
    public function getVideo($video_name)
    {
        foreach($this->videos as $video)
            if ($video->nameSlug() == $video_name)
                return $video;
        return NULL;
    }

    public function getPhotoBgAttribute($value)
    {
        return ($value) ? $value : '../img/iguazu.jpg';
    }

    
}
