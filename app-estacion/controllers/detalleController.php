<?php 

	// carga la vista
	$tpl = new Pork("detalle");


	$idDetalle = explode("=",$_SERVER['REQUEST_URI'])[1];
	
	$tpl->setVars(['ID' => $idDetalle]);

	// imprime la vista en la página
	$tpl->print();

 ?>