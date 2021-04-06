<?php

$a = empty($_GET['a']) ? 0 : intval($_GET['a']); //獲取變數的整數值
$b = empty($_GET['b']) ? 0 : intval($_GET['b']);

echo $a + $b;
//也可以這樣寫
echo ($a + $b) . '<br>'; // .做字串的串接 +做數值的運算

$c = "";

// $c = [];

echo empty($c) ? '空的' : '不是';
//(也可以是null/[]/0這些都為空)


//intval() => js 的 parseInt()
//floatval    js 的 parseFloat()
//stringval   js 的 "+ 直接給括號就為字串