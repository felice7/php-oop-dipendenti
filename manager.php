<?php

class Manager extends Dipendente {
  public $dipartimento;
  public $bonus;

  function __construct($_nome, $_cognome, $_matricola, $_dipartimento){
    parent::__construct($_nome, $_cognome, $_matricola);
    $this->dipartimento = $_dipartimento;
}
    public function stampa_dipendente(){
      echo "<p>".$this->matricola." - ".$this->cognome."  ".$this->nome. " Dipartimento: " .$this->dipartimento. "</p>";
    }

    function calcola_stipendio($ore_lavorate){

      $paga_base = parent::calcola_stipendio($ore_lavorate);
      if (!is_int($this->bonus)) {
        throw new \Exception("hai inserito un bonus errato!");

      }

      return $paga_base+($this->bonus);

    }
    }


 ?>
