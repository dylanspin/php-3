<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h1>Include_2</h1>

  <?php
  Class UserClassTwee{

  public $voornaam = "Dylan";
  public $achternaam = "Spin";
  private $geboortedatum = "09-07-2002";
  private $username = "een naam";
  private $wachtwoord  = "een wachtwoord";

  private function instellingen(){
    echo "deze function is private";
  }
  }
  echo "<br>";
  $object2 = new UserClassTwee;

  echo $object2->voornaam;
  echo"<br>";
  echo $object2->achternaam;
  echo "<br>";
   ?>
  </body>
</html>
