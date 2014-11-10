<html>
 <head>
  <title>Ordenar Arrays</title>
 </head>
 <body>

 <?php 
 function minNumber($valor){##corregir, esta mal
 	$newArray=array();
 	$newArray[0] = 2;
 	$newArray[1] = 5;
 	$a;
 	# $newArray = [2, 5, ..]
 	# $valor = 1, 9, 3
 	for ($i=count($newArray); $i > 0; $i--) { 
 		if ($newArray[$i]<$valor){
 			  $newArray[]=$valor;
 		}else {
 			$newArray[++$i]=$newArray[$i];
 			$newArray[$i]= $valor;
 		}
 	}
 	var_dump($newArray);
 }
 
 echo minNumber(1);

  ?>
 </body>
</html>