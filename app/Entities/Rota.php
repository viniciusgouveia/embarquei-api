<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use App\Entities\Traits\CriaArrayObjetoTrait;

/** @ORM\Entity */
class Rota 
{
    use CriaArrayObjetoTrait;
    
    /**
     * @ORM\Id
     * @ORM\Column(type="uuid", unique=true)
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidGenerator")
     */
    protected $id;

    /** 
     * @ORM\JoinColumn(nullable=true)
     * @ORM\ManyToMany(targetEntity="InstituicaoEnsino", fetch="EAGER") 
     */
    protected $instituicoesEnsino;

    /** 
     * @ORM\JoinColumn(nullable=false)
     * @ORM\OneToMany(targetEntity="Trajeto", mappedBy="rota", cascade={"all"}, fetch="EAGER", orphanRemoval=true)
     */
    protected $trajetos;

    /**
     * @ORM\JoinColumn(nullable=false)
     * @ORM\ManyToOne(targetEntity="Cidade", fetch="EAGER")
     */
    protected $cidade;
    
    public function __construct()
    {
        $this->instituicoesEnsino = new ArrayCollection();
        $this->trajetos = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getInstituicoesEnsino()
    {
        return $this->instituicoesEnsino;
    }

    public function getTrajetos()
    {
        return $this->trajetos;
    }
    
    public function getCidade() 
    {
        return $this->cidade;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setInstituicoesEnsino($instituicoesEnsino)
    {
        $this->instituicoesEnsino = new ArrayCollection($instituicoesEnsino);
    }

    public function setTrajetos($trajetos)
    {
        $this->trajetos = new ArrayCollection($trajetos);
    }

    public function setCidade($cidade) 
    {
        $this->cidade = $cidade;
    }
    
    public function toArray()
    {
        return array(
            'id' => $this->id,
            'instituicoesEnsino' => $this->retornarArrayObjetos($this->instituicoesEnsino),
            'trajetos' => $this->retornarArrayObjetos($this->trajetos),
            'cidade' => [
                'id' => $this->cidade->getId(), 
                'nome' => $this->cidade->getNome(),
                'geolocalizacao' => $this->cidade->getGeolocalizacao()->toArray()
            ]
         );
    }

}
