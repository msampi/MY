<?php

namespace App\Repositories;

use App\Models\Setting;
use InfyOm\Generator\Common\BaseRepository;

class SettingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'meeting_name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Setting::class;
    }
}
