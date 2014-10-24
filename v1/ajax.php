<?
	require("VariablesGlobales.php");
	switch($AJX){
	case "AG":
		Agregar_Mensaje($nombre,$email,$asunto,$mensaje,Obtener_Fecha(),hora());
	break;
	case "RM":
		$IDX=trim(str_replace("MSJ","",$IDX));
		Eliminar_Mensaje($IDX);
		echo $IDX;
	break;
	case "RE":
		Escribir_Mensaje();
	break;
	case "ET":
		Eliminar_Todo();
	break;
	}
?>