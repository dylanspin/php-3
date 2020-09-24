<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Opdracht_1</h1>
      <h2>Wat is het verschil tussen een class een object.<br>
          een object maakt het idee dat in de class zit?<br>
      </h2><br>

    <h1>Opdracht_2</h1>
     <h2>
      <?php
        Class NewClass{

          public $voornaam = "Dylan";
          public $achternaam = "Spin";
          public $geboortedatum = "09-07-2002";

        }

        $object = new NewClass;
        var_dump($object);
        echo $object->voornaam;
        echo "<br>";
        echo $object->achternaam;
        echo "<br>";
        echo $object->geboortedatum;
       ?>
     </h2>


<h1>Opdracht_3</h1>
  <h2>
    Public:     Dat het publiek is dat iedereen kan zien en dat je er makkelijk bij kan.<br>
    Private:    Dat Het afgeschermt is dat je er niet zomaar bij kan. <br>
    protected:  Dat het beschermed is je kan er niet bij komen buiten de class zelf<br><br>

    Waarom je niet alles public moet hebben:<br>
    bijvoorbeeld voor wachtwoorden of usernames is het niet handig om het public te hebben. omdat dan iedereen er bij kan.<br>

    en bij somige dingen die belangrijk zijn voor een website bijvoorbeeld zo dat niet iedereen er bij kan<br>
  </h2>

<h1>Opdracht_4</h1>
  <h2>
    <?php
    Class UserClass{

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
    $object2 = new UserClass;
    var_dump($object2);
    echo "<br><br>";

    echo $object2->voornaam;
    echo"<br>";
    echo $object2->achternaam;
    echo "<br>";
     ?>
  </h2>

  </body>
</html>
