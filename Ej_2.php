<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej_2</title>
</head>
<body>
<form method="get">
    <h1>Eliga su tabla:</h1>
    <br><label>Numero de filas</label>
    <input type="text" name="filas">
    <br><label>Numero de columnas</label>
    <input type="text" name="columnas">
    <br><input type="submit" value="Enviar"><br><br>
    </form>
</body>
</html>

<?php 
    
    class Tabla {
        private $num1;
        private $num2;

        public function __construct($num1,$num2) {
            $this->num1 = $num1;
            $this->num2 = $num2;
        }

        public function enseñar_la_tabla(){
            $tabla= "<table border='1'>";
            for($i=1;$i<=$this->num1;$i++){
                $tabla.= "<tr>";
                for($j=1;$j<=$this->num2;$j++){
                    $tabla.="<td>"."Fila: ".$i." columna: ".$j."</td>";
                }
            }
            $tabla.= "</tr>";
            $tabla.="</table>";
            return $tabla;
        }
            
    }

    if(isset($_GET["filas"]) && isset($_GET["columnas"])){
        $num1= $_GET["filas"];
        $num2= $_GET["columnas"];
        $tab1 = new Tabla($num1,$num2);
        echo $tab1->enseñar_la_tabla();
    }
?>