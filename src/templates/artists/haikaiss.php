<?php 
require 'template.php';


$array = array(
    "titulo" => "Haikaiss",
    "musica" => "Rap Lord",
    "estilo" => "Rap",
    "artist" => "haikaiss",
    "music" => "rap_lord.mp3"
);


$tpl = new Template('template.phtml');
$tpl->render($array);