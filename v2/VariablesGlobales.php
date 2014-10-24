<?
	error_reporting(0);
	define( '_AUTOGAN',1);
	define( '_VALID_VVM',1);
	require_once("FGC.php");
	require_once("FDE.php");
	require_once("FBD.php");
	$GLOB_Pagina="http://".$_SERVER['HTTP_HOST']."/";
	$GLOB_Pagina_non_protocol="//".$_SERVER['HTTP_HOST']."/";
?>