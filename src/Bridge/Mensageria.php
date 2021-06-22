<?php


namespace App\Bridge;


interface Mensageria
{
    public function sendMessage(string $tube, string $content);
}
