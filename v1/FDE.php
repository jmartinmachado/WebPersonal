<?
function Bandera($archivo){
	if(file_exists("bandera/".$archivo)==true){
		$FDE=true;
	}else{
		$FDE=false;
	}
	return $FDE;
}
function traducir_url($url){
	if(Bandera("cortar")){
		if($url=="inicio"){
			return "http://www.JuanMartinMachado.com.ar/";
		}else{
			return "http://www.JuanMartinMachado.com.ar/".$url;
		}
	}else{
		return $url;
	}
}
function Obtener_Fecha(){
	$nombre_mes=array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Setiembre","Octubre","Noviembre","Diciembre");
	$nombre_dia=array ("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
	$dia_semana=intval(strftime("%w"));
	$dia_numero=intval(strftime("%d"));
	$mes=intval(strftime("%m"));
	$a�o=strftime("%Y");
	$hora=strftime("%H:%M:%S");
	return $nombre_dia[$dia_semana].", ".$dia_numero." de ".$nombre_mes[$mes-1]." de ".$a�o;
}
function hora(){
	$hora = getdate(time());
	return ( $hora["hours"] . ":" . $hora["minutes"]); 
}

?>