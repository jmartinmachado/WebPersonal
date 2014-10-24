<?
	$meta_Description="";
	$meta_Keywords="";
	$meta_Subject="";
	$meta_Title="Admin";
?>
<? include ("partearriba.php") ?>
<style type="text/css">
	.Mensaje{
		border:2px solid #000;
		background:#FFF;
		padding:10px 10px 10px 10px;
		margin-bottom:20px;
		-moz-border-radius: 10px 10px 10px 10px;
		-webkit-border-radius: 10px 10px 10px 10px;
	}
	.Mensaje p{
		color:#000;
	}
	.Mensaje p a{
		margin-left:20px;
		margin-right:20px;
	}
	a{
		color:#000;
	}
	.cargandoAD{
		background: url("imagenes/load.gif") no-repeat;
		padding-left:20px;
		margin-left:20px;
	}
</style>
<script class=javascript>
	function Eliminar_MSJ(IDX){
		var tmp=$("#Barra_Menu").html();
		$("#Barra_Menu").html("<b><a class='cargandoAD'>Cargando</a></b>");
		$("#"+IDX).fadeOut("normal",function(){
			$("#"+IDX).remove();
			$.ajax({
				type: "POST",
				url: "ajax.php",
				data:'AJX=RM&IDX='+encodeURIComponent(IDX),
				success: function(data){
					$("#Barra_Menu").html(tmp);
					if($("#Mensajes").html()==''){
						$("#Mensajes").html("<div class='Mensaje'><p align='center'><b>Nada por aca...</b></p></div>");
					}
				}
			});
		});
	}
	function Refrescar_MSJ(){
		var tmp=$("#Barra_Menu").html();
		$("#Barra_Menu").html("<b><a class='cargandoAD'>Cargando</a></b>");
		$("#Mensajes").fadeOut("normal",function(){
			$.ajax({
				type: "POST",
				url: "ajax.php",
				data:'AJX=RE',
				success: function(data){
					$("#Barra_Menu").html(tmp);
					$("#Mensajes").html(data);
					$("#Mensajes").fadeIn("normal");
				}
			});
		});
	}
	function EliminarT_MSJ(){
		var tmp=$("#Barra_Menu").html();
		$("#Barra_Menu").html("<b><a class='cargandoAD'>Cargando</a></b>");
		$("#Mensajes").fadeOut("normal",function(){
			$.ajax({
				type: "POST",
				url: "ajax.php",
				data:'AJX=ET',
				success: function(){
					$("#Barra_Menu").html(tmp);
					$("#Mensajes").html("<div class='Mensaje'><p align='center'><b>Nada por aca...</b></p></div>");
					$("#Mensajes").fadeIn("normal");
				}
			});
		});
	}
</script>
		<div id="container" class="texto_container">
			<div class="Mensaje ">
				<p id="Barra_Menu" ><b><a href="javascript:Refrescar_MSJ()">Refrescar</a>|<a href="javascript:EliminarT_MSJ()">Eliminar Todos</a></b></p>
			</div>
				<div id="Mensajes"><? Escribir_Mensaje() ?></div>
		</div>
<? include ("parteabajo.php") ?>