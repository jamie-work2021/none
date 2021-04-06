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
echo json_encode($people, JSON_UNESCAPED_UNICODE);
