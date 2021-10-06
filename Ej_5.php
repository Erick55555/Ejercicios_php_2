<?php 
class mesesDias{
    private $meses=array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octobre","noviembre","diciembre");
    private $dias;
    public function __construct() {
        $this->rellenar_dias();
    }

    public function rellenar_dias() {
        for ($i = 0; $i < count($this->meses); $i++) {
            if($this->meses[$i]=="enero" || $this->meses[$i]=="marzo" || $this->meses[$i]=="mayo" || $this->meses[$i]=="julio" || $this->meses[$i]=="agosto" || $this->meses[$i]=="octubre" || $this->meses[$i]=="diciembre"){
                $this->dias[$this->meses[$i]]=31;
            }
            else if($this->meses[$i]=="abril" || $this->meses[$i]=="julio" || $this->meses[$i]=="septiembre" || $this->meses[$i]=="noviembre"){
                $this->dias[$this->meses[$i]]=30;
            }
            else{
                $this->dias[$this->meses[$i]]=28;
            }
        }
    }

    public function enseñar_el_array(){
        $tabla= "<table border='1'>";
            $tabla.= "<tr>";
            foreach($this->dias as $mes=>$dia){
                $tabla.="<td>mes: ".$mes." dias: ".$dia."</td>" ;
            }
            $tabla.= "</tr>";
            $tabla.="</table>";
            return $tabla;
         }
            
    }
    
    $mes=new mesesDias();
    echo $mes->rellenar_dias();
    echo $mes->enseñar_el_array()
    
?>