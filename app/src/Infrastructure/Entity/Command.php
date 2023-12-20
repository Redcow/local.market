<?php

namespace Fplet\Local\Infrastructure\Entity;

use Doctrine\ORM\Mapping as ORM;
use Fplet\Local\Infrastructure\Repository\CommandRepository;

#[ORM\Entity(repositoryClass: CommandRepository::class)]
class Command
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
