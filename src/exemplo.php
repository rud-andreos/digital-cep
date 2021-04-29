<?php

require_once "vendor/autoload.php";

use \Raide\DigitalCep\search;

$busca = new search;

$resultado = $busca->getAddressFromZipcode('03974200');

print_r($resultado);