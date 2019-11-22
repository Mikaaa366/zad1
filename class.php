<?php
class Samochod {
  public $marka;
  public $model;
  public $rokProdukcji;
}
?>


<?php
$samochod = new Samochod();
$samochod->marka = 'Opel';
$samochod->model = 'Insignia';
$samochod->rokProdukcji = 2015;
echo $samochod->marka . ' ' . $samochod->model . ' ' . $samochod->rokProdukcji;
// wyświetli Opel Insignia 2015
?>
