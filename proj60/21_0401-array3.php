<pre>
<?php
$ar1 = [
    'name' => 'Bill',
    'age' => 27,
    'gender' => 'male',
];
$ar2 = [2, 4, 6, 8];
foreach ($ar1 as $k => $v) {  //只有一個變數就是呈現value
    echo "$k : $v<br>";
}
echo "-----------------------<br>";
foreach ($ar2 as $k => $v) {
    echo "$k : $v<br>";
}


?>

</pre>