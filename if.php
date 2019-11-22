<?php
$a = 34;                // przypisujemy wartość zmiennej $a

if ($a%8 == 0)          // liczba podzielna przez osiem
  echo "Liczba podzielna przez osiem";

elseif ($a%4 == 0)      // liczba podzielna przez cztery
  echo "Liczba podzielna przez 4, ale nie przez 8";

elseif ($a%2 == 0)      // liczba podzielna przez dwa
  echo "Liczba podzielna przez 2, ale nie przez 4";

else                    // żadna z powyższych
  echo "Liczba nieparzysta";
?>
