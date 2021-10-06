<?php 
class cua_Area{
    private $num_ale;
    public function __construct() {
        $this->rellenar_num_ale();
    }

    public function rellenar_num_ale() {
        for ($i = 0; $i < 5; $i++) {
            $this->num_ale[$i]=rand(-10,10);
        }
    }

    public function cal_area($lado){
       $result=0;
        if($lado<0){
           throw new Exception("<br>Este numero: ".$lado." es negativo");
       }else{
            $result=$lado*$lado;
       }
       return $result;
    }

    public function enseñar_el_array(){
        $tabla= "<table border='1'>";
            $tabla.= "<tr>";
            for($i=0;$i<count($this->num_ale);$i++){
                $tabla.="<td>numero: ".$this->num_ale[$i];
                $result=0;
                try{
                    $result=$this->cal_area($this->num_ale[$i]);
                }catch(Exception $e){
                    echo $e->getMessage();
                }
                $tabla.="<td>Area: ".$result."</td>";
            }
            $tabla.= "</tr>";
            $tabla.="</table>";
            return $tabla;
         }
            
    }
    
    $cac=new cua_Area();
    echo $cac->enseñar_el_array()
    
?>