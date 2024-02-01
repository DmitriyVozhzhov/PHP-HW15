<?php

class Circle extends Figure
{
    private float $radius;

    /**
     * @throws Exception
     */
    public function __construct(float $radius)
    {
        $this->setRadius($radius);
    }

    /**
     * @param float $radius
     * @throws Exception
     */
    public function setRadius(float $radius): void
    {
        if ($radius <= 0) {
            throw new Exception("Радіус повинен бути більше нуля.");
        }
        $this->radius = $radius;
    }

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    public function area(): float {
        return M_PI * pow($this->radius, 2);
    }

    public function perimeter(): float {
        return 2 * M_PI * $this->radius;
    }

    public function getArea(): string {
        return $this->area();
    }

    public function getPerimeter(): string {
        return $this->perimeter();
    }
}