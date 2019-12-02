<?php 
require 'template.php';


$array = array(
    "titulo" => "Haikaiss",
    "musica" => "Rap Lord",
    "estilo" => "Rap",
    "artist" => "haikaiss",
    "music" => "rap_lord.mp3",
    "texto1" => "Haikaiss é um grupo de rap formado em São Paulo no ano de 2006. É composto por SPVIC, Spinardi, Pedro Qualy e DJ Sleep",   
    "texto2" => "Com 13 anos de carreira, é considerado um dos maiores grupos de rap do Brasil.",
    "texto3" => "No início, a banda era formada por Spvic, Spinardi e Ursso, com a saída de Ursso, Qualy e DJ Sleep entraram para o grupo.",
    "texto4" => "Em março de 2017, lançaram o single Raplord, música que virou hit estando entre as mais tocadas dos streamings de música do país, se tornando uma das faixas de maior sucesso do grupo, entrando para a trilha sonora do game internacional Need for Speed: Payback.",
    "texto5" => "O sucesso foi tanto, que levou o grupo do YouTube para grandes emissoras de Televisão e apresentações no Planeta Atlântida e Lollapalooza de 2017 para representar o rap nacional.",
    "texto6" => "Em junho de 2018, a cantora Clau lançou em parceria com o grupo e Cortesia da Casa o single Pouca Pausa. A música entrou para o TOP 10 do Spotify e recebeu disco de platina triplo pelo ótimo desempenho em suas execuções",
    "texto7" => "Com 13 anos de carreira, o grupo possui cinco álbuns, todos os produzidos pela sua gravadora própria Esse ponto Records",
    "link" => "https://pt.wikipedia.org/wiki/Haikaiss",
);


$tpl = new Template('template.phtml');
$tpl->render($array);