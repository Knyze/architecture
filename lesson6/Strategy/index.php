<?php

spl_autoload_register(function ($class) {
	include $class.'.php';
});

$shop = new Shop;
$shop->buySocks(new KiwiPayment, 100, 895555555);
$shop->buySocks(new YandexPayment, 300, 895666666);
$shop->buySocks(new WebMoneyPayment, 500, 895677777);