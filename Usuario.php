<?php 
include("Ej_10.php");
class Usuario extends Persona {
    private $puntos;
    public function __construct($puntos,$dni,$nombre,$apellido) {
        parent::__construct($dni,$nombre,$apellido);
        $this->puntos = $puntos;
    }

    public function cuantos_puntos(){
        if($this->puntos>100){
            echo "<br>tienes mas de 100 puntos";
        }else{
            echo "<br>Tienes menos de 100 puntos";
        }
    }
    public function getPuntos() {
        return $this->puntos;
    }

    public function setPuntos($punto) {
        $this->puntos = $punto;
    }

    public function nombre_completo(){
        echo "User ".$this->getnombre()." ".$this->getapellido();
    }
}
$puntos=rand(1,100);
    $usu=new Usuario($puntos,"51279472Y","Erick","Ibañez");
    echo $usu->nombre_completo();
    echo $usu->cuantos_puntos();
?>