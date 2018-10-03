<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\EstudanteService;

class EstudanteController extends Controller
{
    
    private $estudanteService;
    
    public function __construct(EstudanteService $estudanteService) 
    {
        $this->estudanteService = $estudanteService;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudantes = $this->estudanteService->findAll();

        if (empty($estudantes))
        {
            return response()->json('', 204);
        }

        return response()->json($estudantes, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estudante = $request->all();

        $this->estudanteService->create($estudante);

        return response()->json(['response' => 'Success'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudante = $this->estudanteService->findById($id);

        if ($estudante)
        {
            return response()->json($estudante->toArray(), 200);
        }

        return response()->json(['response' => 'Estudante não encontrado'], 400);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $estudante = $request->all();

        $estudanteAtualizado = $this->estudanteService->update($estudante, $id);

        return response()->json([$estudanteAtualizado->toArray()], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->estudanteService->delete($id);

        return response()->json('', 204);
    }
}