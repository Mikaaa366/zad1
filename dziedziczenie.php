<?php
class Samochod {
  private $numerSeryjny = 123;
  protected $czystosc = 10;
  public $model;
  public function czyJechacNaMyjnie() {
    return this->czystosc < 5;
  }

  public function wjedzNaTrawe() {
    $this->pobrudz(1);
  }

  protected function pobrudz($iloscBrudu) {
    $this->czystosc -= $iloscBrudu;
    if ($this->czystosc < 0)
      $this->czystosc = 0;
  }
}


//dziedziecznie
class Jeep extends Samochod {
  private $rysy = 0;
  public function wjedzNaBloto() {
    $this->pobrudzIPorysuj(1);
  }


  $terenowy = new Jeep();
$terenowy->model = 'Grand Cherokee'; // pole model odziedziczone z klasy Samochod
