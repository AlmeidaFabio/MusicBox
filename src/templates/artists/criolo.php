<?php 
require 'template.php';


$array = array(
    "titulo" => "Criolo",
    "musica" => "Subirusdoistiozin",
    "estilo" => "Rap",
    "artist" => "criolo",
    "music" => "subirusdoistiozin.mp3"
);


$tpl = new Template('template.phtml');
$tpl->render($array);
