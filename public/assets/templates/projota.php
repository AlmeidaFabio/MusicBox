<?php 
require 'template.php';


$array = array(
    "titulo" => "Projota",
    "musica" => "Muleque de vila (ao vivo)",
    "estilo" => "Rap",
    "artist" => "projota",
    "music" => "muleque_de_vila_ao_vivo.mp3"
);


$tpl = new Template('template.phtml');
$tpl->render($array);