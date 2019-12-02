<?php 
require 'template.php';


$array = array(
    "titulo" => "Led Zeppelin",
    "musica" => "Rock And Roll",
    "estilo" => "Rock",
    "artist" => "led",
    "music" => "Rock And Roll.mp3",
    "texto1" => "Led Zeppelin foi uma banda britânica de rock formada em Londres, em 1968.",   
    "texto2" => " Consistia no guitarrista Jimmy Page, no vocalista Robert Plant, no baixista e tecladista John Paul Jones e no baterista John Bonham.",
    "texto3" => "Seu som pesado e violento de guitarra, enraizado no blues e música psicodélica de seus dois primeiros álbuns, é frequentemente reconhecido como um dos fundadores do heavy metal.",
    "texto4" => "Seu estilo foi inspirado em uma grande variedade de influências, incluindo a música folk, psicodélica e o blues.",
    "texto5" => "O grupo não gostava de lançar suas canções como singles, pois viam os seus álbuns como indivisíveis e completas experiências de escuta.",
    "texto6" => "Embora inicialmente impopular com os críticos, o grupo conseguiu um impacto comercial significativo nas vendas com Led Zeppelin (1969), Led Zeppelin II (1969), Led Zeppelin III (1970), o quarto álbum sem título (1971), Houses of the Holy (1973), e Physical Graffiti (1975).",
    "texto7" => "O quarto álbum, com a música Stairway to Heaven, está entre as obras mais populares e influentes do rock e ajudou a consolidar a popularidade do grupo.",
    "link" => "https://pt.wikipedia.org/wiki/Led_Zeppelin",
);


$tpl = new Template('template.phtml');
$tpl->render($array);