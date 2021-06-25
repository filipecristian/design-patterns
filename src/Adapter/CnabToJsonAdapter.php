<?php

namespace App\Adapter;

class CnabToJsonAdapter extends Cnab
{
    public function __construct(string $bank, float $transactionValue)
    {
        parent::__construct($bank, $transactionValue);
    }

    public function generate(): string
    {
        return json_encode([
            'bank'  => $this->bank,
            'value' => $this->transactionValue,
        ]);
    }
}
