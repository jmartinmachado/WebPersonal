<?
	function Escribir_Mensaje(){
		$obtener=Devolver_Mensajes();
		$LS=count($obtener);
		$FGC="";
		if ($LS==1){
				$FGC.="<div class='Mensaje'>";
				$FGC.="<p align='center'><b>Nada por aca...</b></p>";
				$FGC.="</div>";
		}else{
			for ($i=1;$i < $LS;$i=$i+7) {
				$FGC.="<div class='Mensaje' id='MSJ".$obtener[$i]."'>";
				$FGC.="<a href='javascript:Eliminar_MSJ(\"MSJ".$obtener[$i]."\")'>[X]</a>";
				$FGC.="<p></p>";
				$FGC.="<p><b>Nombre:</b> ".May_Men($obtener[$i+1])."</p>";
				$FGC.="<p><b>Fecha:</b> ".$obtener[$i+5]." a las ".$obtener[$i+6]."</p>";
				$FGC.="<p><b>Email:</b> ".May_Men($obtener[$i+2])."</p>";
				$FGC.="<p><b>Asunto:</b> ".May_Men($obtener[$i+3])."</p>";
				$FGC.="<p>";
				$FGC.="<b>Mensaje:</b>";
				$FGC.="<p>".May_Men($obtener[$i+4])."</p>";
				$FGC.="</p>";
				$FGC.="</div>";
			}
		}
		echo $FGC;
	}
	function May_Men($FGC){
		$FGC=str_replace("<","&lt;",$FGC);
		$FGC=str_replace(">","&gt;",$FGC);
		return $FGC;
	}
?>