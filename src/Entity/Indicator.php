<?php

namespace App\Entity;

use App\Repository\IndicatorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IndicatorRepository::class)]
class Indicator
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $code = null;

    #[ORM\Column(length: 20)]
    private ?string $format = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $outcome = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'indicator', targetEntity: DataPoint::class)]
    private Collection $dataPoints;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $definition = null;

    public function __construct()
    {
        $this->dataPoints = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(string $format): self
    {
        $this->format = $format;

        return $this;
    }

    public function getOutcome(): ?string
    {
        return $this->outcome;
    }

    public function setOutcome(?string $outcome): self
    {
        $this->outcome = $outcome;

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
     * @return Collection<int, DataPoint>
     */
    public function getDataPoints(): Collection
    {
        return $this->dataPoints;
    }

    public function addDataPoint(DataPoint $dataPoint): self
    {
        if (!$this->dataPoints->contains($dataPoint)) {
            $this->dataPoints->add($dataPoint);
            $dataPoint->setIndicator($this);
        }

        return $this;
    }

    public function removeDataPoint(DataPoint $dataPoint): self
    {
        if ($this->dataPoints->removeElement($dataPoint)) {
            // set the owning side to null (unless already changed)
            if ($dataPoint->getIndicator() === $this) {
                $dataPoint->setIndicator(null);
            }
        }

        return $this;
    }

    public function getDefinition(): ?string
    {
        return $this->definition;
    }

    public function setDefinition(?string $definition): self
    {
        $this->definition = $definition;

        return $this;
    }
}
