<? 	if( !defined( '_AUTOGAN' ) && !defined( '_VALID_VVM' ) ) die( 'Restricted access' ); ?>
<?
	$meta_Keywords="Juan, Martin, Machado, Juan Martin Machado, ".$meta_Keywords;
	$meta_Subject=$GLOB_Pagina.$meta_Subject;
	$meta_canonical=$GLOB_Pagina.$meta_canonical;
	$meta_Title="Juan Martín Machado - ".$meta_Title;
	$meta_revisit="1 day";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<!--

+-+-+-+-+ +-+-+-+-+-+-+ +-+-+-+-+-+-+-+
|J|u|a|n| |M|a|r|t|í|n| |M|a|c|h|a|d|o|
+-+-+-+-+ +-+-+-+-+-+-+ +-+-+-+-+-+-+-+

--> 
	<head>
		<meta name="msvalidate.01" content="F62B435AC3D987645717634BB208D6AB"/> 
		<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1"/>
		<meta name='title' content='<? echo $meta_Title ?>'/>
		<meta name='author' content='Juan Martin Machado'/>
		<meta name='subject' content='<? echo $meta_Subject ?>' />
		<meta name='description' content='<? echo $meta_Description ?>'/>
		<meta name='keywords' content='<? echo $meta_Keywords ?>'/>
		<meta name='language' content='spanish'/>
		<meta name='revisit' content='<? echo $meta_revisit ?>'/>
		<meta name='distribution' content='global'/>
		<meta name='robots' content='all'/>

		<link rel='canonical' href='<? echo $meta_canonical ?>'/>
		<link rel="shortcut icon" href="<? echo traducir_url('favicon.ico') ?>" type="image/vnd.microsoft.icon" /> 
		<link href="<? echo traducir_url('css/principal.css') ?>" rel="stylesheet" type="text/css"/>
		
		<meta property="og:title" content="<? echo $meta_Title ?>"/>
		<meta property="og:site_name" content="Juan Martín Machado"/>
		<meta property="og:url" content="<? echo $meta_canonical ?>"/>
		<meta property="og:description"  content="<? echo $meta_Description ?>"/>
		<meta property="og:type" content="blog" />
		<meta property="og:image" content="<? echo traducir_url('img/FB-Pic.jpg') ?>" />

		<meta name="google-site-verification" content="M2SvEdHKwAFJKj-E-Mx4kCM720XTA9-tA8hYVwoParM" />

		<? if (bandera("online")){ ?>
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-10387805-2']);
			_gaq.push(['_trackPageview']);
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		<? } ?>

		<title><? echo $meta_Title ?></title>
		<? if (bandera("online")){ echo '<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"  type="text/javascript" ></script>'; }else{ echo '<script src="'.traducir_url('js/jquery.min.js').'"  type="text/javascript" ></script>';} ?>

	</head>
	<body>
		<div id="wrapper">
			<div id="cabecera"><a href="<? echo traducir_url('inicio') ?>">Juan Mart&iacute;n Machado</a></div>
			<div id="contenedor">
				<div id="menu">
					<a href="<? echo traducir_url('inicio') ?>" <? if ($meta_Title=="Juan Martín Machado - Sobre M&iacute;"){ echo "class=\"Sub\"";}?> >Sobre M&iacute;</a>
					<a href="<? echo traducir_url('proyectos') ?>" <? if ($meta_Title=="Juan Martín Machado - Proyectos"){ echo "class=\"Sub\"";}?> >Proyectos</a>
					<a href="<? echo traducir_url('contacto') ?>"  <? if ($meta_Title=="Juan Martín Machado - Contacto"){ echo "class=\"Sub\"";}?> >Contacto</a>
				</div>
				<div id="cuerpo">
