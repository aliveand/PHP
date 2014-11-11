<html>
<head>
	<title></title>
<style>
	.nombre{
		width: 70px;
	}	
	#linea{
		position: absolute;
	}
</style>
</head>
<body>
<?php
	function maxVotos($arary){
		$mayor = 0;
		$mkey = 0;
		foreach ($arary as $key => $value) {
			if ($mayor < $value){
				$mayor=$value;
				$mkey=$key;
			}
		}
		return $mayor;
	}
	function imprimirVotacion($votos){
	$mayor= maxVotos($votos);
	foreach ($votos as $key => $value) {
		$width=70*$value;
		echo '<table><tr>';
		echo '<td>
				<div class="nombre">'.$key.'</div>
			  </td>';
		echo '<td>
			    <div id="linea">
			    	<img src="punto.png" width="'.$width.'" height="10"/>'.$value.'
			    </div></br>
		      </td>';
		echo '</tr></table>';
	}
	echo '<table></tr><td><div class="nombre"></div></td>';
	for ($i=0; $i <= $mayor+2; $i++) { 
		echo '<td>
				<div class="nombre" style="width:66px">';
					echo '|'.$i;
		echo '</div>
			  </td>';
	}
	echo '</tr></table>';
	}

	function my_sort($a,$b){
		if ($a==$b) return 0;
		   return ($a<$b) ? -1 : 1;
	}
	$votos = file('votacion.txt',FILE_IGNORE_NEW_LINES);
	$votos = array_count_values($votos);

	arsort($votos);
	echo '<h3>Ordenado por Votacion</h3>';
	imprimirVotacion($votos);
	
	echo '<h3>Ordenado por Nombre</h3>';	
	uksort($votos, 'my_sort');
	imprimirVotacion($votos);
?>
</body>
</head>
</html>