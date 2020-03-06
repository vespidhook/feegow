<?php

namespace App\Services;

use App\Repositories\AgendamentosRepository;
use Exception;

class AgendamentosService{

    private $repository;

    public function __construct(AgendamentosRepository $repository){
        $this->repository = $repository;
    }

    public function store($data){
        try
        {
            $agendamento = $this->repository->create($data);

            return [
                'success'   => true,
                'messages'  => "Agendamento Solicitado",
                'data'      => $agendamento
            ];
        }
        catch (Exception $e)
        {
            return [
                'success'   => false,
                'messages'  => $e->getMessage()
            ];
        }
    }
}
