<?php
	//codigo imperativo espaguetti
	$automovil1=(object)["marca"=>"chebrolet","modelo"=>"chevy"];
	$automovil2=(object)["marca"=>"ford","modelo"=>"lobo"];
	$automovil3=(object)["marca"=>"honda","modelo"=>"cvr"];

	//funcion con parametros para imprimir determinado automovil
	function mostrar($automovi){
		echo"<p> hola soy un $automovi->marca, modelo $automovi->modelo</p>"
	}
	mostrar($automovil1);
	mostrar($automovil2);
	mostrar($automovil3);
?>
