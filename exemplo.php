<?php 

    require "vendor/autoload.php";

    use Manod\DigitalCep\Search;

    $busca = new Search;

    $resultado = $busca->getAddressFromZipCode('72006565');

    print_r($resultado);
?>