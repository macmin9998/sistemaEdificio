<?php
namespace Edificio\Movilidad;

class Elevador
{
	protected $capacidad;
    protected $cantidadPisos;
	protected $pisoActual=0;
   
    public function __construct($capacidad,$cantidadPisos)
    {
    	$this->capacidad=$capacidad;
    	$this->cantidadPisos=$cantidadPisos;
    }
    
	
	public function subir($pisosASubir)
	{
		if($this->pisoActual < $this->cantidadPisos ) {
			if(($this->pisoActual+$pisosASubir) > $this->cantidadPisos ) {
				$this->pisoActual=$this->cantidadPisos;
			} else {	
				$this->pisoActual+=$pisosASubir;
        	}
        }
		
	}
	public function bajar($pisosABajar)
	{
		if($this->pisoActual > 0) {
			if(($this->pisoActual-$pisosABajar) > 0 ) {
				$this->pisoActual-=$pisosABajar;
			} else {
				$this->pisoActual=0;
			}
		}
	} 
	public function seleccionar($pisoSeleccionado)
	{
		if($this->pisoActual > $pisoSeleccionado) {
			$this->bajar($this->pisoActual-$pisoSeleccionado);
		}else {
			$this->subir($pisoSeleccionado-$this->pisoActual);
		}
	}
	public function getUbicacion()
	{
    	return "Elevador en el piso: ".$this->pisoActual."<br>";
	}
}
