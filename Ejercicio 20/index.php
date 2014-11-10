<html>
<head>
	<title>Expresiones Regulares</title>
<body>
<?php
	function formulario_evento($year, $month, $day, $hour, $minute, $id, $tittle, $coment){

	} 
echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">';
echo'Dia:';
echo ' 	<select name="dia"><option selected></option>';
		for ($i=1; $i < 31; $i++) { 
		  echo '<option value="'.$i.'">'.$i.'</option>';
		}  
echo 	'</select>';

echo'Mes:';
echo ' 	<select name="mes">';
		for ($i=1; $i < 12; $i++) { 
		  echo '<option value="'.$i.'">'.$i.'</option>';
		}  
echo 	'</select>';

echo'Anio:';
echo ' 	<select name="anio">';
		for ($i=2000; $i < 2037; $i++) { 
		  echo '<option value="'.$i.'">'.$i.'</option>';
		}  
echo 	'</select><br>';

echo ' 	<select name="hora">';
		for ($i=1; $i < 12; $i++) { 
		  echo '<option value="'.$i.'">'.$i.'</option>';
		}  
echo 	'</select>';

echo':';
echo ' 	<select name="minuto">';
		for ($i=0; $i <= 11; $i++) { 
		 	$j=$i*5;
			echo '<option value="'.$j.'">'.$j.'</option>';
		}  
echo 	'</select></br>';
echo   'Titulo:<br><input type="text" name="titulo" /></br>';
echo   'Comentario:<br><textarea name="coment" rows="4" cols="50"></textarea><br>';
echo   '<input type="submit" value="Confirmar">';
echo '</form>';
var_dump($_POST);
?>
</body>
</head>
</html>