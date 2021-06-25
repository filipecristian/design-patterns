<?php

require __DIR__ . '/vendor/autoload.php';

use App\Adapter\Cnab;
use App\Adapter\CnabToJsonAdapter;
use App\Adapter\TransactionAppraiser;


/**
 * Interfaces incompatíveis o avaliador de transação espera receber um JSON porém a classe que tem só gera um CNAB
 */
//$cnab = new Cnab('ITAU', 55000);
//$transaction = $cnab->generate();
//$transactionAppraiser = new TransactionAppraiser($transaction);
//echo var_export($transactionAppraiser->isRisk(), true);

/**
 * Adptador converte o CNAB em JSON para o avaliador de transação poder fazer a análise
 */
$cnabToJsonAdapter = new CnabToJsonAdapter('NUBANK', 55000);
$transaction = $cnabToJsonAdapter->generate();

$transactionAppraiser = new TransactionAppraiser($transaction);
echo var_export($transactionAppraiser->isRisk(), true);

/*
 Bridge
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
*/
