<?php 
require 'template.php';


$array = array(
    "titulo" => "Pink floyd",
    "musica" => "Another Brick in the Wall",
    "estilo" => "Rock",
    "artist" => "pinkfloyd",
    "music" => "AnotherBrickintheWall.mp3",
    "texto1" => "Pink Floyd foi uma banda britânica de rock, formada em Londres em 1965",   
    "texto2" => "Seu trabalho foi marcado pelo uso de letras filosóficas, experimentações musicais, encartes de álbuns inovadoras e shows elaborados.",
    "texto3" => "O Pink Floyd é um dos grupos de rock mais influentes e comercialmente bem-sucedidos da história.",
    "texto4" => "Pink Floyd foi fundada pelos estudantes Syd Barrett como guitarrista e vocalista, Nick Mason como baterista, Roger Waters como baixista e vocalista e Richard Wright como tecladista e vocalista.",
    "texto5" => "Sob a liderança de Barrett, lançaram dois singles de sucesso e um bem-sucedido álbum de estreia, The Piper at the Gates of Dawn, de 1967.",
    "texto6" => "David Gilmour foi integrado como o quinto membro em dezembro de 1967, enquanto Barrett saiu, em abril de 1968, por uma deteriorização mental, de motivos, até hoje, controversos.",
    "texto7" => " A partir deste período, a banda se readaptou, com a crescente ascensão de Waters como letrista e autor por trás dos conceitos de álbuns os quais tornaram-se notórios por parte do público e crítica, como The Dark Side of the Moon (1973), Wish You Were Here (1975), Animals (1977) e The Wall (1979).",
    "link" => "https://pt.wikipedia.org/wiki/Pink_Floyd",
);


$tpl = new Template('template.phtml');
$tpl->render($array);