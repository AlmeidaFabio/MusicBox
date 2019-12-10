<?php 
require 'template.php';


$array = array(
    "titulo" => "Syn Cole",
    "musica" => "Feel Good",
    "estilo" => "Eletrônicas",
    "artist" => "syncole",
    "music" => "Feel_Good.mp3",
    "texto" => "",   
    "texto" => "",
    "texto" => "",
    "texto" => "",
    "texto" => "",
    "texto" => "",
    "texto" => "",
    "texto" => "",
);


$tpl = new Template('template2.phtml');
$tpl->render($array);