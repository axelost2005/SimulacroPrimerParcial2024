<?php
include "Moto.php";
class Venta{
    private $numero;   
    private $fecha;
    private $refCliente;
    private $colMotos;
    private $precioFinal;

    public function __construct($numeroC, $fechaC, $refClienteC,$colMotosC, $precioFinalC){
        $this -> numero = $numeroC;
        $this -> fecha = $fechaC;
        $this -> refCliente = $refClienteC;
        $this -> colMotos = $colMotosC;
        $this -> precioFinal = $precioFinalC;
    }
    
    public function getNumero(){
        return $this -> numero;
    }
    public function getFecha(){
        return $this -> fecha;
    }
    public function getRefCliente(){
        return $this -> refCliente;
    }
    public function getColMotos(){
        return $this -> colMotos;
    }
    public function getPrecioFinal(){
        return $this -> precioFinal;
    }

    public function setNumero($numeroVentaSet){
        $this->numero = $numeroVentaSet;
    }
    public function fechaVentaClient($fechaVentaSet){
        $this->fecha = $fechaVentaSet;
    }
    public function setRefenciaCliente($refenciaClienteSet){
        $this->refCliente = $refenciaClienteSet;
    }
    public function setCollecMoto($collecMotoSet){
        $this->colMotos = $collecMotoSet;
    }
    public function setPrecioFinalVenta($precioFinalventaSet){
        $this->precioFinal = $precioFinalventaSet;
    }
    public function __toString(){
        $motosString = "";
        foreach ($this->getColMotos() as $moto) {
            $motosString .= $moto . "\n"; // Utiliza el método __toString() de la clase Moto
        }
    
        return "Numero venta: " . $this->getNumero() . "\n" .
                "Fecha venta: " . $this->getFecha() . "\n" .
                "Referencia del cliente: " . $this->getRefCliente() . "\n" .
                "Coleccion de motos: \n" . $motosString . // Aquí se concatena la información de las motos
                "Precio final venta: " . $this->getPrecioFinal() . "\n";
    }

    public function incorporarMoto($objMoto){
        $precioVenta = $objMoto->darPrecioVenta();
        if ($precioVenta != -1 && ($this->getRefCliente()->dadoDeBajaCliente()) == false){
            $colMotos= array();
            array_push($colMotos,$objMoto);
            $nuevoPrecioFinal = $precioVenta + $this -> getPrecioFinal(); 
            $this -> setPrecioFinalVenta($nuevoPrecioFinal); 

            echo "Moto incorporada correctamente";
        }else{
            echo "Moto no dispobible";
        }


    }
}