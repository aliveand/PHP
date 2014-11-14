<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Generador de arbol</title>
<style>

</style>
</head>
<body>
<?php
	function form(){
		echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="post">
			  <table>
			    	<tr>
				    	<td>Email:</td>
					    <td><input type="text" name="email"></td>
				    </tr>
				    <tr>
					<td colspan="2"><input type="submit" value="Enviar"></td>
				    </tr>
			  </table>
			  </form>';
	}
	function validarEmail($email){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo 'Correo Electronico Valido';
		} else {
			echo 'Correo Electronico Incorrecto';
			form();
		}
	}
	if (empty($_POST['email'])){
		form();
	} else {
		validarEmail($_POST['email']);
	}
?> 
</body>
</head>                                                                                                                                                      
</html>