<?php
namespace Movilidad;
/**
* 
*/
class Escaleras
{
	protected $escalonesPorPiso;
	protected $pisoUbicacion;
	protected $totalPisos;
	

	public function __construct($escalonesPorPiso, $pisoUbicacion, $totalPisos)
	{
		$this->escalonesPorPiso=$escalonesPorPiso;
		$this->pisoUbicacion=$pisoUbicacion;
		$this->totalPisos=$totalPisos;
	}

	public function subir($pisosASubir)
	{
		if($this->pisoUbicacion < $this->totalPisos) {
			if (($this->pisoUbicacion+$pisosASubir) > $this->totalPisos ) {
				$this->pisoUbicacion= $this->totalPisos - $this->pisoUbicacion;
			} else {
				$this->pisoUbicacion+=$pisosASubir;
			}
		} else {
			echo "Usted se encuentra en el ultimo piso";
		}
	}

	public function seleccionaPiso($pisoSeleccionado)
	{
		if($this->pisoUbicacion > $pisoSeleccionado) {
			$pisos =$this->pisoUbicacion-$pisoSeleccionado;
			$this->bajar($pisos);
			echo "Has bajado ".$pisos*$this->escalonesPorPiso." escalones <br>";
		}else {
			$pisos =$this->subir($pisoSeleccionado-$this->pisoUbicacion);
			echo "Has subido ".$pisos*$this->escalonesPorPiso." escalones <br>";
		}
	}

	public function bajar($pisosABajar)
	{
		if($this->pisoUbicacion > 0) {
			if(($this->pisoUbicacion-$pisosABajar) > 0 ) {
				$this->pisoUbicacion-=$pisosABajar;
			} else {
				$this->pisoUbicacion=0;
			}
		} else {
			echo "Usted se encuentra en el primer piso";
		}
	}

	public function getUbicacion()
	{
		return "Te encuentras en el piso {$this->pisoUbicacion} ";
	}
}