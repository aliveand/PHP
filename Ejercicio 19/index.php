<html>
<head>
	<title>Expresiones Regulares</title>
<body>
<?php
	function letra_dni($cadenaN){
 		$dni = array('T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E');
 		return $dni[$cadenaN%23];
 	}
	function validarDni($dni) {
	    $str = trim($dni);  
	    $str = str_replace("-","",$str);  
	    $str = str_ireplace(" ","",$str);  
 	    $cadenaN = substr($str,0,strlen($str)-1); 
 	   
 	    if (is_numeric($cadenaN)){ 
 	    	$letra = substr($str,-1,1);
 	    	
 	    	
	         if ($letra == letra_dni($cadenaN)) {

	         	return 'dni valido';
	         }
	    }  
	    return 'dni invalido ';
	}

	function is_email($email) { 
	
		if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$email)) {
		 	return 'Correcto';
		} 
		 	return 'incorrecto'; 
	}
	$email = 'g9-angelito@hotmail.com';
	//echo $email.'<br>';
	//echo is_email($email)? 'correcto' : 'incorrecto';
	echo validarDni('7076142D');
	echo is_email($email);
?>
</body>
</head>
</html>