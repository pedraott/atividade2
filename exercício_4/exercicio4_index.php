<?php

    if (isset($_GET['mes']) && isset($_GET['dia']) && isset($_GET['ano'])) {
        $mes = $_GET["mes"];
        $dia = $_GET["dia"];
        $ano = $_GET["ano"];

        function somatorio($mes_parametro){
            $soma_mes = 0;
            for ($mes_parametro; $mes_parametro >=1 ; $mes_parametro--) { 
                $soma_mes += $mes_parametro; 
            }

            return $soma_mes;
        }

        function safadao($dia_parametro, $somatorio_parametro, $ano_parametro){
            $safadeza = somatorio($somatorio_parametro) + (($ano_parametro/100) * (50-$dia_parametro));
            $anjo = 100 - $safadeza;
            $resultados = [$safadeza, $anjo];
            return $resultados;
        }

        $resultados_finais = safadao($dia, $mes, $ano);

        require 'exercicio4.php';
        require 'exercicio4_dados.php';

    }else{
        require 'exercicio4.php';
    }

?>