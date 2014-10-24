<?
	if( !defined( '_AUTOGAN' ) && !defined( '_VALID_VVM' ) ) die( 'Restricted access' );
	function Bandera($archivo){
		if(file_exists("bandera/".$archivo)==true){
			$FDE=true;
		}else{
			$FDE=false;
		}
		return $FDE;
	}
	function traducir_url($url){
		global $GLOB_Pagina;
		global $GLOB_Pagina_non_protocol;
		if(Bandera("cortar")){
			if($url=="inicio"){
				return $GLOB_Pagina;
			}else{
				if (Extencion($url)=="css" || Extencion($url)=="jpg"  || Extencion($url)=="js" || Extencion($url)=="ico"){
					return $GLOB_Pagina_non_protocol.$url;
				}else{
					return $GLOB_Pagina.$url;
				}
			}
		}else{
			return $url;
		}
	}
	function HoraStr(){
		$hora = getdate(time());
		return ( $hora["hours"] . ":" . $hora["minutes"] . ":" . $hora["seconds"] ); 
	}
	function FechaStr(){
		return date("Y-m-d");
	}
	function Extencion($name) {
		if (strstr($name, ".")) {
			$ext = str_replace(".", "", strrchr($name, "."));
		} else {
			$ext = "";
		}
		return $ext;
	}
?>