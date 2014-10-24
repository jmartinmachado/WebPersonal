<? 	if( !defined( '_AUTOGAN' ) && !defined( '_VALID_VVM' ) ) die( 'Restricted access' ); ?>
<?
	function May_Men($FGC){
		$FGC=str_replace("<","&lt;",$FGC);
		$FGC=str_replace(">","&gt;",$FGC);
		return $FGC;
	}
?>
