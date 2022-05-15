<?php

function show_name() {
    echo 'hello world'.'<br>';
    // code here
}

show_name();

function show_name_2 ($param) {
    echo $param.'<br>';
}

show_name_2('t3h');

function show_name_3($name, $age, $address) {
    echo "Ten : $name , tuoi : $age, dia chi : $address".'<br>';
}

show_name_3('trung', '30', 'HCM');


function show_name_4($name, $age, $address = 'HCM') {
    echo "Ten : $name , tuoi : $age, dia chi : $address".'<br>';
}

show_name_4('trung', '30');


function sum($a , $b) {
    return $a + $b;
}

$c = sum(3,4);

echo $c;

$a = ' T3H';
var_dump($a);
$b = trim(' T3H');
var_dump($b);

$str = 'trung,tam,t3h';
$d = explode(',', $str);
print_r($d);

$e = implode(',', $d);
print_r($e);