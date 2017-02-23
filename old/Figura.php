<?php
require_once('Geometria.php');

class Figura implements Geometria
{
    protected $lados;
    protected $medida;

    public function __construct($lados, $medida)
    {
        $this->lados = $lados;
        $this->medida = $medida;
    }

    public function perimetro()
    {
        return "Figura - P";//
    }

        public function area()
    {
        return "Figura - A";
    }
    public function volumen()
    {
        return "volument desde figura";
    }
}