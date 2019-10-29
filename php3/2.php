<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>opdracht_5</h1>
    <?php
    Class UserClass{

      public $voornaam = "dylan";
      public $achternaam = "spin";
      public $geboortedatum = "09-07-2002";
      private $username = "een username";
      private  $password = "een wachtwoord";

      private $_username;

      public function __construct($name) {
        $this->_username = $name;
      }

      public function getUsername() {
        return $this->_username;
     }
   }

      $naam1 = new UserClass('dylan spin');
      echo $naam1->getUsername();
     ?>
     <h1>opdracht_6</h1>
       <h2>Ze maken een html table met php Classes</h2>

     <h1>opdracht_7</h1>
       <h2>Als je de constructor private maakt dan kan die geen objects maken buiten de class.<br>
       wat niet handig is.</h2>

     <h1>opdracht_8</h1>
       <h2>
           rood extends kleur->kan, rood is een kleur<br>
           tesla extends auto's->kan, tesla is een type auto<br>
           mansion extends huis->kan, mansion is een type huis<br>
       </h2>
     <h1>opdracht_9</h1>
       <h2>
           auto's extends tesla->kan niet, niet iedere auto is een tesla.<br>
       </h2>
     <h1>opdracht_11</h1>
       <h2>
           Het is handig wanneer
       </h2>


  </body>
</html>
