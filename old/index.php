<?php
require 'Figura.php';
require 'Cuadrado.php';
require 'Triangulo.php';
//require 'FiguraTrait.php';

$cuadrado = new Cuadrado(4,10,5);
$triangulo = new Triangulo(5,9);
echo "Perimetro Cuadrado:  " . $cuadrado->perimetro() . "<br />";
echo "Perimetro Triangulo: " . $triangulo->perimetro() . "<br />";

echo "Area Cuadrado:  " . $cuadrado->area() . "<br />";
echo "Area Triangulo: " . $triangulo->area() . "<br />";

echo "Trait: " . $triangulo->volumen() . "<br />";

echo "Trait: " . $cuadrado->volumen();