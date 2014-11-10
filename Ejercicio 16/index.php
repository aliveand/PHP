<html>
<head>
	<title>Comprobar la Entrada de Datos</title>
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
	
		return $posiciones;
	}
	function mostrar($array, $tipo){

		if ($tipo == true) {
			echo empty($array) ? 'la aguja no existe' : 'la aguja existe';
		} else {
				if (empty($array)) {
					echo 'no se ha encontrado la posicion';
				} else {
					foreach ($array as $key => $value) {
						echo '<p>Se han encontrado semejansas en las posiciones: '.$value.'</p>';
					}
				}
		}
	}
	function comprobarDato($dato){
		if(empty($dato)){
				echo '<p>ERROR: Faltan datos</p>';
				header("Refresh: 1.2; url=$_SERVER[PHP_SELF]");
				return false;
		} else {
			$dato = trim($dato);
			return $dato;
		}
	}
	if(!$_POST) {
	//if(empty($_POST['aguja'])) {

	echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
		  <h3>Buscar una aguja en un Pajar</h3>
		  <table>';
	echo    '<tr>
				<td>Texto:</td>
			    <td><textarea rows="4" cols="50" name="pajar"></textarea></td>
			</tr>';
	echo    '<tr>
			    <td>Buscar:</td>
	 	  	    <td><input type="text" name="aguja" /></td>
	 	    </tr>';
	echo '</table>
		  <input type="submit" name="posiciones" value="Buscar Posiciones">
		  <input type="submit" name="existe" value="Existe?">  
		  <input type="reset" value="Borrar">
	      </form>';

	} else {
		var_dump($_POST);
		$aguja=comprobarDato($_POST['aguja']);
		$pajar=comprobarDato($_POST['pajar']);
		$tipo = empty($_POST['posiciones'])? true : false;
		if ($aguja != false && $pajar!=false){
		  	$current=buscar($pajar,$aguja);
		  	mostrar($current, $tipo);
	    }
	}

?>
</body>
</head>
</html>