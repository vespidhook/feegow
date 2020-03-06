<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\AgendamentosRepository;
use App\Entities\Agendamentos;
use App\Validators\AgendamentosValidator;

/**
 * Class AgendamentosRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class AgendamentosRepositoryEloquent extends BaseRepository implements AgendamentosRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Agendamentos::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return AgendamentosValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
