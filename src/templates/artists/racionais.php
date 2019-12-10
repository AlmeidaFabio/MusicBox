<?php 
require 'template.php';


$array = array(
    "titulo" => "Racionais Mc's",
    "musica" => "Estilo Cachorro",
    "estilo" => "Rap",
    "artist" => "racionais",
    "music" => "estilo_cachorro.mp3",
    "texto1" => "Racionais MC's é um grupo brasileiro de rap, fundado em 1988, e formado pelos mc's Mano Brown, Edi Rock e Ice Blue e o DJ KL Jay.",   
    "texto2" => "É o maior grupo de Rap do Brasil e está entre as bandas mais influentes do país.",
    "texto3" => "Suas canções demonstram a preocupação em denunciar a destruição da vida de jovens negros e pobres das periferias brasileiras e o resultado do racismo e do preconceito, ao sustentarem a miséria diretamente ligada com a violência e o crime.",
    "texto4" => "Temas como a brutalidade da polícia, do crime organizado e do estado, bem como o preconceito, as drogas e a exclusão social são recorrentes nas letras do conjunto.",
    "texto5" => "Embora inicialmente conhecido apenas na capital paulista, o grupo conseguiu alcançar sucesso significativo a partir dos álbuns Raio X Brasil (1993), Sobrevivendo no Inferno (1997) e Nada como um Dia após o Outro Dia (2002).",
    "texto6" => "Nascido no final da década de 1980, o nome do grupo foi inspirado no disco Racional de Tim Maia.",
    "texto7" => "A primeira gravação do grupo foi feita em 1988, quando o selo Zimbabwe Records lançou a coletânea Consciência Black, Vol. I",
    "link" => "https://pt.wikipedia.org/wiki/Racionais_MC%27s",
);


$tpl = new Template('template.phtml');
$tpl->render($array);