
var tell = 0;
var tell2 = 1;
  //als er goed is geraden dan moet er iets false worden en als het false is dan kan de code van dat de kleur veranderd niet worden gerund op dat vakje

  var vakjes = ["1","1","2","2","3","3","4","4","5","5","6","6","7","7","8","8"]; //moet nog fixen dat er een undif is
  shuffle(vakjes);
  var check = ["",true,true,true,true,true,true,true,true,true,true,true,true,true,true,true,true];
  var goed = ["1","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16"]

  var gelijk = ["","",""]; //de twee nums van de aangeklikte vakjes
  var geklikt =["","",""]; //de twee vakjes voor als het klopt moeten deze twee false worden in check[]


  function Kleur(t){
    var vak = t.id;
    var rand = 7;
    var i;
    tell += 1;

    if(check[vak]){
      document.getElementById(vak).innerHTML = "<br><div class='centerr'><h1 class='num'>"+vakjes[vak]+"</h1</div>";//print de num van het vakje uit
      document.getElementById(vak).style.backgroundColor = "#1B63DF";//veranderd de kleur van het vakje
      gelijk[tell2] = vakjes[vak]; //werkt
      geklikt[tell2] = vak; //werkt
      tell2 += 1;
    }
    else{
    }

    if(gelijk[1]==gelijk[2]){ //checkt als er twee goed zijn zo ja dan worden de locaties false moet nog de kleur weg halen
      check[geklikt[1]] = false;
      check[geklikt[2]] = false;
      goed[geklikt[1]] = "17";
      goed[geklikt[2]] = "17";
      document.getElementById(geklikt[1]).style.backgroundColor ="orange";
      document.getElementById(geklikt[2]).style.backgroundColor ="orange";
    }

    if(tell == 3){
      for(i=1; i<=16; i++){
        document.getElementById(goed[i]).innerHTML = ""; //wist alle nums moet nog zorgen dat niet de goede weg gaan
        document.getElementById(goed[i]).style.backgroundColor = "white"; //maakt als weer wit
        gelijk[i] ="";//maakt alles weer"" in gelijk[]
        geklikt[i] ="";//maakt alles weer"" in geklikt[]
      }
      tell2 = 1;
      tell = 0;
    }
    else{
    }
  }

    function shuffle(a) {
    for ( u =0; u <=16; u++) {
        const j = Math.floor(Math.random() * (u));
        [a[u], a[j]] = [a[j], a[u]];
    }
  }
