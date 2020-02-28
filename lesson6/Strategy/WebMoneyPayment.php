<?php


class WebMoneyPayment implements IPayment
{
    public function pay($sum, $number)
    {
        echo "Платежная система WebMoney: покупка носков на сумму {$sum}. Оплата с номера {$number}" . PHP_EOL;
    }
}