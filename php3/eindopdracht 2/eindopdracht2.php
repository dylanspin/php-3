<!DOCTYPE html>
<?php
  session_start();
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="eindopdracht2.css">
  </head>
  <body>

  <div class="center">
    <h1 class="hoofd">Memory</h1>
  </div><br>

  <form action="" method="post" >
    <div class="reset">
      <input class="reset" type="submit" name="reset" value="Reset">
    </div>
  </form>

  <div class="vierkant">
    <?php
      include('include.php');
    ?>

    <p id="test"></p>
  </div>
  </body>
</html>
