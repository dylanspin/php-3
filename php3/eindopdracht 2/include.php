<?php
error_reporting(1);

    Class Vakken{

      const BR ='<br>';
      public $rand = "4";
      public $vak =
          '<div class="column">
             <div class="niks" name="niks" value="" id="17"></div>
             <div class="vak" name="1" value=""  id="1" onclick="Kleur(this)"></div><br>
             <div class="vak" name="2" value=""  id="2" onclick="Kleur(this)"></div><br>
             <div class="vak" name="3" value=""  id="3" onclick="Kleur(this)"></div><br>
             <div class="vak" name="4" value=""  id="4" onclick="Kleur(this)"></div>
           </div>
           <div class="column">
              <div class="vak" name="5" value=""  id="5" onclick="Kleur(this)"></div><br>
              <div class="vak" name="6" value=""  id="6" onclick="Kleur(this)"></div><br>
              <div class="vak" name="7" value=""  id="7" onclick="Kleur(this)"></div><br>
              <div class="vak" name="8" value=""  id="8" onclick="Kleur(this)"></div>
            </div>
            <div class="column">
               <div class="vak" name="9" value=""  id="9" onclick="Kleur(this)"></div><br>
               <div class="vak" name="10" value=""  id="10" onclick="Kleur(this)"></div><br>
               <div class="vak" name="11" value=""  id="11" onclick="Kleur(this)"></div><br>
               <div class="vak" name="12" value=""  id="12" onclick="Kleur(this)"></div>
             </div>
             <div class="column">
                <div class="vak" name="13" value=""  id="13" onclick="Kleur(this)"></div><br>
                <div class="vak" name="14" value=""  id="14" onclick="Kleur(this)"></div><br>
                <div class="vak" name="15" value=""  id="15" onclick="Kleur(this)"></div><br>
                <div class="vak" name="16" value=""  id="16" onclick="Kleur(this)"></div>
              </div>';

      public $script =
      '<script src="include.js">
      </script>';

      public function __construct(){
        echo $this->vak;
        echo $this->script;
      }

      public function __destruct(){
      }
    }

    $Class = new Vakken;
 ?>
