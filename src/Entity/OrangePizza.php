<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Resource\Model\ResourceInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrangePizzaRepository")
 */
class OrangePizza implements ResourceInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Jellybean")
     * @ORM\JoinColumn(name="jelly_id", referencedColumnName="id")
     */
    private $bean;

    public function getId(): ?int
    {
        return $this->id;
    }
}
