<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  
    <?php

    Class User{

       public $voornaam = "Dylan";
       Public $achternaam = "Spin";
       private $geboortedatum  ="09-07-2002";
       private $wachtwoord = "Een goed wachtwooord";
       protected $email ="EenEmail@hotmail.com";

       public function getPass(){
         return $this->wachtwoord;
       }
       public function __construct(){
       }
       public function __destruct(){
         echo '<br>';
         echo $this->geboortedatum;
         echo'<br>';
         echo $this->email;
         echo'<br>';
         echo $this->wachtwoord;
       }
     }
       $Class =  new User;
        echo "<br>";
       echo $Class->voornaam;
        echo"<br>";
       echo $Class->achternaam;

     ?>
  </body>
</html>
