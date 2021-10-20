<?php
define("ESCOLA", "Senac Penha");
$curso = "Desenvolvedor Fullstack 2021";
$tecnologias = ["HTML5", "CSS3", "JS", "PHP", "MySQL"];

function verificaIdade(int $idade):string {
    if( $idade >= 18 ){
        return "maior de idade";
    } else {
        return "menor de idade";
    }
}
