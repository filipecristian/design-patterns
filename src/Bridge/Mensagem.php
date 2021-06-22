<?php

namespace App\Bridge;

class Mensagem
{
    private Mensageria $mensageria;

    public function __construct(Mensageria $mensageria)
    {
        $this->mensageria = $mensageria;
    }

    public function sendMessage(string $tube, string $content)
    {
        $this->mensageria->sendMessage($tube, $content);
    }
}
