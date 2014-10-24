<? /*--------------------------------*/ ?>
<? require_once 'VariablesGlobales.php' ?>
<? /*--------------------------------*/ ?>
<?
	$meta_Keywords="Proyectos, Ultimos Trabajos, Hitobito, Hitobito.com.ar, Movieteka, Movieteka.com.ar, Eclipse Ink,EclipseInk,Eclipse Ink.com.ar";
	$meta_Subject="proyectos";
	$meta_Description="Mis Proyectos Actules";
	$meta_canonical="proyectos";
	$meta_Title="Proyectos";
?>
<? /*--------------------------------*/ ?>
<? require_once 'Parte_Arriba.php' ?>
<? /*--------------------------------*/ ?>
	<script src="<? echo traducir_url('js/jquery.slideshow.js') ?>" type="text/javascript"></script>
	<div id="slideshow">
		<ul class="slides">
			<li><a href="http://www.eclipseink.com.ar/" target="_blank"><img src="<? echo traducir_url('img_post/EclipseINK.jpg') ?>" width="654" height="338" alt="Eclipse INK" /></a></li>
			<li><a href="http://hitobito.com.ar/" target="_blank"><img src="<? echo traducir_url('img_post/Hitobito.jpg') ?>" width="654" height="338" alt="Hitobito" /></a></li>
			<li><a href="http://movieteka.com.ar/" target="_blank"><img src="<? echo traducir_url('img_post/Movieteka.jpg') ?>" width="654" height="338" alt="Movieteka" /></a></li>
		</ul>
		<span class="arrow previous"></span>
		<span class="arrow next"></span>
	</div>

<? /*--------------------------------*/ ?>
<? require_once 'Parte_Abajo.php' ?>
<? /*--------------------------------*/ ?>
