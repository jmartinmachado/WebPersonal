<?
	require("VariablesGlobales.php");
	switch($_POST['ajx']){
	case "AG":
		echo json_encode(array("Exito"=> Agregar_Mensaje(May_Men($_POST['nombre']),May_Men($_POST['email']),May_Men($_POST['asunto']),May_Men($_POST['mensaje']),FechaStr(),HoraStr())));
	break;
	}
?>