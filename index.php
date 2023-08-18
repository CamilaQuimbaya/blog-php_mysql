<?php


require 'admin/config.php';
require 'functions.php';


$conexion = conexion($bd_config);

if(!$conexion){
    header('Location: error.php');
}

// echo pagina_actual();


$posts = obtener_post($blog_config['post_por_pagina'], $conexion);
// print_r($posts);

if(!$posts){
    header('Location: error.php');
}

require 'views/index.view.php'


?>