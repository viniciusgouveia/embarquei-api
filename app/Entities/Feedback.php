<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;
use App\Entities\Enums\TIPO_FEEDBACK;

/**
 * @ORM\Entity
 * @ORM\Table(name="feedbacks")
 */
class Feedback
{
    /**
     * @ORM\Id
     * @ORM\Column(type="uuid", unique=true)
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidGenerator")
     */
    protected $id;

    /** @ORM\Column(type="datetime", nullable=false) */
    protected $data;

    /** @ORM\Column(type="string", nullable=false) */
    protected $comentario;

    /** @ORM\Column(type="string", nullable=false) */
    protected $detalhesPlataforma;

    /**
     * @ORM\JoinColumn(nullable=false)
     * @ORM\OneToOne(targetEntity="Usuario", fetch="EAGER")
     */
    protected $usuario;

    /** @ORM\Column(type="string", nullable=false) */
    protected $tipo;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getComentario()
    {
        return $this->comentario;
    }

    public function setComentario($comentario)
    {
        $this->comentario = $comentario;
    }

    public function getDetalhesPlataforma()
    {
        return $this->detalhesPlataforma;
    }

    public function setDetalhesPlataforma($detalhesPlataforma)
    {
        $this->detalhesPlataforma = $detalhesPlataforma;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo): void
    {
        $tiposFeedback = array(TIPO_FEEDBACK::BUG, TIPO_FEEDBACK::SUGESTAO, TIPO_FEEDBACK::OUTRO);

        if (!in_array($tipo, $tiposFeedback))
        {
            throw new ValorEnumInvalidoException("TIPO_FEEDBACK");
        }
        $this->tipo = $tipo;
    }

    public function toArray()
    {
        return array(
            'id' => $this->id,
            'data' => $this->data,
            'comentario' => $this->comentario,
            'detalhesPlataforma' => $this->detalhesPlataforma,
            'usuario' => $this->usuario,
            'tipo' => $this->tipo
        );
    }
}