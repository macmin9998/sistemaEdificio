<?php
namespace Edificio;

/**
* 
*/
class Edificio
{
	protected $escalera;
	protected $ventana;
	protected $elevador;
	protected $agua;

	public function __construct($escalera, $ventana, $elevador,$agua )
	{
		$this->escalera=$escalera;
		$this->ventana=$ventana;
		$this->elevador=$elevador;
		$this->agua=$agua;
	}
}