<?php


class KiwiPayment implements IPayment
{
    public function pay($sum, $number)
    {
        echo "Платежная система Киви: покупка носков на сумму {$sum}. Оплата с номера {$number}" . PHP_EOL;
    }
}