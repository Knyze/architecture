<?php


class Shop
{
    public function buySocks(IPayment $payment, $sum, $number)
    {
        $payment->pay($sum, $number);
    }
}