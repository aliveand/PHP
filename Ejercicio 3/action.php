<html>
 <head>
  <title>formulario (media de notas)</title>
 </head>
 <body>

 <?php 
 function calcularMedia($name, $array){
 	$result = 0;
 	for ($i=0; $i < count($array); $i++) { 
 		$result += $array[$i];
 	}
 	return $name.' su nota es '.($result)/count($array);
 }
 $nombre = $_POST['nombre'];
 $notas = array($_POST['nota1'], $_POST['nota2']);
 echo calcularMedia($nombre, $notas);
  ?>
 </body>
</html>