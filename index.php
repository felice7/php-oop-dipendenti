<?php


include_once 'traits/stipendio.php';
include_once 'dipendente.php';
include_once 'operaio.php';
include_once 'manager.php';

$persona_1 = new Operaio('Filippo', 'Neri', '112344', A1);
$persona_2 = new Manager('Gianni', 'Porta', '22334', A2);

$persona_1->stampa_dipendente();
$persona_1->paga_oraria = 8;
try{
$stipendio_mese_1 = $persona_1->calcola_stipendio(180);
echo "<p> Stipendio guadagnato da:".$persona_1->nome." ".$persona_1->cognome.": ".$stipendio_mese_1.".</p>";

}catch (\Exception $e){
  echo "<h1>".$e->getMessage()."</h1>";
}

$persona_2->stampa_dipendente();
$persona_2->paga_oraria = 20;
$persona_2->bonus = 500;

try{
$stipendio_mese_2 = $persona_2->calcola_stipendio(160);
echo "<p> Stipendio guadagnato da:".$persona_2->nome." ".$persona_2->cognome.": ".$stipendio_mese_2.".</p>";

}catch (\Exception $e){
  echo "<h1>".$e->getMessage()."</h1>";
}

 ?>
