<? /*--------------------------------*/ ?>
<? require_once 'VariablesGlobales.php' ?>
<? /*--------------------------------*/ ?>
<?
	$meta_Keywords="Formulario, Contacto";
	$meta_Subject="contacto";
	$meta_Description="Formulario de Contacto";
	$meta_canonical="contacto";
	$meta_Title="Contacto";
?>
<? /*--------------------------------*/ ?>
<? require_once 'Parte_Arriba.php' ?>
<? /*--------------------------------*/ ?>
	<form enctype="multipart/form-data" method="post" name="Form_Contacto" action="">
		<div class="cargando cargando_bg" ></div>
		<fieldset> 
			<input type="text" value="Nombre (requerido)" title="Nombre (requerido)" id="nombre" name="nombre" maxlength="85" />
			<br/>
			<span  class="error" id="nombre_err">&nbsp;</span>
			<br/>
			<input type="text" value="Correo Electronico (requerido)" title="Correo Electronico (requerido)" id="email" name="email" maxlength="85" />
			<br/>
			<span  class="error" id="email_err">&nbsp;</span>
			<br/>
			<input type="text" value="Asunto (requerido)" title="Asunto (requerido)" id="asunto" name="asunto" maxlength="85" />
			<br/>
			<span  class="error" id="asunto_err">&nbsp;</span>
			<br/>
			<textarea id="mensaje" name="mensaje" maxlength="5000" title="Tu Mensaje (requerido)" rows="20">Tu Mensaje (requerido)</textarea>
			<br/>
			<span class="error" id="mensaje_err">&nbsp;</span>
			<br/>
			<input value="Enviar" name="aceptar" id="aceptar" type="button" onclick="Enviar_Comentario()" />
		</fieldset>
	</form>
	<script src="<? echo traducir_url('js/jQuery.ScrollTo.js') ?>" type="text/javascript"></script>
	<script type="text/javascript"> 
		function onfocus_input(o){
			if($(o).val()==$(o).attr('title')){
				$(o).val('');
			}
			$("form #"+$(o).attr("id")+"_err").html("&nbsp;");
		}
		function onblur_input(o){
			if($(o).val()==$(o).attr('title')||$(o).val()==''){
				$(o).val($(o).attr('title'));
			}
		}
		function empty(a){
			var b;
			if(a===""||a===0||a==="0"||a===null||a===false||typeof a==="undefined")return true;
			if(typeof a=="object"){
				for(b in a)return false;
				return true
			}return false;
		}
		function sValidosarCadena(string) {
			var output="";
			string=string.replace(/¿/gi,"&iquest;");
			string=string.replace(/á/gi,"&aacute;");
			string=string.replace(/é/gi,"&eacute;");
			string=string.replace(/í/gi,"&iacute;");
			string=string.replace(/ó/gi,"&oacute;");
			string=string.replace(/ú/gi,"&uacute;");
			string=string.replace(/ñ/gi,"&ntilde;");
			for (var i=0; i<string.length;i++){
				if ( string.charCodeAt(i) > 0 && string.charCodeAt(i) < 127){
					output += string.charAt(i);
				}
			}
			return output;
		}
		function Validar_Mail(valor){
			if(!(/\w{1,}[@][\w\-]{1,}([.]([\w\-]{1,})){1,3}$/.test(valor))){
				return false;
			}else{
				return true;
			}
		}
		$(document).ready(function(){
			$(".cargando").hide().css("visibility","visible");
			$("input[type!='button'], textarea").focus(function() {onfocus_input($(this))});
			$("input[type!='button'], textarea").blur(function() {onblur_input($(this))});
		});
		function Enviar_Comentario(){
			var InpTexts=$("form input[type!='button'], form textarea");
			var listo=1;
			var ult_err="";
			if(!Validar_Mail($("#email").val())){
				listo=0;
				ult_err=$(this).attr("id");
				$("form #email_err").html("El Correo Electronico no es valido");
			}else{
				$("form #email_err").html("&nbsp;");
			}
			$.each(InpTexts,function(){
				if(empty($(this).val()) || $(this).val()==$(this).attr("title")){
					$("form #"+$(this).attr("id")+"_err").html("Campo Obligatorio");
					listo=0;
					if(empty(ult_err)){
						ult_err=$(this).attr("id");
					}
				}
			});
			if (listo==1){
				var La_Data="";
				$.each(InpTexts,function(){
					La_Data = La_Data + $(this).attr("id") + '=' + encodeURIComponent($(this).val()) + '&' ;
				});
				La_Data = La_Data+'ajx='+'AG';
				$("form fieldset").fadeTo("slow",0.5);
				$("form .cargando").fadeTo("slow",1.0);
				$.ajax({
					type: 'POST',
					url: "AJAX.php",
					data:La_Data,
					success: function(){
						Mensaje ("Mensaje Enviado! Te responderé a la brevedad.");
					},
					error: function() {
						Mensaje ("Hubo un error!. Intente más tarde.");
					}
				});
			}else{
				$.scrollTo("form #"+ult_err,500,{offset:-50});
			}
			function Mensaje (msj) {
				$("form fieldset").fadeTo("slow",0.0,function() {$(this).hide();});
				$("form  .cargando").fadeTo("slow",0.3,function () {
					$(this).removeClass("cargando_bg").html('<img class="valign">'+ msj).fadeTo("slow",1.0);
					$.each(InpTexts,function(){
						$(this).val($(this).attr("title"))
					});
				});
			}
		}
	</script>
<? /*--------------------------------*/ ?>
<? require_once 'Parte_Abajo.php' ?>
<? /*--------------------------------*/ ?>
