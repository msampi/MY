<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Setting
 * @package App\Models
 * @version July 5, 2017, 6:00 pm UTC
 */
class Setting extends Model
{

    public $table = 'settings';
    


    public $fillable = [
        'meeting_room'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'meeting_room' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
