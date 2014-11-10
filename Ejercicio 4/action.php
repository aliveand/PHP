<html>
 <head>
  <title>formulario (media de notas)</title>
 </head>
 <body>

 <?php 
 function minNumber($array){
 	$min = array_pop($array);
 	foreach ($array as $key => $value) {
 		 $min = $min < $value ? $min : $value;
 	}
 	return 'el minimo es: '.$min;
 }
 	
 var_dump($_POST);
 #$numbers = array();
 #foreach ($_POST as $key => $value) {
 #	$numbers[]=$value;
 #}
 echo minNumber($_POST);

  ?>
 </body>
</html>