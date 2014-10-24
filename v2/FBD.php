<? 	if( !defined( '_AUTOGAN' ) && !defined( '_VALID_VVM' ) ) die( 'Restricted access' ); ?>
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
?>