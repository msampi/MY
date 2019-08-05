<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use App\Models\Company;

/**
 * Class Company
 * @package App\Models
 * @version June 2, 2017, 10:57 pm UTC
 */
class Country extends Model
{

    public $table = 'countries';
    


    public $fillable = [
        'name',
        'code',
        'full_name',
        'iso3',
        'number',
        'continent_code',
        
    ];
    
    public function hasCompany()
    {
        if (Company::where('country_id',$this->id)->count() > 0)
            return true;
        return false;
    }

    

    
}
