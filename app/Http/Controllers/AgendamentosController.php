<?php

namespace App\Http\Controllers;

use App\Api\ApiFeegow;
use App\Services\AgendamentosService;
use DateTime;
use Illuminate\Http\Request;

class AgendamentosController extends Controller
{

    protected $service;

    public function __construct(AgendamentosService $service){
        $this->service = $service;
    }

    public function index()
    {
        $specialtiesList = ApiFeegow::getSpecialists();
        $pacientsListSource = ApiFeegow::getPacientsListSource();
        return view('agendamentos.index', compact('specialtiesList', 'pacientsListSource'));
    }

    public function getProfessionals(Request $request){
        $data = $request->all();
        $professionals = ApiFeegow::getProfessionals($data['speciality_id']);
        return json_encode($professionals);
    }

    public function store(Request $request){
        $data = $request->all();
        $data['date_time'] = new DateTime();
        $request = $this->service->store($data);

        $session = [
            'success'   => $request['success'],
            'messages'  => $request['messages']
        ];

        return redirect()->route('index')->with('success', $session);
    }
}
