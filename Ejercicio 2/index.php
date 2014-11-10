<html>
 <head>
  <title>tablas de multiplicar</title>
 </head>
 <body>
 <?php

 $numInitial= [1,3,4];
 
 foreach ($numInitial as $key => $value) {
 echo '<table border = 1 >';
 echo '<tr><th>TABLA DEL '.$value.'</th>';
    
    for ($i=1; $i <= 12; $i++) { 
      echo '<tr><td align =center>'.$i.' X '.$value.' = '.$i*$value.'</td></tr>';
    }

 echo '</tr></table>';
 echo '</br>';
}
  ?>
 </body>
</html>