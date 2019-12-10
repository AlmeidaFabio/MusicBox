<?php 
require 'template.php';


$array = array(
    "titulo" => "Eletro Light",
    "musica" => "Symbolism",
    "estilo" => "Eletrônicas",
    "artist" => "eletroL",
    "music" => "symbolism.mp3",
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