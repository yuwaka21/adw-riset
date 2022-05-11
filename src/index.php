<?php

include ('../vendor/autoload.php');
use Adw\Formatter\Number;
use Adw\Formatter\Currency;
use Adw\Formatter\Date;
use Adw\Formatter\Time;

// number 
$n1 =  new Number(100050.93);
echo '<b>exp: default</b>';
echo '<br/>';
echo $n1;
echo '<br/>';
echo '<b>exp: konversi string ke format nominal indo</b>';
echo '<br/>';
echo $n1->string();
echo '<br/>';
$n2 =  new Number('100.050,93');
echo '<b>exp: konversi string ke format float</b>';
echo '<br/>';
echo $n2->decimal();
// Date
echo '<br/>';
$d1 =  new Date('2022-04-25 03:42:03');
echo '<b>exp: default</b>';
echo '<br/>';
echo $d1;
echo '<br/>';
echo '<b>exp: konversi datetime ke format date</b>';
echo '<br/>';
echo $d1->default();
echo '<br/>';
echo '<b>exp: konversi datetime ke format human date</b>';
echo '<br/>';
echo $d1->humanDate();

// time
echo '<br/>';
$t1 =  new Time('2022-04-25 03:42:03');
echo '<b>exp: default</b>';
echo '<br/>';
echo $t1;
echo '<br/>';
echo '<b>exp: konversi datetime ke format time</b>';
echo '<br/>';
echo $t1->default();
echo '<br/>';
echo '<b>exp: konversi datetime ke format human datetime</b>';
echo '<br/>';
echo $t1->humanTime();
echo '<br/>';
echo '<b>exp: konversi datetime ke format timelapse</b>';
echo '<br/>';
echo $t1->timelapse();