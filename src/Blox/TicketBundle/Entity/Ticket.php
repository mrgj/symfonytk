<?php

namespace Blox\TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket")
 * @ORM\Entity(repositoryClass="Blox\TicketBundle\Repository\TicketRepository")
 */
class Ticket
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Tipo", inversedBy="tickets")
     * @ORM\JoinColumn(name="tipo_id", referencedColumnName="id", nullable=false)
     */
    private $tipo;

    /**
     * @ORM\ManyToOne(targetEntity="Categoria", inversedBy="tickets")
     * @ORM\JoinColumn(name="categoria_id", referencedColumnName="id", nullable=false)
     */
    private $categoria;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Nivel", inversedBy="tickets")
     * @ORM\JoinColumn(name="nivel_id", referencedColumnName="id", nullable=false)
     */
    private $nivel;

    /**
     * @ORM\ManyToOne(targetEntity="Estado", inversedBy="tickets")
     * @ORM\JoinColumn(name="estado_id", referencedColumnName="id", nullable=false)
     */
    private $estado;

    /**
     * @ORM\ManyToOne(targetEntity="Estado", inversedBy="tickets")
     * @ORM\JoinColumn(name="estado_id", referencedColumnName="id", nullable=false)
     */
    private $empresa;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="tickets")
     * @ORM\JoinColumn(name="user_id_create", referencedColumnName="id", nullable=false)
     */
    private $userIdCreate;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="tickets")
     * @ORM\JoinColumn(name="user_id_close", referencedColumnName="id", nullable=true)
     */
    private $userIdClose;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_at", type="datetime")
     */
    private $updateAt;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Ticket
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     *
     * @return Ticket
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set nivel
     *
     * @param string $nivel
     *
     * @return Ticket
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return string
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Ticket
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set empresa
     *
     * @param string $empresa
     *
     * @return Ticket
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return string
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set userIdCreate
     *
     * @param string $userIdCreate
     *
     * @return Ticket
     */
    public function setUserIdCreate($userIdCreate)
    {
        $this->userIdCreate = $userIdCreate;

        return $this;
    }

    /**
     * Get userIdCreate
     *
     * @return string
     */
    public function getUserIdCreate()
    {
        return $this->userIdCreate;
    }

    /**
     * Set userIdClose
     *
     * @param string $userIdClose
     *
     * @return Ticket
     */
    public function setUserIdClose($userIdClose)
    {
        $this->userIdClose = $userIdClose;

        return $this;
    }

    /**
     * Get userIdClose
     *
     * @return string
     */
    public function getUserIdClose()
    {
        return $this->userIdClose;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Ticket
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Ticket
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updateAt
     *
     * @param \DateTime $updateAt
     *
     * @return Ticket
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    /**
     * Get updateAt
     *
     * @return \DateTime
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }
}
