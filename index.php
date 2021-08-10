<?php

echo 'Un texto de una línea
varias líneas
comilla simple \' backslash \\ continuar con mas texto
$variable <br>';

$name = 'Juanes';
echo "mi nombre es $name <br>";

$courses = [
    'backend' => [
        'PHP',
        'Laravel'
    ]
];

class User{
    public $name = 'Juan';
}

$user = new User;

echo "$user->name quire aprender {$courses['backend'] [0]} <br>";

// variable variables
$teacher = 'italo';
$italo = 'Profesor de PHP';
echo "$teacher es ${$teacher} <br>";

function getTeacher(){
    return 'teacher';
}

$teacher = 'Italo';

echo "${getTeacher()} enseña PHP";