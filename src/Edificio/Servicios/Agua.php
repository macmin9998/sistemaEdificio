<?php
namespace Servicios;


class Agua
{


protected $encendido;



public function encender()
{
  if(!$this->estaEncendido()) {	
  $this->encendido="On";
  echo"Bomba encendida<br>";
          }
}
  
public function apagar()
{
  if($this->estaEncendido()) {	
  $this->encendido="Off";
  echo"Bomba apagada<br>";
          }	
}

public function estaEncendido()
{
   return $this->encendido;
}

  
}


