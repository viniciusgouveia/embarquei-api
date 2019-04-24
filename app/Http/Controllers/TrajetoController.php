<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TrajetoService;

class TrajetoController extends Controller
{
    private $trajetoService;
    
    public function __construct(TrajetoService $trajetoService) 
    {
        $this->trajetoService = $trajetoService;
    }

    public function store(Request $request)
    {
        $trajeto = $request->all();

        $novoTrajeto = $this->getService()->create($trajeto);

        return response()->json($novoTrajeto->toArray(), 200);
    }

    public function buscarTrajetosByCidadeInstituicaoRota($cidade, $instituicaoEnsino)
    {  
        $trajetos = $this->trajetoService->
                getTrajetosByCidadeInstituicaoRota($cidade, $instituicaoEnsino);
        
        return response()->json($trajetos, 200);
    }

    protected function getService()
    {
        return $this->trajetoService;
    }

    protected function getMensagemErro()
    {
        return 'Trajeto não encontrado';
    }


}
