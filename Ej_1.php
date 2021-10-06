<?php 
    class Tienda {
        private $num_natu;
        private $factoriales;

        public function __construct() {
            $this->rellenar_natu();
            $this->rellenar_fact();
        }

        public function rellenar_natu() {
            for($i=0;$i<=10;$i++){
                $this->num_natu[$i]=$i;
            }
        }
        public function rellenar_fact(){
            for($i=0;$i<10;$i++){
                $this->factoriales[$i]=$this->calc_Factorial($this->num_natu[$i]);
            }
        }
        public function calc_Factorial($num){
            $result=0;
            for($i=1;$i<=$num;$i++){
                $result+=$i;
            }
            return $result;
        }

        public function enseñar_arrays_natu(){
            $tabla= "<table border='1'>";
            $tabla.= "<tr>";
            $tabla.="<td>Num_natu: </td>";
            for($i=0;$i<count($this->num_natu);$i++){
                $tabla.="<td>".$this->num_natu[$i]."</td>";
            }
            $tabla.= "</tr>";
            $tabla.="</table>";
            return $tabla;
        }
        public function enseñar_arrays_fact(){
            $tabla= "<table border='1'>";
            $tabla.= "<tr>";
            $tabla.="<td>Factoriales: </td>";
            for($i=0;$i<count($this->factoriales);$i++){
                $tabla.="<td>".$this->factoriales[$i]."</td>";
            }
            $tabla.= "</tr>";
            $tabla.="</table>";
            return $tabla;
        }



            
    }
    $tie=new Tienda();
    echo $tie->enseñar_arrays_natu();
    echo $tie->enseñar_arrays_fact();
       

?>