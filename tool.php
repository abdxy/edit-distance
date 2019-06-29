<?php

require('autoload.php');

use src\Levenshtein;
use src\Hamming;

echo "welcome to command line edit distance tool \n";
echo "Enter first string : ";
$str1 = trim(fgets(STDIN));
echo "Enter second string : ";
$str2 = trim(fgets(STDIN));

echo 'Levenshtein distance :'.Levenshtein::create($str1,$str2);
echo "\nHamming distance : ".Hamming::create($str1,$str2);

