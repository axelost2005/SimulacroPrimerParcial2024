<?php

class Moto{

    private $codigoMoto;
    private $costoMoto;
    private $añoFabricacionMoto; 
    private $descripcionMoto;
    private $porcIncAnualMoto;
    private $activa; 
    
    public function __construct($codigo, $costo, $añoFabricacion, $descripcion, $porcIncAnual, $activaC){
        $this -> codigoMoto = $codigo;
        $this -> costoMoto = $costo;
        $this -> añoFabricacionMoto = $añoFabricacion; 
        $this -> descripcionMoto = $descripcion;
        $this -> porcIncAnualMoto = $porcIncAnual;
        $this -> activa = $activaC; 
    }

    public function getCodigoMoto(){
        return $this -> codigoMoto;
    }
    public function getCostoMoto(){
        return $this -> costoMoto;
    }
    public function getAñoFabricacionMoto(){
        return $this -> añoFabricacionMoto; 
    }
    public function getDescripcionMoto(){
        return $this -> descripcionMoto;
    }
    public function getPorcentajeIncrementoAnual(){
        return $this -> porcIncAnualMoto;
    }
    public function getActiva(){
        return $this -> activa;
    }

    public function setCodigoMoto($codigoSet){
        $this->codigoMoto = $codigoSet;
    }
    public function setCostoMoto($costoSet){
        $this->costoMoto = $costoSet;
    }
    public function setañoFabricacion($añoFabricacionSet){
        $this->añoFabricacionMoto = $añoFabricacionSet;
    }
    public function setdescripcionMoto($descripcionMotoSet){
        $this->descripcionMoto = $descripcionMotoSet;
    }
    public function setPorcentajeIncremento($porcentajeIncrementoAnualSEt){
        $this->porcIncAnualMoto = $porcentajeIncrementoAnualSEt;
    }
    public function setActiva($activaSet){
        $this->activa = $activaSet ;
    }
    public function __toString(){
        return "Codigo de la moto: ".$this->getCodigoMoto()."\n".
                "Costo de la moto: ".$this->getCostoMoto()."\n".
                "Año de fabricacion: ".$this->getAñoFabricacionMoto()."\n".
                "Descripcion de la moto: ".$this->getDescripcionMoto()."\n".
                "Porcentaje de interes anual: ".$this->getPorcentajeIncrementoAnual()."\n".
                "Valor actual de activacion: ".$this->getActiva();
    }

    public function darPrecioVenta(){
        $activaV=$this->getActiva();
        $_compra=$this->getCostoMoto();
        $añoFabricada=$this->getAñoFabricacionMoto();
        $por_inc_anual=$this->getPorcentajeIncrementoAnual();

        if($activaV){
            $añio = 2024 - $añoFabricada;
            $_venta = $_compra + ($_compra*($añio * $por_inc_anual));
        }else{
            return -1;
        }
        return $_venta;
    }
}