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
    echo "\n";

    $topico = 'tago/sensores/sensor_de_temperatura_1';

    $mqtt->subscribe($topico, function ($topic, $message) {
        echo sprintf("Received message on topic [%s]: %s\n", $topic, $message);
        echo "\n";
    }, 0);

    $mqtt->loop(true);

} catch (Exception $e) {
    echo "Não conectado";
    echo "\n";
    echo $e->getMessage();
}
