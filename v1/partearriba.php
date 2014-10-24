<!--
 
+-+-+-+-+ +-+-+-+-+-+-+ +-+-+-+-+-+-+-+
|J|u|a|n| |M|a|r|t|i|n| |M|a|c|h|a|d|o|
+-+-+-+-+ +-+-+-+-+-+-+ +-+-+-+-+-+-+-+
 
--> 
<? require("VariablesGlobales.php"); ?> 
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head> 
		<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon" /> 
		<meta name="msvalidate.01" content="F62B435AC3D987645717634BB208D6AB" /> 
		<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1"> 
		<meta name='title' content='<? echo $meta_Title ?>'> 
		<meta name='author' content='Juan Martin Machado'> 
		<meta name='subject' content='<? echo $meta_Subject ?>'> 
		<meta name='description' content='<? echo $meta_Description ?>'> 
		<meta name='keywords' content='<? echo $meta_Keywords ?>'> 
		<meta name='language' content='spanish'> 
		<meta name='revisit' content='1 day'> 
		<meta name='distribution' content='global'> 
		<meta name='robots' content='all'> 
		<meta name="google-site-verification" content="wH0DTKyN0RHIRIFcj33ou83cOk4aTO_6b2rJ_xvWy0s" />
		<title><? echo $meta_Title ?></title> 
	</head> 
	<link href="css/principal.css" rel="stylesheet" type="text/css"> 
	<!--script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script--> 
	<script src="js/principal.js" type="text/javascript"></script> 
	<style type="text/css"> 
		#cargando{
			font-size: 13px;
			font-family: 'Tahoma';
			font-style: normal;
			font-weight: bold;
			color:#fff;
			text-align:left;
			left:0px;
			top:0px;
			padding-left:10px;
			padding-top:10px;
			z-index:100000;
			position:absolute;
		}
	</style> 
	<body> 
	<div id="cargando" class="cargando">Cargando...</div> 
	<div id="wrapper"  style="visibility:hidden"> 
		<div id="header"> 
			<div id="Midleheader"> 
				<a href="http://www.JuanMartinMachado.com.ar">
					<div class="logo"></div> 
					<div class="logo logoi" id="resplandor"></div> 
				</a>
			</div> 
			<div id="menu"> 
				<?
				$Texto1=" Sobre mí ";
				$Texto2=" Proyectos ";
				$Texto3=" Contacto ";
				switch ($meta_Title){
					case "Juan Martin Machado - Sobre Mi":
						$Texto1="&#187;".$Texto1."&#171;";
					break;
					case "Juan Martin Machado - Proyectos":
						$Texto2="&#187;".$Texto2."&#171;";
					break;
					case "Juan Martin Machado - Contacto":
						$Texto3="&#187;".$Texto3."&#171;";
					break;
				}
				?> 
				<div class="menu_elemento"><a href="<? echo traducir_url("inicio") ?>" class="texto_menu"><? echo $Texto1; ?></a></div> 
				<div class="menu_elemento"><a href="<? echo traducir_url("proyectos") ?>" class="texto_menu"><? echo $Texto2; ?></a></div> 
				<div class="menu_elemento"><a href="<? echo traducir_url("contacto") ?>" class="texto_menu"><? echo $Texto3; ?></a></div> 
			</div> 
		</div> 