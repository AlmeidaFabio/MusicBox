<?php 
require 'template.php';


$array = array(
    "titulo" => "Guns N' Roses",
    "musica" => "Sweet Child O' Mine",
    "estilo" => "Rock",
    "artist" => "guns n' roses",
    "music" => "SweetChildO'Mine.mp3"
);


$tpl = new Template('template.phtml');
$tpl->render($array);