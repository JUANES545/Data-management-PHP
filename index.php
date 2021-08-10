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

echo "${getTeacher()} enseña PHP <br>";

/*
$data = 'Estudio PHP';
//echo $data[0];

$post = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, voluptas accusantium? Vitae facilis, repellat qui accusantium consequuntur ex cumque eligendi aut laudantium dolores sed molestias vero nostrum aperiam veritatis delectus.";
$extract = substr($post, 0, 20);

echo "$extract... [ver más]";
*/

/*
$data = 'javaScript, php, laravel'; // campo tags
$tags = explode(', ', $data); // array
echo "<pre>";
var_dump($tags);
*/

$courses = ['javaScript', 'php', 'laravel'];
echo implode(', ', $courses);

$course = "    curso de PHP    ";
$course = trim($course); // Elimina los espacios ltrim-rtrim
echo "<pre>";
echo "Quiero aprender $course, y otro texto <br>";

// Alterar
$text = "PHP es UN LENGUAJE<br>"; // slug
echo strtoupper($text); //capital - ordinal letters
echo strtolower($text);
echo ucfirst($text); //first Capital
echo lcfirst($text); //first Lower
echo "<pre>";

// Reemplazar
$slug = str_replace(' ','-', $text); //reemplaza espacios por -
echo strtolower($slug);

// Modificación
$code = 39;
echo str_pad($code, 8, '#'); //llena un espacio de caracteres con #
echo "<br>";
echo str_pad($code, 8, '#',STR_PAD_BOTH);
echo "<pre>";

echo strip_tags($text); // Elimina etiquetas de HTML
echo "<br>";

$text2 = "PHP es UN LENGUAJE, año 2020, programación<br>";
echo strtoupper($text2); // monobyte - sin caracteres especiales
echo mb_strtoupper($text2); // multibyte