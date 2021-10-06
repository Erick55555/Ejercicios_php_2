<?php 
class mes_cump{
    private $meses=array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octobre","noviembre","diciembre");
    private $nombres=array("erick","edrian","gorka","leire","eneritz","nayeli","laura","sara","amayur","lide","eider","victoria");
    private $nom_mes;
    public function __construct() {
        $this->rellenar_nom_mes();
    }

    public function rellenar_nom_mes() {
        for ($i = 0; $i < count($this->nombres); $i++) {
            $this->nom_mes[$this->meses[rand(0,11)]]=$this->nombres[$i];
            $mes=$this->meses[rand(0,11)];
            if(isset($this->nom_mes[$mes])){
                $this->nom_mes[$mes].=", ".$this->nombres[$i];
            }
            else{
                $this->nom_mes[$mes]=$this->nombres[$i];
            }
        }
    }

    public function enseñar_el_array(){
        $tabla= "<table border='1'>";
            $tabla.= "<tr>";
            foreach($this->nom_mes as $mes=>$nombres){
                $tabla.="<td>mes: ".$mes." Nombre: ".$nombres."</td>" ;
            }
            $tabla.= "</tr>";
            $tabla.="</table>";
            return $tabla;
         }
            
    }
    
    $mec=new mes_cump();
    echo $mec->rellenar_nom_mes();
    echo $mec->enseñar_el_array()
    
?>