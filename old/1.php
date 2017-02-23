<?php
class Carro
{
	/**
	* prueba
	*/

	public $velocodad = null;
	private $serie = null;
	private $encendido = null;
	static $llanta = null;

	public function __construct($velocidad = "40",$serie = "sergio",$encendido="false",$llanta="2")
	{
		$this->velocidad=$velocidad;
		$this->serie=$serie;
		$this->encendido=$encendido;
		/*$this->llanta=$llanta;*/
	}
	
	public function getVelocidad()
	{
		return $this->velocidad;
	}
	
	public function estado()
	{
		/*Carro::encendido;
		self::$llanta;*/
		return $this->encendido;
	}

	public function encender()
	{
		$this->encendido=true;
	}

	public function apagar()
	{
		$this->encendido = false;
	}

	public function __destruct()
	{
		echo "<br /><br />Obect destruct";
	}
}

$carro =new Carro;

echo "Speed: " . $carro->getVelocidad() . "<br /><br />"; 
echo $carro->estado() . "<br /><br />";

var_dump($carro->estado()) . "<br /><br />";

$carro->encender();

var_dump($carro->estado()) . "<br /><br />";

$carro->apagar();

var_dump($carro->estado()) . "<br />";