<?php

require __DIR__ . '/vendor/autoload.php';

use App\Bridge\Beanstalked;
use App\Bridge\Kafka;
use App\Bridge\Mensagem;
use App\Bridge\RabbitMQ;

$client = new Mensagem(new Kafka());
$client->sendMessage('tube-blessed', 'blessed,blessed,blessed!!!');

echo PHP_EOL;

$client = new Mensagem(new RabbitMQ());
$client->sendMessage('tube-blessed', 'blessed,blessed,blessed!!!');

echo PHP_EOL;

$client = new Mensagem(new Beanstalked());
$client->sendMessage('tube-blessed', 'blessed,blessed,blessed!!!');
