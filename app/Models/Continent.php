<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use App\Models\Country;

/**
 * Class Company
 * @package App\Models
 * @version June 2, 2017, 10:57 pm UTC
 */
class Continent extends Model
{

 
    
    public function interestCountries()
    {
        $result = [];
        $countries =  Country::where('continent_code', $this->code)->get();
        foreach ($countries as $country)
            if ($country->hasCompany())
                $result[] = $country;
        return $result;
    }

    
}
