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
    <h1>Eliga Array asociativo:</h1>
    <br><label>palabra 1: </label>
    <input type="text" name="palabra1">
    <br><label>palabra 2: </label>
    <input type="text" name="palabra2">
    <br><label>palabra 3: </label>
    <input type="text" name="palabra3">
    <br><label>palabra 4: </label>
    <input type="text" name="palabra4">
    <br><label>palabra 5: </label>
    <input type="text" name="palabra5">
    <br><input type="submit" value="Enviar"><br><br>
    </form>
</body>
</html>
<?php 
class arrayAso{
    private $palabras;
        private $array_asoc_palabras;

        public function __construct($palabras) {
            $this->palabras = $palabras;
            $this->transformarEnArrayAsoc();
        }

        private function transformarEnArrayAsoc() {
            for ($i = 0; $i < count($this->palabras); $i++) {
                $this->array_asoc_palabras[$this->palabras[$i]] = strlen($this->palabras[$i]); 
            }
        }

        public function enseñar_el_array(){
            echo "palabra 1";
            $tabla= "<table border='1'>";
                $tabla.= "<tr>";
                $tabla.="<td>array asociativo: </td>";
                foreach($this->array_asoc_palabras as $palabra=>$largo){
                    $tabla.="<td>palabra: ".$palabra." largo: ".$largo."</td>" ;
                }
                $tabla.= "</tr>";
                $tabla.="</table>";
                return $tabla;
        }
            
    }
    if((isset($_GET["palabra1"])) && (isset($_GET["palabra2"])) && (isset($_GET["palabra3"])) && (isset($_GET["palabra4"])) && (isset($_GET["palabra5"]))) {
        echo "gorka";
        $pal1= $_GET["palabra1"];
        $pal2= $_GET["palabra2"];
        $pal3= $_GET["palabra3"];
        $pal4= $_GET["palabra4"];
        $pal5= $_GET["palabra5"];
        $palabras=array($pal1,$pal2,$pal3,$pal4,$pal5);
        $Ars=new arrayAso($palabras);
        echo $Ars->enseñar_el_array();
    }
?>

