<?php
class Cuadrado extends Figura
{
    private $angle;
   public function __construct($lados, $medida,$angle=6)
    {
        $this->lados = $lados;
        $this->medida = $medida;

        $this->angle = $angle;
    } 

        public function perimetro()
    {
        return $this->lados * $this->medida * $this->angle;
    }

    public function area()
    {
        return get_called_class() . ': ' . pow($this->lados,2) * $this->angle;
    }
}