<?php
while($zmienna < 101 && $inna > 100) // warunek kontynuacji pętli
{
  echo $zmienna;
  echo $inna;
  $zmienna += 10; // zmienna może się zmieniać szybciej/wolniej/wcale
  $inna -= 5; // sprawdzanych może być wiele zmiennych
}
?>
