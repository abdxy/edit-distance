<?php

require('autoload.php');

use src\Levenshtein;
use src\Hamming;

function hammingTest(string $str1, string $str2,int $expected)
{
    $dis = Hamming::create($str1,$str2);
    if($dis == $expected){
        echo 'ok';
    }else {
        echo 'NO, '.' expected : '.$expected.' actual : '.$dis;
    }
    echo "\n";
}

function levenshteinTest(string $str1, string $str2,int $expected)
{
    $dis = Levenshtein::create($str1,$str2);
    if($dis = 2){
        echo 'ok';
    }else {
        echo 'NO, '.' expected : '.$expected.' actual : '.$dis;
    }
    echo "\n";
}

hammingTest('test','t',3);
hammingTest(' ','fsaaas',6);
hammingTest('','',0);
hammingTest('test','aeet',2);
hammingTest('abd','abd',0);
hammingTest('sss','aaa',3);
levenshteinTest('ali','fali',1);
levenshteinTest('dds','',3);
levenshteinTest('ddss','ddss',0);
levenshteinTest('','',0);
levenshteinTest('ddd','aaa',3);