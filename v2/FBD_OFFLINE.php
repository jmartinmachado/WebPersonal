<? 	if( !defined( '_AUTOGAN' ) && !defined( '_VALID_VVM' ) ) die( 'Restricted access' ); ?>
<?
function Devolver_Mensajes(){
	$FBD_CON=Conectar();
	if ($FBD_CON<>false){
		$sql=mysql_query("SELECT * FROM  `mensaje` ",$FBD_CON);
		$FBD=array();
		while($row=mysql_fetch_array($sql) ){
			$id=$row["id"];
			$nombre=$row["nombre"];
			$email=$row["email"];
			$asunto=$row["asunto"];
			$mensaje=$row["mensaje"];
			$fecha=$row["fecha"];
			$hora=$row["hora"];
			array_push($FBD,array("id" => $id,"nombre" => $nombre,"email" => $email,"asunto" => $asunto,"mensaje" => $mensaje,"fecha" => $fecha,"hora" => $hora));
		}
		mysql_close($FBD_CON);
	}else{
		$FBD="";
	}
	return $FBD;
}
function Eliminar_Mensaje($IDX){
	$FBD_CON=Conectar();
	$sql=mysql_query("DELETE FROM mensaje WHERE id = '$IDX' LIMIT 1",$FBD_CON);
	mysql_close($FBD_CON);
}
function Eliminar_Todo(){
	$FBD_CON=Conectar();
	$sql=mysql_query("TRUNCATE `mensaje`",$FBD_CON);
	mysql_close($FBD_CON);
}
?>