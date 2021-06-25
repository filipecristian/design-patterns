<?php

namespace App\Adapter;

use InvalidArgumentException;

/**
 * Class TransactionAppraiser
 * @package App\Adapter
 */
class TransactionAppraiser
{
    /**
     * @var object|mixed
     */
    public object $json;
    /**
     * TransactionAppraiser constructor.
     * @param string $json
     */
    public function __construct(string $json)
    {
        $json = json_decode($json);
        if ($json == false) {
            throw new InvalidArgumentException();
        }
        $this->json = $json;
    }
    /**
     * @return bool
     */
    public function isRisk(): bool
    {
        if ($this->json->bank === 'NUBANK' && $this->json->value >= 50000) {
            return true;
        }
        return false;
    }
}
