<?php
namespace Edificio;

include ("Infraestructura/Ventanas.php");
include ("Movilidad/Escaleras.php");
include ("Movilidad/Elevador.php");
include ("Servicios/Agua.php");



use Infraestructura\Ventanas;
use Movilidad\Escaleras;
use Movilidad\Elevador;
use Servicios\Agua;



$ventanas=new Ventanas();
$escaleras=new Escaleras(100,3,10);
$elevador=new Elevador(8,10);
$agua=new Agua();



class Edificio
{
	protected $escalera;
	protected $ventana;
	protected $elevador;
	protected $agua;

	public function __construct($escalera,$ventana,$elevador,$agua)
	{
		$this->escalera=$escalera;
		$this->ventana=$ventana;
		$this->elevador=$elevador;
		$this->agua=$agua;
	}
}

$edificio=new Edificio($escaleras,$ventanas,$elevador,$agua);

$agua->encender();
$ventanas->LimpiarVentana(10); 
$elevador->subir(5);
echo $elevador->getUbicacion();

$escaleras->seleccionaPiso(1);
echo $escaleras->getUbicacion();










