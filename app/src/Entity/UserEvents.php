<?php

namespace App\Entity;

use App\Repository\UserEventsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserEventsRepository::class)
 */
class UserEvents
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id_user;

    /**
     * @ORM\ManyToOne(targetEntity=events::class, inversedBy="userEvents")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_project;

    public function getIdProject(): ?events
    {
        return $this->id_project;
    }

    public function setIdProject(?events $id_project): self
    {
        $this->id_project = $id_project;

        return $this;
    }


}
