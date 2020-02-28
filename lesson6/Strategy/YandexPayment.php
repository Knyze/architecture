<?php


class YandexPayment implements IPayment
{
    public function pay($sum, $number)
    {
        echo "Платежная система Yandex: покупка носков на сумму {$sum}. Оплата с номера {$number}" . PHP_EOL;
    }
}