<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserEvents
 *
 * @ORM\Table(name="user_events", indexes={@ORM\Index(name="IDX_36D54C77B3E79F4B", columns={"id_project_id"})})
 * @ORM\Entity
 */
class UserEvents
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var \Events
     *
     * @ORM\ManyToOne(targetEntity="Events")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_project_id", referencedColumnName="id")
     * })
     */
    private $idProject;

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function getIdProject(): ?Events
    {
        return $this->idProject;
    }

    public function setIdProject(?Events $idProject): self
    {
        $this->idProject = $idProject;

        return $this;
    }


}
