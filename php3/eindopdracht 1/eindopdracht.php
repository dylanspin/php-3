<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Eindopdracht</h1>
    <?php

    Class huis{

      const BR ='<br>';
      private $belasting;
      private $belasting1;
      private $kamers = 6;
      private $toilets = 3;
      private $verwarming = "Vloerverwarming-Houtkachel";
      private $straat = "Veenakkers";
      private $huisnummer = "50";
      private $plaats = "Gieterveen";
      private $vierkanteMeter = 400;//geen idee
      private $WOZ_Waarde = 400.000;//geen idee



      public function __construct(){
        echo "Aantal slaapkamers ",$this->kamers.self::BR;
        echo "Aantal toilets ",$this->toilets.self::BR;
        echo "Soorten verwarmingen ",$this->verwarming.self::BR;
        echo "Huisnummer ",$this->huisnummer.self::BR;
        echo "Plaats ",$this->plaats.self::BR;
        echo "Vierkantemeter ",$this->vierkanteMeter.self::BR;
        echo "WOZ waarde ",$this->WOZ_Waarde.self::BR;
        echo "<br>";
      }
      public function belasting(){

        if($this->WOZ_Waarde <= 100.000){
          echo "de WOZ belasting is ",$this->belasting = 600,self::BR;
        }
        elseif ($this->WOZ_Waarde <= 200.000) {
          echo "de WOZ belasting is ",$this->belasting = 2000,self::BR;
        }
        elseif ($this->WOZ_Waarde > 200.000) {
          echo "de WOZ belasting is ",$this->belasting = 6000,self::BR;
        }

        if($this->kamers <= 1){
          echo "de kamer belasting is ",$this->belasting1 = 600,self::BR;
        }
        elseif ($this->kamers <= 2 ) {
          echo "de kamer belasting is ",$this->belasting1 = 2000,self::BR;
        }
        elseif ($this->kamers > 3) {
          echo "de kamer belasting is ",$this->belasting1 = 6000,self::BR;
          echo "totaal: ",$this->belasting + $this->belasting1,self::BR;
        }
      }

      public function __destruct(){
      }
    }

    $Class = new huis;
    echo $Class->belasting();


     ?>
  </body>
</html>
