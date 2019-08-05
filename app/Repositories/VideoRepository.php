<?php

namespace App\Repositories;

use App\Models\Video;
use InfyOm\Generator\Common\BaseRepository;

class VideoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'company_id',
        'vimeo_key'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Video::class;
    }
}
