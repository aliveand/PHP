<html>
<head>
	<title></title>
<style>
	body{
		background-color: A8A8B0;
	}
	table{
		border: 1px solid black;
		color:blue;
	}
	td{
		border: 1px solid black;
	}
	th{
		border: 1px solid black;
	}	
</style>
</head>
<body>
<?php

	function comprobarNombre($nombre,$agenda){
		foreach ($agenda as $key => $value) {
			if (strtolower($nombre) === strtolower($key)) {
				return $value;
			}
		}
		return false;
	}
	function mostrarNombre($nombre){
		echo '<table><tr>
			 <th>Nombre</th>
			 <th>Direccion</th>
			 <th>Telefono</th>
			 <th>Email</th>
			 </tr><tr>';
		foreach ($nombre as $key => $value) {
			echo '<td>'.$value.'</td>';
		}
		echo '</tr></table>';
	}
	function mostrarAgenda($agenda){
		echo '<table><tr>
			 <th>Nombre</th>
			 <th>Direccion</th>
			 <th>Telefono</th>
			 <th>Email</th>
			 </tr>';
		foreach ($agenda as $key => $value) {
			echo '<tr>';
			foreach ($value as $key => $value2) {
				echo '<td>'.$value2.'</td>';
			}
		}

		echo '</tr></table>';
	}
$agenda = array(
				'Jorge'   => array('Jorge', 'Ctra. Valencia Km. 7',  989898981, 'Jorge@micorreo.mio'),
				'Augistin'=> array('Augistin','Ctra. Valencia Km. 7',989898981, 'Augistin@micorreo.mio'),
				'Javier'  => array('Javier', 'Ctra. Valencia Km. 7', 989898981, 'Javier@micorreo.mio'),
);

if (empty($_POST)){
echo'<form action="'.$_SERVER['PHP_SELF'].'" method="post">
	 <p>Su nombre: <input type="text" name="nombre" /></p>
	 <input type="submit" name="xNombre" value="Buscar Nombre">
	 <input type="submit" name="xAgenda" value="Mostrar Agenda">
	</form>';
} else{
	$nombre= comprobarNombre($_POST['nombre'],$agenda);
	if ($nombre) {
		echo isset($_POST['xNombre']) ? mostrarNombre($nombre) : mostrarAgenda($agenda);
	}else{
		echo '<p>El nombre no existe le nombre</p>';
		header('Location: '.$_SERVER['PHP_SELF']);
	}
}
?>
</body>
</head>
</html>