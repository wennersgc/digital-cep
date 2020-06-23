<?php

require_once "vendor/autoload.php";

use Wenner\DigitalCep\Search;

$busca = new Search();

$resultado = $busca->getAddressFormZipCode("26053210");

print_r($resultado);
