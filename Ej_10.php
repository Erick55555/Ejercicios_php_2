<?php 
class Persona{
    private $dni;
    private $nombre;
    private $apellido;
    public function __construct($dni,$nombre,$apellido) {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function nombre_completo() {
        echo $this->nombre." ".$this->apellido;
    }

    public function getdni() {
        return $this->dni;
    }

    public function getnombre() {
        return $this->nombre;
    }

    public function getapellido() {
        return $this->apellido;
    }

    public function setdni($dni) {
        $this->dni = $dni;
    }

    public function setnombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setapellido($apellido) {
        $this->apellido = $apellido;
    }
}
