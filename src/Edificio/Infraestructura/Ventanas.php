<?php
namespace Infraestructura;


class Ventanas
{
protected $PisoDeVentana;

public function LimpiarVentana($PisoDeVentana)
{
$this->PisoDeVentana=$PisoDeVentana;
echo "La ventana del piso: ".$this->PisoDeVentana." esta limpia<br>";	
}
}

