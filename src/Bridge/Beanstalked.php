<?php

namespace App\Bridge;

class Beanstalked implements Mensageria
{
    const TYPE_MENSAGERIA = 'Beanstalked';

    public function sendMessage(string $tube, string $content)
    {
        echo sprintf(
            '[%s] Enviando conteudo no tube:%s | message:%s',
            self::TYPE_MENSAGERIA,
            $tube,
            $content
        );
    }
}
