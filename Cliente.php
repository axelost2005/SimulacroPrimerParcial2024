<?php

class Cliente{
    private $nombreCliente;
    private $apellidoCliente; 
    private $dadoBaja;
    private $tipoDocCliente; 
    private $numeroDocCliente;

    
    public function __construct($nombre,$apellido,$dadoBajaC,$tipoDoc,$numeroDoc){
        $this->nombreCliente = $nombre;
        $this->apellidoCliente = $apellido;
        $this->dadoBaja = $dadoBajaC;
        $this->tipoDocCliente = $tipoDoc;
        $this->numeroDocCliente = $numeroDoc;
    }
    public function getNombreCliente(){
        return $this->nombreCliente;
    }
    public function getApellidoCliente(){
        return $this->apellidoCliente ;
    }
    public function getDadoBaja(){
        return $this->dadoBaja;
    }
    public function getTipoDocCliente(){
        return $this->tipoDocCliente ;
    }
    public function getNumDocCliente(){
        return $this->numeroDocCliente;
    }

    public function setNombreCliente($nombreS){
        $this->nombreCliente = $nombreS;
    }
    public function setApellidoCliente($apellidoS){
        $this->apellidoCliente = $apellidoS;
    }
    public function setDadoBaja($dadoBajaS){
        $this->dadoBaja = $dadoBajaS;
    }
    public function setTipoDocCliente($tipoDocClienteS){
        $this->tipoDocCliente = $tipoDocClienteS;
    }
    public function setNumDocCliente($numeroDocClienteS){
        $this->numeroDocCliente = $numeroDocClienteS;
    }
    public function __toString(){
        return "Nombre del cliente: ".$this->getNombreCliente()."\n".
                "Apellido del cliente: ".$this->getApellidoCliente()."\n".
                "¿Esta dado de baja? ".$this->getDadoBaja()."\n".
                "Tipo de documento: ".$this->getTipoDocCliente()."\n".
                "Numero de documento: ".$this->getNumDocCliente()."\n";
    }
    public function dadoDeBajaCliente(){
        $cumple = false;
        if(strcmp($this->getDadoBaja(),"dado de baja") == 0){
            $cumple=true;
        }
        return $cumple;
    }
}