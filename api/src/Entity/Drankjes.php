<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\DrankjesRepository")
 */
class Drankjes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=2555, nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\ExampleEntity", inversedBy="drankjes")
     */
    private $example;

    public function __construct()
    {
        $this->example = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|ExampleEntity[]
     */
    public function getExample(): Collection
    {
        return $this->example;
    }

    public function addExample(ExampleEntity $example): self
    {
        if (!$this->example->contains($example)) {
            $this->example[] = $example;
        }

        return $this;
    }

    public function removeExample(ExampleEntity $example): self
    {
        if ($this->example->contains($example)) {
            $this->example->removeElement($example);
        }

        return $this;
    }
}
