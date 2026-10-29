<?php
$tiradan1 = 0;
$tiradan2 = 0;
$tiradan3 = 0;
$tiradan4 = 0;
$tiradan5 = 0;
$tiradan6 = 0;
for($i = 0;$i<6000000;$i++) {
    $tirada = rand(1, 6);
    if ($tirada == 1) {
        $tiradan1++;
    }
    if ($tirada == 2) {
        $tiradan2++;
    }
    if ($tirada == 3) {
        $tiradan3++;
    }
    if ($tirada == 4) {
        $tiradan4++;
    }
    if ($tirada == 5) {
        $tiradan5++;
    }
    if ($tirada == 6) {
        $tiradan6++;
    }
}
 print("Tirada con numero 1 $tiradan1 \n");
 print("Tirada con numero 2 $tiradan2 \n");
 print("Tirada con numero 3 $tiradan3 \n");
 print("Tirada con numero 4 $tiradan4 \n");
 print("Tirada con numero 5 $tiradan5 \n");
 print("Tirada con numero 6 $tiradan6 \n");

