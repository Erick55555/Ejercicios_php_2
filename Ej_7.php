<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej_4</title>
</head>
<body>
<form method="get">
    <h1>Eliga la potencia:</h1>
    <br><label>numero: </label>
    <input type="text" name="numero">
    <br><label>potencia: </label>
    <input type="text" name="potencia">
    <br><input type="submit" value="Enviar"><br><br>
    </form>
</body>
</html>
<?php 
class Potencia{
    private $numero;
    private $potencia;

    public function __construct($numero,$potencia) {
        $this->numero = $numero;
        $this->potencia = $potencia;
    }

        public function calc_potencia() {
            $result=$this->numero;
            for($i=1;$i<$this->potencia;$i++){
                $result=$result*($this->numero);
            }
            return $result;
        }

        public function enseñar_el_array(){
            $tabla= "<table border='1'>";
                $tabla.= "<tr>";
                $tabla.="<td>Potencia</td>";
                $tabla.="<td>Numero: ".$this->numero." Potencia: ".$this->potencia."</td>" ;
                $tabla.="<td> potencia: ".$this->calc_potencia();
                $tabla.= "</tr>";
                $tabla.="</table>";
                return $tabla;
        }
            
    }
    if((isset($_GET["numero"])) && (isset($_GET["potencia"]))) {
        $numero= $_GET["numero"];
        $potencia= $_GET["potencia"];
        $Pot=new Potencia($numero,$potencia);
        echo $Pot->enseñar_el_array();
    }
?>