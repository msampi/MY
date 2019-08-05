<?php

namespace App\Repositories;

use App\Models\Investor;
use InfyOm\Generator\Common\BaseRepository;

class InvestorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'phone',
        'country',
        'address',
        'wec',
        'city'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Investor::class;
    }
}
