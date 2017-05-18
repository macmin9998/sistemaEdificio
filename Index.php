<?php

include ("src/Edificio/Edificio.php");
include ("src/Edificio/Infraestructura/Ventanas.php");
include ("src/Edificio/Movilidad/Escaleras.php");
include ("src/Edificio/Movilidad/Elevador.php");
include ("src/Edificio/Servicios/Agua.php");



use Edificio\Edificio;
use Edificio\Infraestructura\Ventanas;
use Edificio\Movilidad\Escaleras;
use Edificio\Movilidad\Elevador;
use Edificio\Servicios\Agua;



$ventanas=new Ventanas();
$escaleras=new Escaleras();
$elevador=new Elevador(8,10);
$agua=new Agua();


$edificio=new Edificio($escaleras,$ventanas,$elevador,$agua);
echo "<pre>";
var_dump($edificio);
echo "</pre>";