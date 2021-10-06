<?php 
    
    class arrayAle {
        private $numeros_ale;
        private $mayor;
        private $menor;
        private $suma;
        private $media;
        public function __construct() {
            $this->rellenar_array();
            $this->menor = 101;
            $this->mayor = 0;
            $this->calcular_mayor();
            $this->calcular_menor();  
        }


        private function calcular_media(){
            for($i=0;$i<20;$i++){
                $this->numeros_ale[$i]=rand(1,100);
            }
        }

        private function rellenar_array(){
            for($i=0;$i<20;$i++){
                $this->numeros_ale[$i]=rand(1,100);
                $this->suma+=$this->numeros_ale[$i];
            }
            echo "Esta es la suma de todos los numeros: ".$this->suma;
            echo "<br>Esta es la media de todos los numeros: ".($this->suma/20);
        }
        public function calcular_mayor(){
            for($i=0;$i<count($this->numeros_ale);$i++){
                if($this->mayor<$this->numeros_ale[$i]){
                    $this->mayor=$this->numeros_ale[$i];
                }
            }
        }

        public function calcular_menor(){
            for($i=0;$i<count($this->numeros_ale);$i++){
                    if($this->menor>$this->numeros_ale[$i]){
                        $this->menor=$this->numeros_ale[$i];
                    }
                
            }
        }

        public function enseñar_la_tabla(){
            sort($this->numeros_ale);
            $tabla= "<table border='1'>";
            $tabla.= "<tr>";
            $tabla.="<td>Numeros aleatorios: </td>";
            for($i=0;$i<count($this->numeros_ale);$i++){
                if($this->numeros_ale[$i]==$this->mayor){
                    $tabla.="<td style='color:blue'>".$this->numeros_ale[$i]."</td>";
                }
                else if($this->numeros_ale[$i]==$this->menor){
                    $tabla.="<td style='color:green'>".$this->numeros_ale[$i]."</td>";
                }
                else{
                   $tabla.="<td>".$this->numeros_ale[$i]."</td>"; 
                }
            }
            $tabla.= "</tr>";
            $tabla.="</table>";
            return $tabla;
        }      
    }
    $Ara=new arrayAle();
    echo $Ara->enseñar_la_tabla();
?>