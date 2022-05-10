<?php

include ('../vendor/autoload.php');
use Adw\Formatter\Number;
use Adw\Formatter\Currency;

// number 
$n1 =  new Number(100050.93);
echo 'exp: default';
echo '<br/>';
echo $n1;
echo '<br/>';
echo 'exp: konversi string ke format nominal indo';
echo '<br/>';
echo $n1->string(); 
echo '<br/>';
$n2 =  new Number('100.050,93');
echo 'exp: konversi string ke format float';
echo '<br/>';
echo $n2->decimal(); 

// rupiah
echo '<br/>';
$c1 =  new Currency(100050.93);
echo 'exp: default';
echo '<br/>';
// echo $c1;
echo '<br/>';
echo 'exp: konversi int ke format currency (default rupiah)';
echo '<br/>';
echo $c1->format(); 
echo '<br/>';
echo 'exp: konversi int ke terbilang';
echo '<br/>';
// echo $c1->terbilang(); 