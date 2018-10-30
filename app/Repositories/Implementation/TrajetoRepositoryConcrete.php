<?php

namespace App\Repositories\Implementation;

use App\Repositories\Abstraction\Repository;
use App\Repositories\Abstraction\TrajetoRepositoryInterface;

class TrajetoRepositoryConcrete extends Repository implements TrajetoRepositoryInterface
{
    
    protected function getTypeObject() 
    {
        return '\App\Entities\Trajeto';
    }
    
    public function getTrajetosByCidadeInstituicaoRota($cidadeId, $instituicaoId)
    {
        $entityManager = $this->getEntityManager();

        try
        {
            $query = $entityManager->createQuery(
                'SELECT t FROM App\Entities\Trajeto t '
                    . 'JOIN App\Entities\Rota r '
                    . 'JOIN r.trajetos rt '
                    . 'JOIN r.instituicoesEnsino i '
                    . 'JOIN r.cidade c '
                    . 'JOIN rt.rota tr '
                    . 'WHERE c.id = :cidadeId AND i.id = :instituicaoId' //AND tr.id = :rotaId'
            );
            
            $query->setParameters(array(
                'cidadeId' => $cidadeId,
                'instituicaoId' => $instituicaoId,
//                'rotaId' => $rotaId
            ));
                        
            return $query->getResult();
        }
        catch (Exception $ex) 
        {
            throw $ex;
        }
    }
}
