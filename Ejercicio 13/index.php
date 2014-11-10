<html>
<head>
	<title>Crear Tabla(con func_get_args() con formulario)</title>
<body>
<?php
	function create_table(){
		//$columna, $fila, $wdh, $hth, $bg, $border
		$array = func_get_args();
		echo var_dump($array);
		echo '<table border='.$array[5].'>';
		for ($i=0; $i < $array[0]; $i++) { 
			echo '<tr>';
			for ($j=0; $j < $array[1]; $j++) { 
				echo '<td width='.$array[2].' height='.$array[3].' bgcolor='.$array[4].'></td>';
			}
			echo '</tr>';
		}
		echo '</table>';
	}

	if(empty($_POST)){
	echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">';
	echo '<h3>Generador de Tabla</h3>
		  <p>Alto <input type="text" name="hth" /></p>
		  <p>Ancho <input type="text" name="wth" /></p>
		  <p>Color Fondo <input type="text" name="bg" /></p>
		  <p>Color Borde <input type="text" name="border" /></p>
		  <input type="submit" value="Enviar datos!">
	      </form>';
	} else {
	$hth = empty($_POST['hth']) ? 70 : $_POST['hth'];    
	$wth = empty($_POST['wth']) ? 70 : $_POST['wth']; 
	$bg =  empty($_POST['bg']) ? 'blue' : $_POST['bg'];
	$border= empty($_POST['border']) ? 'black' : $_POST['border'];
		create_table(4, 6, $hth, $wth, $bg, $border);
	}
?>
</body>
</head>
</html>