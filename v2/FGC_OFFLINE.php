<? 	if( !defined( '_AUTOGAN' ) && !defined( '_VALID_VVM' ) ) die( 'Restricted access' ); ?>
<?
	function Escribir_Mensaje(){
		$Obtener=Devolver_Mensajes();
		$Obtener_Count=count($Obtener);
		$FGC="";
		if (empty($Obtener_Count)){
				//$FGC='<li class="Mensaje" id=""><p id="npa"><img class="valign">Nada por acá...</p></li>';
		}else{
			for ($i=0;$i < $Obtener_Count;$i++) {
				$FGC.='
				<li class="Mensaje" id="'.$Obtener[$i]["id"].'"> 
						<p> <span>Nombre:</span> <span>'.$Obtener[$i]["nombre"].'</span> </p>
						<p> <span>Fecha:</span> <span>'.$Obtener[$i]["fecha"].' a las '.$Obtener[$i]["hora"].'</span> </p>
						<p> <span>Correo Electronico:</span> <span>'.$Obtener[$i]["email"].'</span> </p>
						<p> <span>Asunto:</span> <span>'.$Obtener[$i]["asunto"].'</span> </p>
						<p> <span>Mensaje:</span> <span>'.$Obtener[$i]["mensaje"].'</span> </p>
				</li>';
			}
		}
		return array( "total" => $Obtener_Count, "msjs" => $FGC );
	}
?>