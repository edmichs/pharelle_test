<?php

namespace App\Repositories;

use App\Models\Classe;
use App\Repositories\BaseRepository;

/**
 * Class ClasseRepository
 * @package App\Repositories
 * @version March 21, 2020, 3:55 pm UTC
*/

class ClasseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Classe::class;
    }
}
