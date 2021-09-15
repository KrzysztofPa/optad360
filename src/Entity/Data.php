<?php

namespace App\Entity;

use App\Repository\DataRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DataRepository::class)
 */
class Data
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $currency;

    /**
     * @ORM\Column(type="integer")
     */
    private $PeriodLength;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $groupby;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $headers = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getPeriodLength(): ?int
    {
        return $this->PeriodLength;
    }

    public function setPeriodLength(int $PeriodLength): self
    {
        $this->PeriodLength = $PeriodLength;

        return $this;
    }

    public function getGroupby(): ?string
    {
        return $this->groupby;
    }

    public function setGroupby(?string $groupby): self
    {
        $this->groupby = $groupby;

        return $this;
    }

    public function getHeaders(): ?array
    {
        return $this->headers;
    }

    public function setHeaders(?array $headers): self
    {
        $this->headers = $headers;

        return $this;
    }
}
