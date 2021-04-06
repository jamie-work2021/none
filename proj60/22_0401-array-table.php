<?php include __DIR__ . '/parts/config.php'; ?>
<?php

$title = '我的主頁';

$people = [
    [
        'name' => 'Bill',
        'age' => 27,
        'gender' => 'male',
    ],
    [
        'name' => 'jack',
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

?>
<?php include __DIR__ . '/parts/html-head.php' ?>
<?php include __DIR__ . '/parts/navbar.php' ?>
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Age</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($people as $p) : ?>
                <tr>
                    <td><?= $p['name'] ?></td>
                    <td><?= $p['gender'] ?></td>
                    <td><?= $p['age'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php include __DIR__ . '/parts/scripts.php' ?>
    <?php include __DIR__ . '/parts/html-foot.php' ?>