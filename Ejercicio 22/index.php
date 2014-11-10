<html>
<head>
	<title></title>
<style>
	body{
		background-color: A8A8B0;
	}
	table{
		border: 1px solid black;
		width: 300px;
		color:blue;
	}
</style>
</head>
<body>
<?php
$meses = array(
		  array("Enero",31),
		  array("Febreo",28),
		  array("Marzo",31),
		  array("Abril",30),
		  array("Mayo",31),
		  array("Junio",30),
		  array("Julio",31),
		  array("Agosto",30),
		  array("Septiembre",31),
		  array("Octubre",30),
		  array("Noviembre",31),
		  array("Diciembre",30)
);
	function mostrarDias($meses){
		foreach ($meses as $key => $value) {
			$nMeses=$value[0];
			$nDias=$value[1];
			echo '<table><th colspan="7">'.$nMeses.'</th><tr>';

				for ($i=1; $i < $nDias+1; $i++) { 
					echo '<td>'.$i.'</td>';
					if ($i%7 == 0){
						echo '</tr><tr>';
					}
				}
			echo '</table></br>';
		}
	}
mostrarDias($meses);
?>
</body>
</head>
</html>