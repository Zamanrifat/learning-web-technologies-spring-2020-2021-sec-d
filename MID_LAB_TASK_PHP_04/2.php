<?php
$amount = 95.55;
$vat = 15;

 

echo round($amount * (($vat / 100) + 1), 2);
?>