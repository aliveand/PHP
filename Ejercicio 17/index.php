<html>
<head>
	<title>Comprobar la Entrada de Datos</title>
<body>
<?php
	if (empty($_GET)){
	$ArrayEjercicios = array('Ejercicio 5', 'Ejercicio 7', 'Ejercicio 9', 'Ejercicio 11', 'Ejercicio 14', 'Ejercicio 16');
	echo '<form action="'.$_SERVER['PHP_SELF'].'" method="get">
		  <h3>Elejir tipo de formulario</h3>
		  <table>';
	echo  '<select name="ejercicios">';
				echo '<option selected></option>';
	    	foreach ($ArrayEjercicios as $key => $value) {
	    		echo '<option value="'.$value.'">'.$value.'</option>';
	    	}
	echo '</select>';
	echo '</table>
		  <input type="submit" name="Elejir" value="Ejejir"> 
		  <input type="reset" value="Borrar">
	      </form>';
	} else  {
	      $ejercicio=$_GET['ejercicios'];
	      $url= '../'.$ejercicio.'/index.php';
	    	include $url;
	}
?>
</body>
</head>
</html>