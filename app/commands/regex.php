<?php
$string='=7dfs931ssl21dn347-dm68;';
$result1=preg_replace('/[^0-9]/u','', $string);
$result2=preg_replace('/(\d)(\d{3})(\d{3})(d{4})/u','+$1 ($2) $3-$4', $result1);
echo 'Input:' . $string . PHP_EOL;
echo 'Output1:' . $result1 . PHP_EOL;
echo 'Output2: ' . $result2 . PHP_EOL;
