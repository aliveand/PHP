<html>
 <head>
  <title>tabla dinamica</title>
 </head>
 <body>

 
 <?php
 
 echo '<table border=1>';
 for ($tr=0; $tr < 4; $tr++){
    echo '<tr>';
        echo'<th>';
        if($tr==0){
          echo '';
        }else{
          echo $tr;
        }
        echo '</th>';  
    for ($td=1; $td < 5; $td++) { 
         echo '<td>';
         echo  $tr*10+$td;
         echo'</td>';
    }
    echo '</tr>';
 }
 echo '</table>';

  ?>
 </body>
</html>