<?php


interface Ipayment
{
    public function pay($sum, $number);
}