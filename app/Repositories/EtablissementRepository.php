<?php

namespace App\Repositories;

use App\Models\Etablissement;
use App\Repositories\BaseRepository;

/**
 * Class EtablissementRepository
 * @package App\Repositories
 * @version March 21, 2020, 3:53 pm UTC
*/

class EtablissementRepository extends BaseRepository
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
        return Etablissement::class;
    }
}
