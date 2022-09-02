<?php
	
	$result = 0;

	if (isset($_GET["v1"], $_GET["v2"])) {

		$result = floatval($_GET["v1"]) + floatval($_GET["v2"]);

		echo "El resultado de la suma es ".$result;


	} else {

		echo "El resultado de la suma es ".$result;
	}

?>