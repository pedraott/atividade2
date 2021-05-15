<?php
	
	const ID = "jWwA7wSYT4FSU5y8M4Itm";
	const SECRET = "mxxdDjnkVVwYXHquH5bJy2tigfTUErGkHNClweR0";

	const BASE_URL = "https://api.aerisapi.com/conditions/";
	$cidade = "";
    if(isset($_GET['campo_cidade'])){
        $cidade = $_GET['campo_cidade'];

        $cidade = urlencode($cidade);

        $url = BASE_URL . "{$cidade},br?client_id=" . ID . "&client_secret=" . SECRET;

        $json  = file_get_contents($url);
        $dados = json_decode($json, true);

        $nome = $dados['response'][0]['place']['name'];
        $temperatura = $dados['response'][0]['periods'][0]['tempC'];
        $sensacao = $dados['response'][0]['periods'][0]['feelslikeC'];
        $umidade = $dados['response'][0]['periods'][0]['humidity'];
        $velocidade = $dados['response'][0]['periods'][0]['windSpeedKPH'];
        include "exercicio2_dados.php";
        include "exercicio2.php";
    }else{
        include "exercicio2.php";
    }