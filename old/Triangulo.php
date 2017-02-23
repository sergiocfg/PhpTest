<?php
require_once('FiguraTrait.php');
class Triangulo extends Figura
{
    use FiguraTrait;
public function __construct($lados, $medida)
    {
        $this->lados = $lados;
        $this->medida = $medida;
    } 

     /*   public function perimetro()
    {
        return $this->lados * $this->medida;
    }*/

        public function area()
    {
        return (sqrt(3)/4)*$this->lados;
    }
}