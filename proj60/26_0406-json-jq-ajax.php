<?php
$people = [
    [
        'name' => 'Bill',
        'age' => 27,
        'gender' => 'male',
    ],
    [
        'name' => '大衛',
        'age' => 30,
        'gender' => 'male',
    ],
    [
        'name' => 'mary',
        'age' => 18,
        'gender' => 'female',
    ],
    [
        'name' => 'anna',
        'age' => 26,
        'gender' => 'female',
    ],
];
// header('Content-Type: application/json');
echo json_encode([
    'get' => '$_GET',
    'people' => $people
], JSON_UNESCAPED_UNICODE);
