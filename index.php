<?php

require 'func.php';

$names = [
    'Abas',

    'Flora',

    'Esther',

    'Aniefon',
];

$person = [

    'age' => 31,

    'hair' => 'grey',

    'career' => 'web developer',

];

$person['name'] = 'Abasifreke';

unset($person['age']);

echo '<pre>';

var_dump($person);

echo '</pre>';

$tasks = [

    'title' => 'Learn PHP',

    'due' => 'sunday',

    'assigned_to' => 'Abass',

    'completed' => false,
];

require 'index.view.php';

dumpanddie($tasks);
