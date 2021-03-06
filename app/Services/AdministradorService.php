<?php

namespace App\Services;

use App\Repositories\Abstraction\AdministradorRepositoryInterface;
use App\Entities\Administrador;
use App\Entities\Endereco;
use Illuminate\Support\Facades\Hash;
use App\Services\InstituicaoEnsinoService;

class AdministradorService
{
    private $administradorRepository;
    private $instituicaoEnsinoService;

    public function __construct(AdministradorRepositoryInterface $administradorRepository, 
            InstituicaoEnsinoService $instituicaoEnsinoService)
    {
        $this->administradorRepository = $administradorRepository;
        $this->instituicaoEnsinoService = $instituicaoEnsinoService;
    }

    public function create($dados)
    {
        $administrador = $this->criarInstanciaAdministrador($dados);

        $this->administradorRepository->associarComEndereco($administrador, $dados['endereco']);
    }

    public function findById($id)
    {
        return $this->administradorRepository->getById($id);
    }

    public function findByNumeroCelular($numeroCelular)
    {
        return $this->administradorRepository->getByNumeroCelular($numeroCelular);
    }

    public function findAll()
    {
        $result = $this->administradorRepository->getAll();

        $usuarios = array();

        foreach ($result as $usuario) {
            $usuarios[] = $usuario->toArray();
        }

        return $usuarios;
    }

    /*
    public function update($data, $id)
    {
        $senha = $data['senha'];

        if (Hash::needsRehash($data['senha']))
        {
            $senha = Hash::make($data['senha']);
        }

        $usuario = new Usuario($data['nome'], $data['sobrenome'],
                $data['numeroCelular'], $senha);
        $usuario->setId($id);

        return  $this->usuarioRepository->update($usuario);
    }*/

    public function delete($id)
    {
        $this->administradorRepository->delete($id);
    }
    
    private function criarInstanciaAdministrador($dados)
    {        
        $administrador = new Administrador();
        $administrador->setNome($dados['nome']);
        $administrador->setSobrenome($dados['sobrenome']);
        $administrador->setNumeroCelular($dados['numeroCelular']);
        $administrador->setSenha(Hash::make($dados['senha']));
        $administrador->setAtivo(true);
        $administrador->setBeta(true);
        
        return $administrador;
    }
}
