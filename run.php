<?php

require './vendor/autoload.php';

$server = 'mqtt.tago.io';
$port = 1883;
$clientId = 'senai';

$mqtt = new \PhpMqtt\Client\MqttClient($server, $port, $clientId);

$connectionSettings = (new \PhpMqtt\Client\ConnectionSettings)
    ->setConnectTimeout(3)
    ->setUseTls(false)
    ->setTlsSelfSignedAllowed(false)
    ->setUsername('Default')
    ->setPassword('06f08ea6-9e27-420f-94ba-e8692cd1c006');

try {
    $mqtt->connect($connectionSettings, true);
    echo "Conectado !";

    $topico = 'tago/sensores/sensor_de_temperatura_1';

    while (true) {
        $json = json_encode(getMsg());
        $mqtt->publish($topico, $json, 0);
        echo "Publicando: ".$json;
        echo "\n";
        sleep(5);
    }

} catch (Exception $e) {
    echo "Não conectado";
    echo "\n";
    echo $e->getMessage();
}

function getMsg() {

    $dados = [];

    $dados [0]['variable'] = 'temperatura';
    $dados [0]['value'] = 22;

    return $dados;

}


