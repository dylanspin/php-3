<?php
include "testinclude.php";
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<br>


     <?php
      Class driehoek implements shapeInterface{

        public function getArea(){
          echo 'driehoek vak';

        }
      }

      Class vierkant{

        public function getArea(){
          echo 'vierkant   vak';

        }
      }

      $drie = new driehoek;
      echo $drie->getArea();

      $vier = new vierkant;
      echo $vier->getArea();

       ?>

  </body>
</html>
