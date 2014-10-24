<?
function Conectar(){
	if (Bandera("online")){
		$servidor="192.168.0.192";
		$usuario="martin_machado";
		$password="NXJR9BA3kv";
		$base_datos="eclipseink";
	}else{
		if (Bandera("offline-online")){
			$servidor="190.228.29.67";
			$usuario="martin_machado";
			$password="NXJR9BA3kv";
			$base_datos="eclipseink";
		}else{
			$servidor="localhost";
			$usuario="root";
			$password="";
			$base_datos="eclipseink";
		}
	}
	if (!($link=mysql_connect($servidor,$usuario,$password))){
		$link = false;
	}
	if($link<>false && !(mysql_select_db($base_datos,$link))){
		$link=false;
	}
	return $link;
}
function Agregar_Mensaje($nombre,$email,$asunto,$mensaje,$fecha,$hora){
	$FBD_CON=Conectar();
	if($FBD_CON<>false){
		$sql=mysql_query("INSERT INTO  `eclipseink`.`mensaje` (`id` ,`nombre` ,`email` ,`asunto` ,`mensaje`,`fecha`,`hora`)VALUES (NULL ,  '$nombre',  '$email',  '$asunto',  '$mensaje',  '$fecha',  '$hora');",$FBD_CON);
		if(mysql_affected_rows()>0){
			return 1;
		}else{
			return 0;
		}
		mysql_close($FBD_CON);
	}
}
function Devolver_Mensajes(){
	$FBD_CON=Conectar();
	if ($FBD_CON<>false){
		$sql=mysql_query("SELECT * FROM  `mensaje` ",$FBD_CON);
		$FBD=array("");
		while($row=mysql_fetch_array($sql) ){
			$id=$row["id"];
			$nombre=$row["nombre"];
			$email=$row["email"];
			$asunto=$row["asunto"];
			$mensaje=$row["mensaje"];
			$fecha=$row["fecha"];
			$hora=$row["hora"];
			array_push($FBD,$id,$nombre,$email,$asunto,$mensaje,$fecha,$hora);
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