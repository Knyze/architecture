<?php

spl_autoload_register(function ($class) {
	include $class.'.php';
});

$subscriber = new PHP_VacancySubscriber();

$jobSeeker1 = new JobSeeker('Вася', 'vasya.mail.ru', 1);
$jobSeeker2 = new JobSeeker('Петя', 'petya.mail.ru', 2);
$jobSeeker3 = new JobSeeker('Маша', 'masha.mail.ru', 3);

$subscriber->addJobSeeker($jobSeeker1);
$subscriber->addJobSeeker($jobSeeker3);

$subscriber->setVacancy(['php-программист']);

$subscriber->removeJobSeeker($jobSeeker3);

$subscriber->notify();
