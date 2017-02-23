<?php
require_once('Geometria1.php');
interface Geometria extends Geometria1
{
        public function __construct($lados, $medida);
        public function perimetro();
        public function area();

        //public function volumen();
}