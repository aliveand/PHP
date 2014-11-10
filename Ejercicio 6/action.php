<html>
 <head>
  <title>Ordenar Arrays</title>
 </head>
 <body>

 <?php  
 	#FORMA NORMAL----------------
 	function letra_dni1($num){
 		$dni = array('T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E');
 		return $num.'-'.$dni[$num%23];
 	}
 	echo '<p>DE FORA NORMAL</p>';
 	echo '<p>'.letra_dni1($_POST['num']).'</p>';
 	#------------------

 	#CON $GLOBALS-----------------
  	$dni2 = array('T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E');
 	$num=$_POST['num'];
 	function letra_dni2(){
 		$arrayLetras = $GLOBALS['dni2'];
 		$numero = $GLOBALS['num'];
 		return $numero.'-'.$arrayLetras[$numero%23];

 	}
 	echo '<p>USANDO GLOBALS</p>';
 	echo '<p>'.letra_dni2().'<p>';
 	#-----------------------------
  ?>
 </body>
</html>