<?php

namespace App\Presenters;

use App\Transformers\AgendamentosTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class AgendamentosPresenter.
 *
 * @package namespace App\Presenters;
 */
class AgendamentosPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new AgendamentosTransformer();
    }
}
