<?
	require_once 'VariablesGlobales.php';
	require_once 'FBD_OFFLINE.php';
	require_once 'FGC_OFFLINE.php';

	switch($_POST['ajx']){
	case "EM":
		Eliminar_Mensaje($_POST["IDX"]);
	break;
	case "ENSM":
		echo json_encode(Escribir_Mensaje());
	break;
	case "ET":
		Eliminar_Todo();
	break;
	}
?>