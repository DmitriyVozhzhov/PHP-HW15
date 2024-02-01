<?php

declare(strict_types=1);

require_once './classes/Figure.php';
require_once './classes/Circle.php';
require_once './classes/Rectangle.php';


try {
    $rectangle = new Rectangle(3, 5);
    $circle = new Circle(5);

    echo 'Довжина прямокутника: ' . $rectangle->getLength() . PHP_EOL;
    echo 'Ширина прямокутника: ' . $rectangle->getWidth() . PHP_EOL;
    echo 'Площа прямокутника: ' . $rectangle->getArea() . PHP_EOL;
    echo 'Периметр прямокутника: ' . $rectangle->getPerimeter() . PHP_EOL;
    echo ' ' . PHP_EOL;

    echo 'Радіус кола: ' . $circle->getRadius() . PHP_EOL;
    echo 'Площа кола: ' . $circle->getArea() . PHP_EOL;
    echo 'Периметр кола: ' . $circle->getPerimeter() . PHP_EOL;



} catch (Exception $e) {
    echo 'Помилка: ' . $e->getMessage() . PHP_EOL;
}