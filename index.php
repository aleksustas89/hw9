<?php

require_once 'vendor/autoload.php';

$ShawarmaCalculator = new Hillel\ShawarmaCalculator;

$ShawarmaCalculator->add(new Hillel\Odesskaya);

$ShawarmaCalculator->add(new Hillel\Govyajya);

$ShawarmaCalculator->add(new Hillel\Baranina);

print "<pre>";
print_r($ShawarmaCalculator->ingredients());
print "</pre>";

print_r($ShawarmaCalculator->price());