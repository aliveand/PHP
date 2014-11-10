
<html>
 <head>
  <title>Formulario Completo</title>
 <style>
 body {
 	background-color:orange;
 }
 </style>
 </head>
 <body>
 <?php
function comprobar($array){
	$sino = false;
	foreach ($array as $key => $value) {
		echo empty($value)? 'el dato '.$key.' esta vacio' : 'el dato '.$key.' definido satisfactoriamente';
		$sino = empty($value)? true : false;
	}
	
	return $sino;
}

 	echo '<table border=2 cellspacing=6 align="center">';
	echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">';
	echo    '<tr> 
				<td>Usuario</td> 		
	 			<td><input type="text" name="usuario" size=23/></td>
	 			<td>Contraseña</td>
	 			<td><input type="text" name="contraseña" size=28/></td>
	 		</tr>';
 	echo '<tr> 
 			<td>Textarea:</td>
 			<td colspan="3"><textarea name="TextoArea" rows="4.5" cols="60"></textarea></td>
 		</tr>';
 	echo'<tr>
 			<td>
 				Opcion 1:<input type="checkbox" name="opcion" value="option1"></br>
 				Opcion 2:<input type="checkbox" name="option" value="option2"></br>
 				Opcion 3:<input type="checkbox" name="opcion" value="option3">
 			</td>
 			<td align="middle">
 			Radio1: <input type="radio" name="radio" value="rad1"><br>
			Radio2: <input type="radio" name="radio" value="rad2">
			</td>
 			<td>
 				seleccion: 
 				<select name="seleccion">
				  <option value="op1">Primera Opcion</option>
				  <option value="op2">Segunda Opcion</option>
				  <option value="op3">Tercera Opcion</option>
				  <option value="op4">Cuarta Opcion</option>
				</select>
		    </td>
 			<td align="middle">
 				selecion multiple</br>
 			<select name="selectMultiple[]" size="4" multiple>
				<option value="Azul" selected>Azul</option>
				<option value="Rojo">Rojo</option>
				<option value="Verde">Verde</option>
				<option value="Amarillo">Amarillo</option>
			</select></td>
 		</tr>';
 	echo'<table align="center">
	 		 <tr>
		 		 <td><input type="submit" value="boton">
		 		 <input type="reset" value="Limpiar">
		 		 <input type="submit" value="Enviar">
		 		 </td>
	 		 </tr>
 		 </table>
 		 </form>';
 	echo '</table>';

comprobar($_POST);
 var_dump($_POST);
 	echo count($_POST);
 	
  ?>
 </body>
</html>