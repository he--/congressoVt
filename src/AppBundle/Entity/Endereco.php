<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="endereco")
 */
class Endereco
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(type="bigint", name="nu_seq_endereco", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var Participante
     *
     * @ORM\OneToOne(targetEntity="Empresa", inversedBy="endereco")
     * @ORM\JoinColumn(name="nu_seq_participante", referencedColumnName="nu_seq_participante", nullable=false)
     */
    protected $participante;

    /**
     * @var string
     *
     * @ORM\Column(type="string", name="co_numero", length=10, nullable=true)
     */
    protected $numero;

    /**
     * @var string
     *
     * @ORM\Column(type="string", name="ds_complemento", length=150, nullable=true)
     */
    protected $complemento;

    /**
     * @var string
     *
     * @ORM\Column(type="string", name="ds_bairro", length=100, nullable=true)
     */
    protected $bairro;

    /**
     * @var string
     *
     * @ORM\Column(type="string", name="ds_distrito", length=100, nullable=true)
     */
    protected $distrito;

    /**
     * @var string
     *
     * @ORM\Column(type="string", name="co_cep", length=8, nullable=true)
     */
    protected $cep;

    /**
     * @var string
     *
     * @ORM\Column(type="string", name="ds_referencia", length=150, nullable=true)
     */
    protected $referencia;
    /**
     * @var string
     *
     * @ORM\Column(type="string", name="co_ddd_telefone", length=10, nullable=true)
     */
    protected $ddd;

    /**
     * @var string
     *
     * @ORM\Column(type="string", name="co_telefone", length=50, nullable=true)
     */
    protected $telefone;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return Participante
     */
    public function getParticipante()
    {
        return $this->participante;
    }

    /**
     * @param Participante $participante
     */
    public function setParticipante($participante)
    {
        $this->participante = $participante;
    }

    /**
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param string $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return string
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * @param string $complemento
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }

    /**
     * @return string
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param string $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     * @return string
     */
    public function getDistrito()
    {
        return $this->distrito;
    }

    /**
     * @param string $distrito
     */
    public function setDistrito($distrito)
    {
        $this->distrito = $distrito;
    }

    /**
     * @return string
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param string $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @return string
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * @param string $referencia
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;
    }

    /**
     * @return string
     */
    public function getDdd()
    {
        return $this->ddd;
    }

    /**
     * @param string $ddd
     */
    public function setDdd($ddd)
    {
        $this->ddd = $ddd;
    }

    /**
     * @return string
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param string $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }




}
