
<h1>Eindopdracht</h1>
<?php

  Class Huis{

      const BR ='<br>';
      public $Woz_Belasting = 0;
      public $Kamer_Belasting = 0;
      private $kamers = 16;
      private $toilets = 3;
      private $vierkanteMeter = 400;
      private $WOZ_Waarde = 400.000;
      public  $totaal = 0;
      private $verwarming = "Vloerverwarming-Houtkachel";
      private $straat = "Veenakkers";
      private $huisnummer = "50";
      private $plaats = "Gieterveen";

      public function __construct(){
          $this->belasting();
          $this->PrintAll();
      }

      public function belasting(){
          if($this->WOZ_Waarde <= 100.000){
              $this->Woz_Belasting = 600;
          }
          elseif ($this->WOZ_Waarde <= 200.000) {
              $this->Woz_Belasting = 2000;
          }
          elseif ($this->WOZ_Waarde > 200.000) {
              $this->Woz_Belasting = 6000;
          }

          if($this->kamers <= 1){
              $this->Kamer_Belasting = 100;
          }
          elseif ($this->kamers <= 3) {
              $this->Kamer_Belasting = 300;
          }
          elseif ($this->kamers > 3) {
              $this->Kamer_Belasting = 800;
          }

          $this->totaal = $this->Woz_Belasting + $this->Kamer_Belasting;

          if($this->plaats == "Amsterdam" || $this->plaats == "Rotterdam" || $this->plaats == "Groningen")
          {
              $this->totaal += 1000;
          }
      }

      private function PrintAll()
      {
          echo "Aantal kamers : ",$this->kamers.self::BR;
          echo "Aantal toilets : ",$this->toilets.self::BR;
          echo "Soorten verwarmingen : ",$this->verwarming.self::BR;
          echo "Huisnummer : ",$this->huisnummer.self::BR;
          echo "Plaats : ",$this->plaats.self::BR;
          echo "Vierkantemeter : ",$this->vierkanteMeter.self::BR;
          echo "WOZ waarde : ",$this->WOZ_Waarde.self::BR;
          echo "Kamer Belasting : ",$this->Kamer_Belasting.self::BR;
          echo "Woz_Belasting : ",$this->Woz_Belasting.self::BR;
          echo "Totale kosten : ",$this->totaal.self::BR;
      }
  }

  $huisClass = new Huis;
?>
