<?php
$empty1 = [];
$empty2 = array();

$names1 = ['Harry', 'Ron', 'Hermione'];
$names2 = array('Harry', 'Ron', 'Hermione');

$status1 = [
    'name' => 'James Potter',
    'status' => 'dead'
];
$status2 = array(
    'name' => 'James Potter',
    'status' => 'dead'
);

$names1 = [
    0 => 'Harry',
    1 => 'Ron',
    2 => 'Hermione'
];

$books = [
    '1984' => [
        'author' => 'George Orwell',
        'finished' => true,
        'rate' => 9.5
    ],
    'Romeo and Juliet' => [
        'author' => 'William Shakespeare',
        'finished' => false
    ]
];

$properties = [
    'firstname' => 'Tom',
    'surname' => 'Riddle',
    'house' => 'Slytherin'
];

var_dump($properties);
$properties1 = $properties2 = $properties3 = $properties;
sort($properties1);
var_dump($properties1);
asort($properties3);
var_dump($properties3);
ksort($properties2);
var_dump($properties2);









