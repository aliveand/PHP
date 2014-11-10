<html>
 <head>
  <title>RAMDOM(algoritmo)</title>
 </head>
 <body>

<?php 
# al a funcion se le pasa una semilla (valor inicial),
# y devolvera un numero ahora ese numero sera la semillla y as sucesivamente
function randomLCG($semilla) {
	$a = 219;
	$c = 0;
	$m = 32749;
	$res=($a*$semilla+$c)%$m;
	return $res;
}
function semi($array){
	$suma = 0;
	for ($i=0; $i <count($array) ; $i++) { 
		$suma += $array[$i];
	} 
	$suma= round($suma);
	return $suma/count($array);
}
$a = 0;
$semilla = microtime();
echo '<table border = 2>';
for ($i=0; $i < 5; $i++) { 
	echo '<tr>';
		for ($j=0; $j < 5; $j++) { 
			$newSemilla=semi($semilla);
			$semilla=randomLCG($semilla);
			echo '<td align = center>'.$semilla.'</td>';
		}
	echo '</tr>';
}
echo '</table>';

?>

 </body>
</html>