<?php

namespace App\Adapter;

class Cnab
{
    /**
     * @var string
     */
    protected string $bank;
    /**
     * @var float
     */
    protected float $transactionValue;
    /**
     * Cnab constructor.
     * @param string $bank
     * @param float $transactionValue
     */
    public function __construct(string $bank, float $transactionValue)
    {
        $this->bank = $bank;
        $this->transactionValue = $transactionValue;
    }
    /**
     * @return string
     */
    public function generate(): string
    {
        return sprintf('%s%s',
            str_pad($this->bank, 10, "0"),
            str_pad($this->transactionValue, 10, "0")
        );
    }
}
