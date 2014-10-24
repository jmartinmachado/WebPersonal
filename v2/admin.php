<?
	$cache_expire = 60*60*24*365;
	header("Pragma: public");
	header("Cache-Control: maxage=".$cache_expire);
	header('Expires: '.gmdate('D, d M Y H:i:s', time()+$cache_expire).' GMT');
?>
<? /*--------------------------------*/ ?>
<? require_once 'VariablesGlobales.php' ?>
<? require_once 'FBD_OFFLINE.php' ?>
<? require_once 'FGC_OFFLINE.php' ?>
<? /*--------------------------------*/ ?>
<?
	$meta_Keywords="diseño, desarrollo, mantenimiento,sitios web, soluciones informaticas";
	$meta_Subject="";
	$meta_canonical="";
	$meta_Description="Me llamo Juan Martín Machado. Soy diseñador Web y Programador";
	$meta_Title="Sobre M&iacute;";
?>
<? /*--------------------------------*/ ?>
<? require_once 'Parte_Arriba.php' ?>
<? /*--------------------------------*/ ?>
<? $Obtener_Mensaje=Escribir_Mensaje(); ?>
<link href="<? echo traducir_url('css/admin.css') ?>" rel="stylesheet" type="text/css">
</style>
<form><div class="cargando"></div>
	<fieldset>
		<input type="button" class="Boton" value="Actualizar" id="Actualizar" name="_" />
		<input type="button" class="Boton" value="Borrar" id="Borrar" name="_" />
		<input type="button" class="Boton" value="Borrar Todos" id="Borrar_Todo" name="_"/>
		<input type="button" class="Boton" value="<<" id="msj_ant" disabled  name="_"  />
		<input type="button" class="Boton" value=""   id="cuenta"  disabled />
		<input type="button" class="Boton" value=">>" id="msj_sig" name="_" />
	</fieldset>
</form>
<div id="Mensajes"><ul><? echo $Obtener_Mensaje["msjs"]; ?></ul></div>
<script type="text/javascript">
	var Total=<? echo $Obtener_Mensaje["total"]; ?>;
	var Actual=1;
	$("#msj_ant").click(function () {
		if (Actual!=1){
			Actual=Actual-1;
			$("#Mensajes ul").animate({"margin-left": ($(".Mensaje").outerWidth()+250)*(-(Actual-1))}, "fast" );
			$("#msj_sig").removeAttr("disabled"); 
			Cuenta_Cuenta();
			if (Actual==1)$(this).attr("disabled","disabled");
		}
	});
	$("#msj_sig").click(function () {
		if((Actual)<Total){
			Actual=Actual+1;
			$("#Mensajes ul").animate({"margin-left": ($(".Mensaje").outerWidth()+250)*(-(Actual-1))}, "fast" );
			$("#msj_ant").removeAttr("disabled"); 
			Cuenta_Cuenta();
			if((Actual)>=Total)$(this).attr("disabled","disabled");
		}	
	});
	$("#Borrar").click(function () {
		$(this).val("Cargando...");
		$("form fieldset, #Mensajes").fadeTo("slow",0.5);
		$("form .cargando").fadeTo("slow",1.0,function () {
			var ID_MSJS=$($(".Mensaje")[Actual-1]).attr("id");
			var La_Data = new FormData();
			La_Data.append('ajx', "EM");
			La_Data.append('IDX', ID_MSJS);
			$.ajax({
				cache: false,
				contentType: false,
				processData: false,
				type: 'POST',
				url: "AJAX_OFFLINE.php",
				data:La_Data,
				success: function(){
					$("#msj_ant").click();
					Total=Total-1;
					$("#Mensajes li[id='"+ID_MSJS+"']").remove();
					Cuenta_Cuenta();
					$("form fieldset, #Mensajes").fadeTo("slow",1.0);
					$("form .cargando").fadeTo("slow",0.0,function() {$(this).hide();});
				}
			});
		});
		$(this).val("Borrar");
	});
	$("#Borrar_Todo").click(function () {
		$(this).val("Cargando...");
		$("form fieldset, #Mensajes").fadeTo("slow",0.5);
		$("form .cargando").fadeTo("slow",1.0,function () {
			var La_Data = new FormData();
			La_Data.append('ajx', "ET");
			$.ajax({
				cache: false,
				contentType: false,
				processData: false,
				type: 'POST',
				url: "AJAX_OFFLINE.php",
				data:La_Data,
				success: function(){
					$("#msj_ant").click();
					Total=0;
					$("#Mensajes li").remove();
					Cuenta_Cuenta();
					$("form fieldset, #Mensajes").fadeTo("slow",1.0);
					$("form .cargando").fadeTo("slow",0.0,function() {$(this).hide();});
				}
			});
		});
		$(this).val("Borrar Todos");
	});
	$("#Actualizar").click(function () {
		$(this).val("Cargando...");
		$("form fieldset, #Mensajes").fadeTo("slow",0.5);
		$("form .cargando").fadeTo("slow",1.0,function () {
			var La_Data = new FormData();
			La_Data.append('ajx', "ENSM");
			$.ajax({
				cache: false,
				contentType: false,
				processData: false,
				type: 'POST',
				url: "AJAX_OFFLINE.php",
				data:La_Data,
				success: function(data){
					var obj = jQuery.parseJSON(data);
					Total=obj.total
					$("#Mensajes li").remove();
					$("#Mensajes ul").append(obj.msjs);
					$("#Mensajes ul").css("width",$("#Mensajes li").length*(848+125));
					Cuenta_Cuenta();
					$("form fieldset, #Mensajes").fadeTo("slow",1.0);
					$("form .cargando").fadeTo("slow",0.0,function() {$(this).hide();});
				}
			});
		});
		$(this).val("Actualizar");
	});
	function Cuenta_Cuenta(){
		if (Total>0){
			$("#cuenta").val((Actual < 10 ? a="0"+Actual : a=Actual)+ "/"+ (Total < 10 ? a="0"+Total : a=Total));
			$(".Boton[id!='Actualizar'][id!='cuenta']").attr("name","_").removeAttr("disabled");
		}else{
			$("#cuenta").val("--");
			$(".Boton[id!='Actualizar']").attr("disabled","disabled").removeAttr("name"); 
			$("#Mensajes ul").append('<li class="Mensaje"><p id="npa"><img class="valign">Nada por acá...</p></li>');
		}
	}
	$(document).ready(function(){
		$(".cargando").hide().css("visibility","visible");
		$("#Mensajes ul").css("width",$("#Mensajes li").length*(848+125));
		Cuenta_Cuenta();
	});
</script >
<? /*--------------------------------*/ ?>
<? require_once 'Parte_Abajo.php' ?>
<? /*--------------------------------*/ ?>
