<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Agendamentos;

/**
 * Class AgendamentosTransformer.
 *
 * @package namespace App\Transformers;
 */
class AgendamentosTransformer extends TransformerAbstract
{
    /**
     * Transform the Agendamentos entity.
     *
     * @param \App\Entities\Agendamentos $model
     *
     * @return array
     */
    public function transform(Agendamentos $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
