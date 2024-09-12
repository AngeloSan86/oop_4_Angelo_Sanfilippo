<?php

/*
Dato il seguente codice di partenza:
class Car {
  private $num_telaio;
}

class Fiat extends Car {
  protected $license;
  protected $name;
}
Completa la classe Fiat con le strutture mancanti e, utilizzando il livello di severita' che ritieni piu' opportuno, estendi i metodi per stampare a terminale la seguente frase: “La mia macchina e' Opel, con targa ND 123 OJ e numero di Telaio 1234“.
*/


class Car {
  private $num_telaio;

  public function __construct($telaio = 1234){
    $this->numTelaio = $telaio;
  }

  public function getNumTelaio() {
    return $this->numTelaio;
}

}

class Fiat extends Car {
  protected $license;
  protected $name;
}

class Opel extends Car {
  protected $license;
  protected $name = "Opel";

  
  public function __construct($targa, $telaio = 1234){

    parent::__construct($telaio);
    $this->license = $targa;
  }

  public function automobileInfo() {
    echo "La mia macchina è " . $this->name . " con targa " . $this->license . " e numero di telaio " . $this->getNumTelaio() . ".";
}
}

$auto = new Opel("ND 123 OJ");
$auto->automobileInfo();
?>