<?
	$meta_Description="Pagina de Contacto";
	$meta_Keywords="Juan Martin Machado,Juan ,Martin, twitter,facebook,9gag,googleplus,redes sociales,redes,sociales,sobre,mi,infomacion,Machado,freelance,webmaster,soluciones web,diseñador,contacto,JMartinMachado,@JMartinMachado, web,San Luis, Argentina,Creacion de Paginas Web,hosting";
	$meta_Subject="www.JuanMartinMachado.com.ar/contacto";
	$meta_Title="Juan Martin Machado - Contacto";
?>
<? include ("partearriba.php") ?>
		<script class=javascript>
			$(document).ready(function(){
				$("#formulario").removeClass("CampoLoad");
			});
			function onfocus_input(o){
				if($(o).val()==$(o).attr('title')){
					$(o).val('');
				}
			}
			function onblur_input(o){
				if($(o).val()==$(o).attr('title')||$(o).val()==''){
					$(o).val($(o).attr('title'));
					$(o).css("color","#898888");
				}
			}
			function keypress_intro_comentario(o){
				$("#"+o+"_err").html("&nbsp");
				$("#"+o).css("color","#000");
			}
			function empty(a){
				var b;
				if(a===""||a===0||a==="0"||a===null||a===false||typeof a==="undefined")return true;
					if(typeof a=="object"){
					for(b in a)return false;
					return true
				}
				return false;
			}
			function Validar_Mail(valor){
				if(!(/\w{1,}[@][\w\-]{1,}([.]([\w\-]{1,})){1,3}$/.test(valor))){
					return false;
				}else{
					return true;
				}
			}
			function Enviar_Comentario(){
				var t=0;
				if (empty($("#nombre").val()) || $("#nombre").val()==$("#nombre").attr('title')){
					$("#nombre_err").html("Este campo es obligatorio");
				}else{
					$("#nombre_err").html("&nbsp");
					t++;
				}
				if (empty($("#email").val()) || $("#email").val()==$("#email").attr('title')){
					$("#email_err").html("Este campo es obligatorio");
				}else{
					if (!Validar_Mail($("#email").val())){
						$("#email_err").html("No es un Email valido");
					}else{
						$("#email_err").html("&nbsp");
						t++;
					}
				}
				if (empty($("#asunto").val()) || $("#asunto").val()==$("#asunto").attr('title')){
					$("#asunto_err").html("Este campo es obligatorio");
				}else{
					$("#asunto_err").html("&nbsp");
					t++;
				}
				if (empty($("#mensaje").val()) || $("#mensaje").val()==$("#mensaje").attr('title')){
					$("#mensaje_err").html("Este campo es obligatorio");
				}else{
					$("#asunto_err").html("&nbsp");
					t++;
				}
				if (t==4){
					$("#Field_formulario").fadeOut("fast", function(){
						$("#formulario").addClass("CampoLoad");
						$.ajax({
							type: "POST",
							url: "ajax.php",
							data:'AJX=AG&nombre='+encodeURIComponent($("#nombre").val())
							+'&email='+encodeURIComponent($("#email").val())
							+'&asunto='+encodeURIComponent($("#asunto").val())
							+'&mensaje='+encodeURIComponent($('#mensaje').val()),
							success: function(data){
								$("#formulario").removeClass("CampoLoad");
								$("#formulario").addClass("CampoOK");
								$("#formulario").html('<table width="100%" height="100%" border=0><td><td><img class="valign">Gracias! Tu Mensaje a sido enviado con éxito, te responderé a la brevedad.</td></table>');
							}
						});
					});
				}
			}
		</script>
		<div id="container" class="texto_container">
		<p align="center">
			<form id="formulario"  class="CampoLoad">
				<div id="Field_formulario">
					<input type="text" value="Nombre (requerido)" class="Tipo_input" title="Nombre (requerido)" id="nombre" maxlength="100" onkeypress="keypress_intro_comentario(this.id)" onfocus="onfocus_input(this)" onblur="onblur_input(this)">
					<div  class="Error" id="nombre_err">&nbsp</div>
					<br>
		
					<input type="text" value="Email (requerido)" class="Tipo_input" title="Email (requerido)" id="email" maxlength="100" onkeypress="keypress_intro_comentario(this.id)" onfocus="onfocus_input(this)" onblur="onblur_input(this)">
					<div  class="Error" id="email_err">&nbsp</div>
					<br>
		
					<input type="text" value="Asunto (requerido)"  class="Tipo_input"  title="Asunto (requerido)" id="asunto" maxlength="100" onkeypress="keypress_intro_comentario(this.id)" onfocus="onfocus_input(this)" onblur="onblur_input(this)">
					<div  class="Error" id="asunto_err">&nbsp</div>
					<br>
					
					<textarea id="mensaje"  class="Tipo_input Tipo_TextArea"  maxlength="500" onkeypress="keypress_intro_comentario(this.id)" onfocus="onfocus_input(this)" onblur="onblur_input(this)" title="Tu Mensaje (requerido)">Tu Mensaje (requerido)</textarea>
					<div  class="Error" id="mensaje_err">&nbsp</div>
					<br>

					<input id="aceptar" value="Enviar" name="aceptar" type="button" class="CampoBoton" onclick="Enviar_Comentario()">
				</div>
			</form>
		</p>
		</div>

<? include ("parteabajo.php") ?>