<?php

// echo $_GET['a'] + $_GET['b'];

//直接在url上打a=4&b=8等等這串因為不完整所以會出現notice

// $a = isset($_GET['a']) ? $_GET['a'] : 0;
// $b = isset($_GET['b']) ? $_GET['b'] : 0;


$a = $_GET['a'] ?? 0; // php 7
$b = $_GET['b'] ?? 0;

echo $a + $b;
