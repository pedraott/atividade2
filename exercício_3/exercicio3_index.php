<?php

    $vetor1 = [
        "a" =>"Água com limão", 
        "b" =>"Bacon", 
        "c" =>"Cúrcuma", 
        "d" =>"Doce de leite",
        "e" =>"Azeite",
        "f" =>"Frango",
        "g" =>"Gengibre",
        "h" =>"Adoçante",
        "i" =>"Açúcar",
        "j" =>"Jiló",
        "k" =>"Comida Japonesa",
        "l" =>"Leite",
        "m" =>"Macarrão",
        "n" =>"Nata",
        "o" =>"Ovo",
        "p" =>"Pizza",
        "q" =>"Óleo de coco",
        "r" =>"Rabanada",
        "s" =>"Suco detox",
        "t" =>"Sal rosa",
        "u" =>"Glutamina",
        "v" =>"Jiló",
        "w" =>"Peixe",
        "x" =>"Própolis",
        "y" =>"Kumbucha",
        "z" =>"Peixe"

    ];

    $vetor2 = [
        "janeiro" => "ao acordar",
        "fevereiro" => "pré-treino",
        "março" => "amassado com limão",
        "abril" => "no cabelo",
        "maio" => "em Jejum",
        "junho" => "de 3 em 3 horas",
        "julho" => "no chá",
        "agosto" => "no café",
        "setembro" => "Depois das 18h00",
        "outubro" => "antes da aula",
        "novembro" => "misturado na àgua",
        "dezembro" => "antes do almoço",

        "Janeiro" => "ao acordar",
        "Fevereiro" => "pré-treino",
        "Março" => "amassado com limão",
        "Abril" => "no cabelo",
        "Maio" => "em Jejum",
        "Junho" => "de 3 em 3 horas",
        "Julho" => "no chá",
        "Agosto" => "no café",
        "Setembro" => "Depois das 18h00",
        "Outubro" => "antes da aula",
        "Novembro" => "misturado na àgua",
        "Dezembro" => "antes do almoço",    

        "01" => "ao acordar",
        "02" => "pré-treino",
        "03" => "amassado com limão",
        "04" => "no cabelo",
        "05" => "em Jejum",
        "06" => "de 3 em 3 horas",
        "07" => "no chá",
        "08" => "no café",
        "09" => "Depois das 18h00",
        "10" => "antes da aula",
        "11" => "misturado na àgua",
        "12" => "antes do almoço",

        "1" => "ao acordar",
        "2" => "pré-treino",
        "3" => "amassado com limão",
        "4" => "no cabelo",
        "5" => "em Jejum",
        "6" => "de 3 em 3 horas",
        "7" => "no chá",
        "8" => "no café",
        "9" => "Depois das 18h00"

    ];

    $vetor3 = [
        "1" => "diminiu o inchaço", 
        "2" => "diminiu o inchaço", 
        "3" => "diminiu o inchaço",
        "4" => "previne infarto", 
        "5" => "previne infarto", 
        "6" => "previne infarto",
        "7" => "cura dor de dente", 
        "8" => "cura dor de dente", 
        "9" => "cura dor de dente",
        "10" => "limpa o fígado", 
        "11" => "limpa o fígado", 
        "12" => "limpa o fígado",
        "13" => "deixa mais inteligente", 
        "14" => "deixa mais inteligente", 
        "15" => "deixa mais inteligente",
        "16" => "limpa as artérias", 
        "17" => "limpa as artérias", 
        "18" => "limpa as artérias",
        "19" => "deixa musculos", 
        "20" => "deixa musculos", 
        "21" => "deixa musculos",
        "22" => "fortalece a unha", 
        "23" => "fortalece a unha", 
        "24" => "fortalece a unha",
        "25" => "mata", 
        "26" => "mata", 
        "27" => "mata",
        "28" => "dá sorte", 
        "29" => "dá sorte", 
        "30" => "dá sorte",
        "31" => "da azar"
    ];

    if (isset($_GET['letra_nome']) && isset($_GET['mes_nascimento']) && isset($_GET['dia_nascimento'])) {
        # code...
        $letra_nome = strtolower($_GET['letra_nome']);
        $mes_nascimento = $_GET['mes_nascimento'];
        $dia_nascimento = $_GET['dia_nascimento'];
        $frase_fake = "{$vetor1[$letra_nome]} {$vetor2[$mes_nascimento]}, {$vetor3[$dia_nascimento]}";
        include "exercicio3_dados.php";
    }else{
        include "exercicio3.php";
    }