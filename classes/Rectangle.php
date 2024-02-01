<?php

class Rectangle extends Figure
{
    private float $length;
    private float $width;

    /**
     * @throws Exception
     */
    public function __construct(float $length, float $width) {
        $this->setWidth($width);
        $this->setLength($length);
    }

    public function area(): float
    {
        return $this->length * $this->width;
    }

    public function  perimeter(): float
    {
        return ($this->length + $this->width) * 2;
    }

    public function getArea():string
    {
        return $this->area();
    }
    public function getPerimeter():string
    {
        return $this->perimeter() ;
    }

    /**
     * @return float
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @param float $length
     * @throws Exception
     */
    public function setLength(float $length): void
    {
        if ($length <= 0) {
            throw new Exception("Довжина повинна бути більше нуля.");
        }
        $this->length = $length;
    }

    /**
     * @param float $width
     * @throws Exception
     */
    public function setWidth(float $width): void
    {
        if ($width <= 0) {
            throw new Exception("Ширина повинна бути більше нуля.");
        }
        $this->width = $width;
    }
}