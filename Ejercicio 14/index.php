<html>
<head>
	<title>Aguja en un pajar</title>
<body>
<?php

	function buscar($pajar, $aguja){
		$initValue = 0;
		$posiciones = array();
		
		while (is_numeric(strpos($pajar, $aguja, $initValue))) {
			$posi= strpos($pajar, $aguja, $initValue);
			 array_push($posiciones, $posi);
			$initValue = $posi + 1;
		}
			//USANDO HEADER
			//if(empty($_POST['aguja']) || empty($_POST['pajar'])){
			//	header('location:index.php');
			//}		
		return $posiciones;
	}
	function mostrar($array, $tipo){

		if ($tipo == true) {
			echo empty($array) ? 'la aguja no existe' : 'la aguja existe';
		} else {
				if (empty($array)) {
					echo 'no se ha encontrado la posicion';
				}
			foreach ($array as $key => $value) {
				echo '<p>Se han encontrado semejansas en las posiciones: '.$value.'</p>';
			};

		}
	}

	if(empty($_POST['aguja']) || empty($_POST['pajar'])) {
	//if(empty($_POST['aguja'])) {
	echo '	<h3>Buscar una aguja en un Pajar</h3>';
	echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">';
	echo '<p><textarea rows="4" cols="50" name="pajar"></textarea></p>
		  <p>Aguja :<input type="text" name="aguja" /></p>
		  <input type="submit" name="posiciones" value="Buscar Posiciones">
		  <input type="submit" name="existe" value="Existe?">
	      </form>';
	} else {
		var_dump($_POST);

		$tipo = empty($_POST['posiciones'])? true : false;
	  	$current=buscar($_POST['pajar'],$_POST['aguja']);
	  	mostrar($current,$tipo);
	}

?>
</body>
</head>
</html>