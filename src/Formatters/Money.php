<?php

namespace BrMoney\Formatters;

class Money
{
    public function toReais(float $values)
    {
        return 'R$ ' . number_format($value, 2, ',', '.');
    }
}