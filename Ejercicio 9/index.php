<html>
<head>
	<title></title>
<body>
<?php
function saludar(){
	 $saludo = date('H') > 14 ? 'buenas tardes' : 'buenos dias';
	 echo $saludo;
}
saludar();
?>
</body>
</head>
</html>