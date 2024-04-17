<?php

    include "Empresa.php";


    $objCliente1 = new Cliente ("Juan", "Luna", "Dado de alta", "DNI", "46613199"); 
    $objCliente2 = new Cliente ("Gabriel", "Martinez", "Dado de alta", "DNI", "45617188"); 
    $collClientes = [$objCliente1, $objCliente2];

    $moto1 = new Moto(11, 2230000, 2022, "Benelli Imperiale 400", 85, true);
    $moto2 = new Moto(12, 584000, 2021, "Zanella Zr 150 Ohc", 70, true); 
    $moto3 = new Moto(13, 999900, 2023, "Zanella Patagonian Eagle 250", 55, false); 

    $collecMoto = [$moto1, $moto2, $moto3];

    $objEmpresa = new Empresa("Alta Gama", "Avenida Argentina 123", $collClientes, $collecMoto, []); 

    $objEmpresa-> registrarVenta([11, 12, 13], $objCliente2); 
    $objEmpresa-> registrarVenta([0], $objCliente2); 

    
