<?php
$str = 'ahb acb aeb aeeb adcb axeb oxxo obbo oeeo';
$pattern = '/o..o/';
preg_match_all($pattern, $str, $matches);
print_r($matches[0]);
?>